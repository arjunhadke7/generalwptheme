/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['*/*.php', '*.php'],
  theme: {
    extend: {
      'h1': 'font-size:26px;',
      'h1': 'font-size:24px;',
      screens: {
        // 'tabport': {'min': '768px', 'max': '991px'},
        // 'lg': {'min': '992px'},
        // 'md': {'min': '768px'},
        // ...defaultTheme.screens,
      }
    },
    container: {
      padding: '0.8rem',
      center: true,
    },
  },
  plugins: [],
}
