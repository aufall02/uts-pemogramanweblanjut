/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/Views/**/**/*.php",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
};
