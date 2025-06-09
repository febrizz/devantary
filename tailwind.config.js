import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Poppins", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                devantary: {
                    primary: "#780000", // dark red
                    secondary: "#4D0000", // darker red
                    accent: "#A30000", // accent red
                    accentDark: "#5C0000", // dark accent red
                    accentLight: "#B33A3A", // light accent red
                    accentXlight: "#E8C8C8", // very light red
                    accentXXlight: "#F5E6E6", // pale red
                    muted: "#1A1A1A", // dark background
                    text: "#333333", // dark gray text
                    "text-light": "#666666", // light gray text
                },
                "devantary-primary": "#701c1c",
                "devantary-accent": "#A30000",
                "devantary-muted": "#252525",
                "devantary-text": "#fff5fc",
                "devantary-text-light": "#fff5fc",
            },
            animation: {
                "float-slow": "float 6s ease-in-out infinite",
                "float-slower": "float 8s ease-in-out infinite",
                "pulse-slow": "pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite",
            },
            keyframes: {
                float: {
                    "0%, 100%": { transform: "translateY(0)" },
                    "50%": { transform: "translateY(-20px)" },
                },
            },
            backdropBlur: {
                xs: "2px",
            },
        },
    },

    plugins: [forms],
};
