import React from 'react';
import { useState, useEffect} from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { useHistory } from 'react-router-dom';
import { CartSection } from '../styles/StyleCart';
import { clearCart, deliveryDetails } from '../../redux/actions';
// import CartItems from './CartItems';
import Payment from '../payment/Payment';
import axios from "axios";


const UpdateBooking=()=>{

    // const [traveluserid,setTraveluserid] = useState("");
	const [name,setName] = useState("");
    const [email,setEmail] = useState("");
    const [phone,setPhone] = useState("");
    const [destination,setDestination] = useState("");
    const [members,setMembers] = useState("");
    const [days,setDays] = useState("");
	const [errs,setErrs] = useState({});


    const handleSubmit=(event)=>{
        event.preventDefault();
        const data={name:name, email:email, phone:phone, destination:destination
		, members:members, days:days};

        axios.post("http://127.0.0.1:8000/api/booking/update/{id}",data).
        then((succ)=>{
            //setMsg(succ.data.msg);
            window.location.href="/user-info";
        },(err)=>{
            // debugger;
            setErrs(err.response.data);
            console.log(err)
        })
    }

    return (
		<CartSection className="container cart-section">
			<div className="row justify-content-around cart-content">
				<div className="col-lg-5 form-info">
					
						<form onSubmit={handleSubmit}>
						<h4>Update Delivery Details</h4>
						<hr />
						
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
							Update 
						</button>
						{/* <input type="submit" value="Create"/>  */}
					</form>
					
					{/* <div className="payment-sec">
					{
						isDelivery && <Payment setIsPaid={setIsPaid} handlePayment={handlePayment} />
					}
					</div> */}
				</div>
				{/* <div className="col-lg-5">
					{cartFoods.length >= 1 && (
						<div className="address-details">
							<h6>
								
							</h6>
							
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
							
						</button>
					)}
				</div> */}
			</div>
		</CartSection>
    )

    




    

}


export default UpdateBooking;