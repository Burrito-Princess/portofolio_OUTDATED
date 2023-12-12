/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/*.{html,js}", "./dist/*/*.{html,js}"],
  theme: {
    colors: {
      king_pink: '#e8b7d5',
      king_white: '#f2f2f2',
      black: '#000000'
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