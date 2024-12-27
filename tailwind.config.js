/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/views/vendor/pagination/*.blade.php",
  ],
  theme: {
    extend: {
      colors: {
        gold: "#ae7d26",
      },
    },
  },

  plugins: [],
};
