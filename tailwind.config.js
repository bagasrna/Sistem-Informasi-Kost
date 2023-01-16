/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily:{
        'Poppins': 'Poppins'
      },
      screens:{
        'vsm' : '400px'
      }
    },
  },
  plugins: [],
}
