import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class', // Enable class-based dark mode
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
                // Light theme colors
                light: {
                    primary: "#780000", // dark red
                    secondary: "#4D0000", // darker red
                    accent: "#A30000", // accent red
                    accentDark: "#5C0000", // dark accent red
                    accentLight: "#B33A3A", // light accent red
                    accentXlight: "#E8C8C8", // very light red
                    accentXXlight: "#F5E6E6", // pale red
                    background: "#FFFFFF", // white background
                    surface: "#F8F8F8", // light gray surface
                    muted: "#F0F0F0", // light muted
                    text: "#1A1A1A", // dark text
                    'text-light': "#4A4A4A", // light text
                    border: "#E5E5E5", // border color
                },
                // Dark theme colors
                dark: {
                    primary: "#B33A3A", // lighter red for dark mode
                    secondary: "#8C2D2D", // medium red
                    accent: "#D14D4D", // bright accent red
                    accentDark: "#8C2D2D", // dark accent
                    accentLight: "#E8A5A5", // light accent
                    accentXlight: "#3A1E1E", // dark surface with red tint
                    accentXXlight: "#2A1515", // darker surface with red tint
                    background: "#121212", // dark background
                    surface: "#1E1E1E", // dark surface
                    muted: "#252525", // dark muted
                    text: "#F5F5F5", // light text
                    'text-light': "#B0B0B0", // muted text
                    border: "#3A3A3A", // dark border
                },
                // Default colors (for backward compatibility)
                devantary: {
                    primary: "#780000",
                    secondary: "#4D0000",
                    accent: "#A30000",
                    accentDark: "#5C0000",
                    accentLight: "#B33A3A",
                    accentXlight: "#E8C8C8",
                    accentXXlight: "#F5E6E6",
                    muted: "#1A1A1A",
                    text: "#333333",
                    'text-light': "#666666",
                },
                // Semantic color tokens
                'devantary-primary': 'var(--color-primary)',
                'devantary-accent': 'var(--color-accent)',
                'devantary-muted': 'var(--color-muted)',
                'devantary-text': 'var(--color-text)',
                'devantary-text-light': 'var(--color-text-light)',
                'devantary-background': 'var(--color-background)',
                'devantary-surface': 'var(--color-surface)',
                'devantary-border': 'var(--color-border)',
            },
            // CSS variables for theming
            backgroundColor: {
                primary: 'var(--color-background)',
                surface: 'var(--color-surface)',
                muted: 'var(--color-muted)',
            },
            textColor: {
                primary: 'var(--color-text)',
                secondary: 'var(--color-text-light)',
                accent: 'var(--color-accent)',
            },
            borderColor: {
                DEFAULT: 'var(--color-border)',
            },
            // Add CSS variables for light/dark mode
            extend: {
                colors: {
                    '--color-primary': 'rgb(var(--color-primary) / <alpha-value>)',
                    '--color-accent': 'rgb(var(--color-accent) / <alpha-value>)',
                    '--color-muted': 'rgb(var(--color-muted) / <alpha-value>)',
                    '--color-text': 'rgb(var(--color-text) / <alpha-value>)',
                    '--color-text-light': 'rgb(var(--color-text-light) / <alpha-value>)',
                    '--color-background': 'rgb(var(--color-background) / <alpha-value>)',
                    '--color-surface': 'rgb(var(--color-surface) / <alpha-value>)',
                    '--color-border': 'rgb(var(--color-border) / <alpha-value>)',
                },
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
