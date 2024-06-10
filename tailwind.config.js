/** @type {import('tailwindcss').Config} */
export default {
	content: ['./**/*.html'],
	theme: {
		extend: {
			fontFamily: {
				MontserratText: ['Montserrat', 'sans-serif'],
				OpenSans: ['Open Sans', 'sans-serif'],
			},
		},
		lineHeight: {
			tight: '1.2',
		},
		boxShadow: {
			inset: 'inset 0 4px 10px 0 rgba(255, 255, 255, 0.1)',
		},
		letterSpacing: {
			wider: '.04em',
		},
		colors: {
			txt: '#232323',
			txt_gray: '#464646',
			white: '#fff',
		},
		listStyleType: {
			none: 'none',
			disc: 'disc',
			decimal: 'decimal',
			square: 'square',
		},
		container: {
			center: true,
		},
	},
	plugins: [
		require('flowbite/plugin'),
		function ({ addComponents }) {
			addComponents({
				'.container': {
					maxWidth: '100%',
					'@screen sm': {
						maxWidth: '640px',
					},
					'@screen md': {
						maxWidth: '768px',
					},
					'@screen lg': {
						maxWidth: '1024px',
					},
					'@screen xl': {
						maxWidth: '1426px',
					},
					'@screen 2xl': {
						maxWidth: '1426px',
					},
				},
			})
		},
	],
}
