/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/views/vendor/pagination/*.blade.php",
  ],

  plugins: [
    require("tailwindcss-plugins/pagination")({
      /* ... */
    }),
  ],
};
