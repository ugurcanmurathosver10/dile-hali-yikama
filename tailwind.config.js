/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        // Logondaki renge en yakın tonları buraya tanımlıyoruz
        brand: {
          dark: '#3b2333', // Logonun koyu rengi
          light: '#5a374e',
          accent: '#ffffff',
        }
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'], // Kurumsal ve şık bir font
      }
    },
  },
  plugins: [],
}
