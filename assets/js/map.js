// ---- Interactive Map script ---- //

            // ---- Objet/Tableau frenchCity ---- //

let frenchCity = {
    "Paris": {"lat": 48.852969, "lon": 2.349903} , 
    "Brest": {"lat": 48.383 , "lon": -4.500 },
    "Quimper": {"lat": 48.000, "lon": -4.100},
    "Bayonne": {"lat": 43.500, "lon": -1.467},
    "Limoges": {"lat": 45.836, "lon": 1.264},
    "Marche ou cèpes": {"lat": 45.823, "lon": 1.266}
}

            // ---- Initialisation de la carte ---- // 
let map = L.map('map_container').setView([45.823, 1.266], 13)

            // ---- Chargement des tuiles ---- //
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    minZoom: 11,
    maxZoom: 16,
    attribution: '© OpenStreetMap'
}).addTo(map)

            // ---- Ajout d'un marker déplacable ---- //
            // ---- on parcour les diffenrentes villes de l'objet frenchCity ---- //
for (city in frenchCity) {
            
    let marker = L.marker([frenchCity[city].lat, frenchCity[city].lon], { draggable: true}).addTo(map)
      // marker Popup //
    marker.bindPopup("Vous êtes à " + city + "!")
}