/**
 * Created by inventstudio on 25/05/2018.
 */
require('../css/app.scss');
// loads the jquery package from node_modules
var $ = require('jquery');
require('bootstrap-sass');
// import the function from greet.js (the .js extension is optional)
// ./ (or ../) means to look for a local file
var greet = require('./greet');
require('./jpreLoader.js');
require('./bootstrap.min.js');
require('./jquery.isotope.min.js');
require('./jquery.prettyPhoto.js');
require('./easing.js');
require('./jquery.ui.totop.js');
require('./jquery.flexslider-min.js');
require('./jquery.scrollto.js');
require('./owl.carousel.js');
require('./jquery.countTo.js');
require('./classie.js');
require('./designesia.js');
require('./validation.js');

require('../rs-plugin/js/jquery.themepunch.plugins.min.js');
require('../rs-plugin/js/jquery.themepunch.revolution.min.js');

$(document).ready(function() {
    $('body').prepend('<h1>'+greet('john')+'</h1>');
    $('[data-toggle="popover"]').popover();
});

