/** @type {import('tailwindcss').Config} */

const colors = require("tailwindcss/colors");

module.exports = {
  content: ["./public/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        brown: {
          50: "#A3A47F",
        },
        // plugins: [require("@tailwindcss/forms")],
      },
    },
  },
};


