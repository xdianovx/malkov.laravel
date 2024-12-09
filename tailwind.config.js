/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                serif: "Forum",
            },
            colors: {
                gold: "#ae7d26",
                blue: "#153252",
            },
        },
    },
    plugins: [],
};
