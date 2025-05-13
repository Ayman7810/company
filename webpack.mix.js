const mix = require('laravel-mix');

mix.styles([
    'public/assets-front/vendors/owl.carousel/owl.carousel.css',
    'public/assets-front/vendors/owl.carousel/owl.theme.default.css'
], 'public/css/vendor.css') // دمجها في ملف واحد

.js('resources/js/searchPagination.js', 'public/js/')
.version(); 