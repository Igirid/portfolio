module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      blur: {
        xs: '2px',
      },
      backgroundImage: theme => ({
        'project': "url('/img/project.jpg')",
      }),
    },
  },
  variants: {
    extend: {
      borderColor: ['active'],
      borderWidth: ['hover'],
      border: ['active'],
      margin: ['hover'],
      zIndex: ['hover'],
      blur: ['hover', 'focus'],
      inset: ['hover'],
    },
  },
  plugins: [],
}
