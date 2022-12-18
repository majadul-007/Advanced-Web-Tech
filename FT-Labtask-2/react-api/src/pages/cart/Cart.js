import React from 'react';
import { useState, useEffect} from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { useHistory } from 'react-router-dom';
import { CartSection } from '../../components/styles/StyleCart';
import { clearCart, deliveryDetails } from '../../redux/actions';
import CartItems from './CartItems';
import Payment from '../../components/payment/Payment';
import axios from "axios";


const Cart = () => {

	const [traveluserid,setTraveluserid] = useState("");
	const [name,setName] = useState("");
    const [email,setEmail] = useState("");
    const [phone,setPhone] = useState("");
    const [destination,setDestination] = useState("");
    const [members,setMembers] = useState("");
    const [days,setDays] = useState("");
	const [errs,setErrs] = useState({});


    const handleSubmit=(event)=>{
        event.preventDefault();
        const data={traveluserid:traveluserid, name:name, email:email, phone:phone, destination:destination
		, members:members, days:days};

        axios.post("http://127.0.0.1:8000/api/booking/create",data).
        then((succ)=>{
            //setMsg(succ.data.msg);
            window.location.href="/user-info";
        },(err)=>{
            debugger;
            setErrs(err.response.data);
        })
    }

	

	const hist = useHistory();
	const cartFoods = useSelector((state) => state.cart);
	const dispatch = useDispatch();
	const [ isDelivery, setIsDelivery ] = useState(false);
	const [isPaid, setIsPaid]= useState(false)
	const [ delivery, setDelivery ] = useState({
		type        : '',
		road        : '',
		flat        : '',
		name        : '',
		instruction : ''
	});

	// const handleInput = (e) => {
	// 	setDelivery({
	// 		...delivery,
	// 		[e.target.name]: e.target.value
	// 	});
	// };

	// const handlePayment = (id) => {
	// 	setUserPaymentInfo({
	// 		...userPaymentInfo,
	// 		id : id
	// 	});
	// };
	// const [ userPaymentInfo, setUserPaymentInfo ] = useState({
	// 	id          : '',
	// 	roadAddress : '',
	// 	flatAddress : ''
	// });

	// const handleForm = (e) => {
	// 	e.preventDefault();
	// 	setIsDelivery(true);
	// 	dispatch(deliveryDetails(delivery));
	// 	setUserPaymentInfo({
	// 		...userPaymentInfo,
	// 		roadAddress : delivery.road,
	// 		flatAddress : delivery.flat
	// 	});
	// };

	const clearCartHandler = () => {
		dispatch(clearCart());
	};

	const handlePlaceOrder = () => {
		hist.push('/complete-order');
	};

	//Total, Subtotal, Tax, Delivery Fee
	let subtotal = cartFoods.reduce((acc, curr) => {
		return acc + curr.price * curr.quantity;
	}, 0);

	let totalQuantity = cartFoods.reduce((acc, curr) => {
		return acc + curr.quantity;
	}, 0);

	let tax = subtotal / 100 * 5;
	// const deliveryFee = cartFoods.length * 60;
	const total = subtotal + tax ;

	return (
		<CartSection className="container cart-section">
			<div className="row justify-content-around cart-content">
				<div className="col-lg-5 form-info">
					
						<form onSubmit={handleSubmit}>
						<h4>Add Delivery Details</h4>
						<hr />
						<div className="form-group">
							<input
								type="text"
								name="type"
								className="form-control"
								placeholder="Your traveluserid"
								onChange={(e)=>{setTraveluserid(e.target.value)}}
								value={traveluserid}
								required
							/>
						</div>
						<div className="form-group">
							<input
								type="text"
								name="type"
								className="form-control"
								placeholder="Your Name"
								onChange={(e)=>{setName(e.target.value)}}
								value={name}
								required
							/>
						</div>
						<div className="form-group">
							<input
								type="text"
								name="road"
								className="form-control"
								placeholder="Your Email"
								onChange={(e)=>{setEmail(e.target.value)}}
								value={email}
								required
							/>
						</div>
						<div className="form-group">
							<input
								type="text"
								name="flat"
								className="form-control"
								placeholder="Phone Number"
								onChange={(e)=>{setPhone(e.target.value)}}
								value={phone}
								required
							/>
						</div>
						<div className="form-group">
							<input
								type="text"
								name="flat"
								className="form-control"
								placeholder="Your Destination"
								onChange={(e)=>{setDestination(e.target.value)}}
								value={destination}
								required
							/>
						</div>
						<div className="form-group">
							<input
								type="text"
								name="flat"
								className="form-control"
								placeholder="Members"
								onChange={(e)=>{setMembers(e.target.value)}}
								value={members}
								required
							/>
						</div>
						<div className="form-group">
							<input
								type="text"
								name="flat"
								className="form-control"
								placeholder="Total Days"
								onChange={(e)=>{setDays(e.target.value)}}
								value={days}
								required
							/>
						</div>
						
						
						<button type="submit" className="btn btn-save">
							Book 
						</button>
						{/* <input type="submit" value="Create"/>  */}
					</form>
					
					{/* <div className="payment-sec">
					{
						isDelivery && <Payment setIsPaid={setIsPaid} handlePayment={handlePayment} />
					}
					</div> */}
				</div>
				<div className="col-lg-5">
					{cartFoods.length >= 1 && (
						<div className="address-details">
							<h6>
								{/* From <strong>Gulshan Plaza Restaurant GPR</strong> */}
							</h6>
							{/* <p>Arriving in 20-30 min</p> */}
							{isDelivery && (
								<p>
									<strong>To: {delivery.road}</strong>
								</p>
							)}
						</div>
					)}

					{cartFoods.length >= 1 ? (
						<div className="cart-items">
							{cartFoods.map((food) => {
								return <CartItems key={food.id} food={food} />;
							})}
							<div>
								<button onClick={clearCartHandler} className="clear btn">
									Clear Cart
								</button>
							</div>
						</div>
					) : (
						<p style={{ color: '#F9204A', fontWeight: 'bold', fontSize: '1.5rem', textAlign: 'center' }}>
							No foods in the cart
						</p>
					)}
					<div className="price-details">
						<ul className="list-group">
							<li className="list-group-item d-flex justify-content-between align-items-center">
								Subtotal: {totalQuantity} item
								<span>
									<strong>${subtotal.toFixed(2)}</strong>{' '}
								</span>
							</li>
							<li className="list-group-item d-flex justify-content-between align-items-center">
								Tax
								<span>
									<strong>${tax.toFixed(2)}</strong>{' '}
								</span>
							</li>
							{/* <li className="list-group-item d-flex justify-content-between align-items-center">
								Delivery Fee
								<span>
									<strong>${deliveryFee}</strong>
								</span>
							</li> */}
							<li className="list-group-item d-flex justify-content-between align-items-center">
								Total
								<span>
									<strong>${total.toFixed(2)}</strong>{' '}
								</span>
							</li>
						</ul>
					</div>
					{cartFoods.length >= 1 && (
						<button
							onClick={handlePlaceOrder}
							className="btn btn-place"
							disabled={!isPaid}
							data-toggle="tooltip"
							data-placement="top"
							title={!isDelivery ? 'Fill delivery details to active place order' : ''}
						>
							{/* Place Order */}
						</button>
					)}
				</div>
			</div>
		</CartSection>
	);
};

export default Cart;
