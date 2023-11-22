import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
          screens: {
            'xs': '450px'},
          colors:{
            mainColor:'#16514f',
            overlayColor:'#185c5a',
            secondaryColor:'#d9f99d',
            antracit:'#383e42',
            beige:'#efe5d9',
    
          }
        },
      },

    plugins: [forms, require("flowbite/plugin")],
};



  
  