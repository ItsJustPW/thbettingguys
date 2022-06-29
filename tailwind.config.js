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
            tbgred: '#FF0000',
            tbgreddark: '#860000',
        },
        fontSize: {
            'xxs' : '0.60rem',
        },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
