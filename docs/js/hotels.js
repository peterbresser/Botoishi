


var tokaidopolyline = new L.Polyline(pointList, {
color: 'blue',
weight: 4,
opacity: 0.9,
smoothFactor: 1

});

tokaidopolyline.on('mouseout', function(e) {

var layer = e.target;
mouseout: highlightFeature('out');
layer.setStyle({
color: 'blue',
opacity: 0.9,
weight: 4

});
});

tokaidopolyline.on('click', function(e) {
var layer = e.target;
window.open('shinkansenmap.php?route=tokaido');

layer.setStyle({
color: 'black',
opacity: 0.9,
weight: 4

});
});



tokaidopolyline.on('mouseover', function(e) {
var layer = e.target;
var myname='line:Tokaido Shinkansen'
mouseover:  highlightFeature(myname);
layer.setStyle({
color: 'red',
opacity: 1,
weight: 5


});
});
tokaidopolyline.addTo(map);















