module.exports = {
  purge: [
    './src/**/*.html',
    './src/**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    minHeight: {
      '40': '10rem',
      'screen-1/4': '25vh',
      'screen-1/2': '50vh',
      'screen-3/4': '75vh',
    },
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
        '#4B93F526': '#4B93F526',
        '#FFA252': '#FFA252',
        '#91521D': '#91521D',
        '#EF9345': '#EF9345',
        '#24B77E': '#24B77E',
        '#157E55': '#157E55',
        '#3885ED': '#3885ED',
        '#235BA7': '#235BA7',
        '#FFED89': '#FFED89',
        '#D94BB3': '#D94BB3',
        '#5558FF': '#5558FF',
        '#EDEDED': '#EDEDED',
        '#174D96': '#174D96',
        '#FF8383': '#FF8383',
        '#2EB7C9': '#2EB7C9',
        '#3099FF': '#3099FF',
        '#F2F7FF': '#F2F7FF'
      },
      fontFamily: {
        sans: ['Nunito']
      }
    },
    gradientColorStops: theme => ({
      ...theme('colors'),
      '#C3FFE8': '#C3FFE8',
      '#F5FFF8': '#F5FFF8',
    })
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
