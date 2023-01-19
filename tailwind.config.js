/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
    theme: {
    extend: {},
    fontSize: {
      '5xl': '4.4rem',
      '3xl': '3rem',
      '2xl': '2.8rem',
      'xs': '1rem'
    },
    animation: {
      'spin': 'spin 13s linear infinite',
    },
    
    
  },
  plugins: [],
}