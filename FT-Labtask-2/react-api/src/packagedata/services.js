import icoDeliver from '../Image/ICON/deliver.png';
import deliverMan from '../images/p1.jpg';
import notification from '../Image/ICON/notification.png';
import chef from '../images/p3.jpg';
import home from '../Image/ICON/home.png';
import homeDeliver from '../images/p5.jpg';

const services = [
	{
		id          : 1234,
		title       : 'Beautiful Condo',
		description :
			'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.',
		icon        : icoDeliver,
		img         : deliverMan
	},
	{
		id          : 3426,
		title       : 'Restaurants & Cafe ',
		description :
			'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.',
		icon        : notification,
		img         : chef
	},
	{
		id          : 2134,
		title       : '24/7 Support',
		description :
			'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.',
		icon        : home,
		img         : homeDeliver
	}
];

export default services;
