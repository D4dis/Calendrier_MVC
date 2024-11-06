var map = L.map('map').setView([43.625, 3.862], 11);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 19,
  attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

var marker1 = L.marker([43.651, 3.864]).addTo(map);
marker1.bindPopup("<b>Objectif 3W</b><br>Monferriez-sur-lez 34980");

var marker2 = L.marker([43.601, 3.857]).addTo(map);
marker2.bindPopup("<b>Gendarmerie Nationale</b><br>Montpellier 34070");
