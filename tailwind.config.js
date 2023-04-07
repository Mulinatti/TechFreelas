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
        "box-blue": "#121C40",
        "rich": "#090E20",
        "risd": "#3059B0",
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
