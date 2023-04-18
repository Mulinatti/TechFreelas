/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/**/*.{html,js}"],
  theme: {
    fontFamily: {
      "inter": "Inter, sans-serif"
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
        "body-cols": "1fr 4fr",
      },
      gridTemplateRows: {
        "body-rows": "auto calc(100vh - 73px) auto",
      },
      boxShadow: {
        "md": "1px 1px 15px #00000085",
      },
      animation: {
        navbar: "navbar 1s ease-in-out backwards"
      },
    },
  },
  plugins: [],
}

