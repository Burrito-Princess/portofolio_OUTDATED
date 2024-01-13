/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/*.{html,js}", "./dist/*/*.{html,js,php}", "./dist/*/*/*.{html,js,php}","dist/ross/*.{html, js, php}"],
  theme: {
    colors: {
      king_pink: '#e8b7d5',
      king_white: '#f2f2f2',
      black: '#000000',
      dark_pink: '#685369',
      king_blue: '#6E96CE',
    },
    extend: {
      width:{
        main: '40rem',
      },
      fontFamily: {
        'lato': ['lato', 'sans-serif'],
      },
      fontSize: {
        'small_main': '4rem',
        'tiny_main': '2.3rem',
      },
    },
  },
  plugins: [],
}