/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/**/*.{html,js}"],
  theme: {
    fontFamily: {
      "urbanist": "Urbanist, sans-serif"
    },
    extend: {
      colors: {
        "oxford-blue": "#0D1530",
        "risd": "#004FFF",
        "cream": "#FAFFD8",
        "slate-purple": "#6957B2",
      },
      gridTemplateColumns: {
        "body-cols": "1fr",
      },
      gridTemplateRows: {
        "body-rows": "auto 100vh auto",
      }
    },
  },
  plugins: [],
}

