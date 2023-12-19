/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            screens: {
                sm: { max: "767px" },
                // => @media (max-width: 767px) { ... }

                md: { min: "768px", max: "1023px" },
                // => @media (min-width: 768px and max-width: 1023px) { ... }

                lg: { min: "1024px", max: "1945px" },
                // => @media (min-width: 1024px) { ... }
            },
            colors: {
                primary: {
                    90: "#000014",
                    70: "#010147",
                    50: "#020179",
                    30: "#0301AC",
                    10: "#0402DF",
                },
                dark: {
                    90: "#000",
                    70: "#2B2B2B",
                    50: "#454545",
                    30: "#5E5E5E",
                    10: "#787878",
                },
                light: {
                    90: "#999999",
                    70: "#B3B3B3",
                    50: "#CCCCCC",
                    30: "#E6E6E6",
                    10: "#FFFFFF",
                },
            },
            backgroundImage: {
                "hero-login":
                    "url('/public/assets/img_index/asset/loginandregister/bg.png')",
                "hero-landing":
                    "url('/public/assets/img_index/asset/landingPage/bgHiro.png')",
                "hero-landing-md":
                    "url('/public/assets/img_index/asset/landingPage/bgHiroMd.png')",
                "hero-landing-sm":
                    "url('/public/assets/img_index/asset/landingPage/bgHiroSm.png')",
            },
            fontFamily: {
                inter: ["Inter", "sans-serif"],
            },
        },
    },
    plugins: [require("daisyui")],
};
