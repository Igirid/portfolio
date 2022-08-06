module.exports = {
  purge: {
    enabled: true,
content: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
],
  },
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
