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
        "marfa-semibold": ["MarfaSemibold", ...defaultTheme.fontFamily.sans],
        "marfa-semibold-ita": [
          "MarfaSemiboldItalic",
          ...defaultTheme.fontFamily.sans,
        ],
      },
    },
  },
  plugins: [],
};
