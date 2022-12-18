import React from 'react';
import { Link } from 'react-router-dom';
import logo from '../../images/trip-alpine-logo.png';
import { Container } from '../styles/StyleFooter';

const Footer = () => {
	return (
		<Container>
			<div className="container">
				<div className="row primary">
					<div className="col-lg-7">
						<img src={logo} alt="logo" />
					</div>
					<div className="col-lg">
						<ul className="nav flex-column">
							<li className="nav-item">
								<a className="nav-link" href="#/">
									About Our Packages
								</a>
							</li>
							<li className="nav-item">
								<a href="#/" className="nav-link">
									Read our blog
								</a>
							</li>
							<li className="nav-item">
								<Link to="/signup" className="nav-link">
									Sign up to Booking
								</Link>
							</li>
							<li className="nav-item">
								<a href="#/" className="nav-link">
									Add your Booking
								</a>
							</li>
						</ul>
					</div>
					<div className="col-lg">
						<ul className="nav flex-column">
							<li className="nav-item">
								<a className="nav-link" href="#/">
									Get help
								</a>
							</li>
							<li className="nav-item">
								<a href="#/" className="nav-link">
									Read FAQs
								</a>
							</li>
							<li className="nav-item">
								<a href="#/" className="nav-link">
									View all cities
								</a>
							</li>
							<li className="nav-item">
								<a href="#/" className="nav-link">
									Hotels near me
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div className="row secondary">
					<div className="col-lg-8">
						<p>Copyright &copy; 2022 | Trip Alpine</p>
					</div>
					<div className="col-lg">
						<ul className="nav">
							<li className="nav-item">Privacy Policy</li>
							<li className="nav-item">Terms of Use</li>
							<li className="nav-item">Pricing</li>
						</ul>
					</div>
				</div>
			</div>
		</Container>
	);
};

export default Footer;
