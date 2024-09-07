/**
 * @type {import('tailwindcss/tailwind-config').TailwindConfig }
 */

module.exports = {
  future: {
    hoverOnlyWhenSupported: true,
  },
  content: ['./**/*.{php,html}', './src/**/*.{js,ts}'],
  theme: {
    screens: {
      sm: '500px',
      md: '1080px',
    },
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
        lg: '4rem',
        xl: '5rem',
        '2xl': '6rem',
      },
    },
    extend: {
      borderRadius: {
        DEFAULT: '3px',
      },

      colors: {
        primary: '#0071B9',
        secondary: '#0F4B91',
        tertiary: '#41BA00',
        cuaternary: '#41BA00D9',
        gray: '#F8F8F8',
        darkgray: '#0000004D',
      },
    },
  },
  plugins: [require('@tailwindcss/typography')],
};
