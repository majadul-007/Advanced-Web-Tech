import styled from 'styled-components';

export const Items = styled.nav`
	font-family: 'Montserrat', sans-serif;
	padding: 1rem 0;
	.logo {
		width: 150px;
		object-fit: contain;
	}
	.shopping-cart {
		position: relative;
		span {
			position: absolute;
			top: 3px;
			right: 5px;
			color: #f91944;
		}
	}
	.items {
		ul {
			li {
				.user {
					font-size: 0.9rem;
				}
				box-sizing: border-box;
				margin: 0 1rem;
				padding: 1rem 1rem;
				border-radius: 30px;
				cursor: pointer;
				border: 1px solid transparent;
				transition: all 0.3s ease;

				&:last-child {
					background-color: mediumspringgreen;
					a {
						color: #ffffff;
					}
				}

				.cart {
					color: mediumspringgreen;
					font-size: 1.2rem;
				}
				a {
					color: #1d2225;
					padding: .7rem;
					text-decoration: none;
					transition: all 0.3s linear;
					&:hover {
						color:mediumspringgreen;
					}
				}
				&:hover {
					background-color: #ffffff;
					border: 1px solid mediumspringgreen;
					color: black;
				}
			}
		}
	}
`;