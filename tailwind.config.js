import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        "./node_modules/preline/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                average: ["Average Sans", ...defaultTheme.fontFamily.sans],
                montserrat: ["Montserrat", "sans-serif"],
                croissant: ['"Croissant One"', "sans-serif"],
                pinyon: ["Pinyon Script", "cursive"],
                poppins: ["Poppins", "sans-serif"],
                cormorant: ["Cormorant Infant", "serif"],
                cormorantGaramond: ['"Cormorant Garamond"', "serif"],
                sora: ["Sora", "sans-serif"],
                dmSerifDisplay: ["'DM Serif Display'", "serif"],
            },

            fontSmooth: {
                normal: "auto",
                thin: "thin",
                extralight: "extra-light",
                light: "light",
                medium: "medium",
                semibold: "semibold",
                bold: "bold",
                black: "black",
            },

            borderRadius: {
                "custom-lg": "130px",
            },
        },
    },

    plugins: [forms, require("flowbite/plugin"), require("preline/plugin")],
};
