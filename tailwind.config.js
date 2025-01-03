import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: null,
    content: [
        // "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        // "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./vendor/livewire/flux-pro/stubs/**/*.blade.php",
        "./vendor/livewire/flux/stubs/**/*.blade.php",
    ],
    theme: {
        extend: {},
        fontFamily: {
            sans: ["Inter", ...defaultTheme.fontFamily.sans],
        },
    },
    plugins: [],
};
