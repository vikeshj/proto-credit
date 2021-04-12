module.exports = {
    purge: [
        "./resources/**/*.{vue,js,ts,jsx,tsx,blade.php,scss,css}"
    ],
    mode: 'jit',
    darkMode: "class", // <= 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                nunito: ["Nunito", "Arial", "sans-serif"]
            },
            textColor: ["focus", "active"],
            boxShadow: {
                "3xl": "0 35px 60px -15px rgba(0, 0, 0, 0.3)"
            }
        }
    },
    variants: {},
    plugins: []
};
