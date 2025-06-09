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
                sans: ["Inter", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                devantary: {
                    primary: "#2D1B69", // ungu gelap
                    secondary: "#1E3A8A", // biru navy
                    accent: "#6E3482", // aksen utama baru
                    accentDark: "#49225B", // aksen ungu tua
                    accentLight: "#A56ABD", // aksen ungu terang
                    accentXlight: "#E7DBEF", // aksen ungu sangat terang
                    accentXXlight: "#F5EBFA", // aksen ungu pucat
                    muted: "#F8FAFC", // background muted
                    text: "#1E293B", // text color
                    "text-light": "#64748B", // text color light
                },
                "devantary-primary": "#2D1B69",
                "devantary-accent": "#4B0082",
                "devantary-muted": "#E5E4E2",
                "devantary-text": "#1F2937",
                "devantary-text-light": "#6B7280",
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
