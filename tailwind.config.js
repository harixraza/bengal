/** @type {import('tailwindcss').Config} */
// npx tailwindcss -i ./assets/main.css -o ./assets/output.css --watch

module.exports = {
  content: ["./*.php", "./**/*.php", './templates/**/*.php', './woocommerce/**/*.php', './assets/js/*.js'],
  theme: {
    extend: {
      gridTemplateColumns: {
        '[1x2]': '1fr 2fr',
      },
      container: {
        center: true,
        screens: {
          sm: '640px',
          md: '768px',
          lg: '1024px',
          xl: '1232px',
          '2xl': '1368px'
        },
        padding: {
          DEFAULT: "1rem",
          sm: "1rem",
          lg: "1rem",
          xl: "1rem",
          "2xl": "1rem",
        },
      },
      colors: {
        'primary': '#630027',
        'purple-dark': '#3B3467',
        blue: '#630027',
        black: '#12181E',
        gray: '#9096A4',
        'gray-light': '#F4F5F8',
        'gray-extra-light': '#F8FAFF',
        'gray-50': '#F9F9F9',
        'gray-70': '#E8EAF1',
        'gray-100': '#D1D5DB',
        'gray-200': '#E6E6E6',
        'gray-700': '#6B7280',
      },
      spacing: {
        7.5: '30px',
        n: '30px',
      },
      fontSize: {
        '22': ['1.375rem', {
          lineHeight: '1.625rem',
          letterSpacing: '-0.01em',
        }],
        '28': ['1.75rem', {
          lineHeight: '2.5rem',
          letterSpacing: '-0.01em',
        }],
        '40': ['2.5rem', {
          lineHeight: '3rem',
          letterSpacing: '-0.01em',
          fontWeight: '700',
        }],
      },
      aspectRatio: {
        '3/4': '278/360',
      }
    },
  },
  plugins: [],
}
