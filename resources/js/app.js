require('./bootstrap');

const WOW = require('./plugins/wow.min');

require('./plugins/lightgallery.min');

require('./plugins/vivus.min');
require('./plugins/waypoints.min');
require('./plugins/isotope.min');

window.wow = new WOW.WOW({
    live: false
});
require('./main')
