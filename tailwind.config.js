const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
  mode: "jit",
  content: ["./site/**/*.php"],
  theme: {
    extend: {
      fontFamily: {
        "marfa-light": ["MarfaLight", ...defaultTheme.fontFamily.sans],
        "marfa-light-ita": [
          "MarfaLightItalic",
          ...defaultTheme.fontFamily.sans,
        ],
        "marfa-bold": ["MarfaBold", ...defaultTheme.fontFamily.sans],
        "marfa-bold-ita": ["MarfaBoldItalic", ...defaultTheme.fontFamily.sans],
      },
      colors: {
        "tp-green": "#23e628",
        "tp-orange": "#fd5f0c",
      },
    },
  },
  plugins: [],
};
