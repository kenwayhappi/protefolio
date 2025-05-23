/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: 'class', // Enable class-based dark mode
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
        display: ['Playfair Display', 'serif'],
      },
      colors: {
        primary: {
          DEFAULT: '#1E40AF', // Deep blue
          dark: '#3B82F6',    // Lighter blue for dark mode
        },
        accent: {
          DEFAULT: '#F59E0B', // Vibrant orange
          dark: '#FBBF24',   // Brighter orange for dark mode
        },
        background: {
          light: '#F9FAFB',  // Light mode background
          dark: '#111827',   // Dark mode background
        },
        text: {
          light: '#1F2937',  // Dark text for light mode
          dark: '#D1D5DB',   // Light text for dark mode
        },
      },
    },
  },
  plugins: [],
};
