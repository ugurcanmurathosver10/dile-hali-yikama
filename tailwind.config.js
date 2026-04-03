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
        // Kralın Lüks Fontu: Outfit (Inter yerine bunu atadık)
        sans: ['Outfit', 'sans-serif'],
      }
    },
  },
  plugins: [],
}
