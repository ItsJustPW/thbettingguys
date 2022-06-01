module.exports = {
  content: [
    './resources/**/*.antlers.html',
    './resources/**/*.blade.php',
    './resources/**/*.vue',
    './content/**/*.md'
  ],
  theme: {
    extend: {
        colors: {
            dark: '#1E1D22',
        },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
