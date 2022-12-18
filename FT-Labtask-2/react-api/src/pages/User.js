import React from 'react';
import {useState,useEffect} from 'react';
import { useSelector } from 'react-redux';
import { Link } from 'react-router-dom';
import { UserDiv } from '../components/styles/StyleUser';
import axiosConfig from '../components/axiosConfig';
import icon from '../Image/ICON/user.png';

const User = () => {

	const [products, setProducts] = useState([]);
	const [profile, setProfile] = useState([]);
    
        useEffect(()=>{
            axiosConfig.get("http://127.0.0.1:8000/api/booking/list")
            .then(resp=>{
                console.log(resp.data);
                setProducts(resp.data);
            }).catch(err=>{
                console.log(err);
            });
        },[]);


	useEffect(()=>{
		axiosConfig.get("http://127.0.0.1:8000/api/myprofile")
		.then(resp=>{
			console.log(resp.data);
			setProfile(resp.data);
		}).catch(err=>{
			console.log(err);
		});
	},[]);


	const cartInfo = useSelector((state) => state.cart);
	const loginInfo = useSelector((state) => state.userInfo);

	return (
		<UserDiv className="container text-center">
			<div className="row justify-content-center">
				<div className="col-md-6 profile">
				
					<div className="user-img">
						



						{loginInfo.photoURL ? (
							<img src={loginInfo.photoURL} alt="user-img" className="img-fluid" />
						) : (
							<img src={icon} alt="user-img" className="img-fluid" />
						)}
					</div>
					{/* {loginInfo.email ? ( */}
						
						{profile.map(myprofile=>(
						<div className="user-name">
							<h3>
								<strong>{myprofile.name}</strong>
							</h3>
							<p>{myprofile.email}</p>
						</div>
						))}
					{/* ) : ( */}
						
						<p>You are logged In</p>
					{/* )} */}
					{cartInfo.length >= 1 ? (
						<h4>You have {products.length} items in cart</h4>
					) : (
						<h4>You have {products.length} items in cart</h4>
					)}

			
				</div>
			</div>
			<div className="row align-items-center justify-content-center">
				{products.map((order) => {
					return (
						<div className="col-lg-5 text-center" key={order.id}>
							<div className="cart-items mb-3">
								{/* <Link to={` /updatebooking/${item.id}`}> */}
							    <Link to={`/updatebooking/${order.id}`}>
									<strong>
										Order id: #{order.id}-{order.slug}
									</strong>
								</Link>

								{/* <img src={item.img} alt={item.name} className="img-fluid" /> */}
								<h6 className="mt-2">
									<strong>Destination: {order.destination}</strong>{' '}
								</h6>
								{/* <h6>Subtotal: ${(item.price * item.quantity).toFixed(2)}</h6> */}
								<h6>Total Members: {order.members}</h6>
								<h6>Total Days: {order.days}</h6>
							</div>
						</div>
					);
				})}
			</div>
		</UserDiv>
	);
};

export default User;
