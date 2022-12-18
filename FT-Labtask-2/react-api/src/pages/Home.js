import React from 'react';
import Booking from '../components/Book-package/Booking';
import Hero from '../components/Hero/hero';
import Service from '../components/services/Service';

const Home = () => {
	return (
		<header>
			<Hero />
			<Booking />
			<Service />
		</header>
	);
};

export default Home;
