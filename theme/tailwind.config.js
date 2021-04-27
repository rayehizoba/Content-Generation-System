module.exports = {
  purge: [
    './src/**/*.html',
    './src/**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        '#2B2B2B': '#2B2B2B',
        '#FAFAFA': '#FAFAFA',
        '#888686': '#888686',
        '#2E4ADB': '#2E4ADB',
        '#3551E6': '#3551E6',
        '#3F5AEB': '#3F5AEB',
        '#4B65F5': '#4B65F5',
        '#4B93F5': '#4B93F5',
        '#707070': '#707070',
        '#D5D5D5': '#D5D5D5',
        '#A7CCFF': '#A7CCFF',
        '#2EC98D': '#2EC98D',
        '#2EC9C3': '#2EC9C3',
      },
      fontFamily: {
        sans: ['Nunito']
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
