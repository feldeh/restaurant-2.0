










function initMapBro() {
    const brooklyn = { lat: 40.7183187, lng: -73.9635749 };
    const mapBro = new google.maps.Map(document.getElementById("mapBro"), {
        zoom: 17,
        center: brooklyn,
        mapId: "eee49869aea10cac",
        disableDefaultUI: true,
    });
    const markerBro = new google.maps.Marker({
        position: brooklyn,
        map: mapBro,
    });
}


function initMapBru() {
    const brussels = { lat: 50.8454571, lng: 4.3552396 };
    const mapBru = new google.maps.Map(document.getElementById("mapBru"), {
        zoom: 17,
        center: brussels,
        mapId: "eee49869aea10cac",
        disableDefaultUI: true,
    });
    const markerBru = new google.maps.Marker({
        position: brussels,
        map: mapBru,
    });
}

function initMapBer() {
    const berlin = { lat: 52.4996337, lng: 13.4184271 };
    const mapBer = new google.maps.Map(document.getElementById("mapBer"), {
        zoom: 17,
        center: berlin,
        mapId: "eee49869aea10cac",
        disableDefaultUI: true,
    });
    const markerBer = new google.maps.Marker({
        position: berlin,
        map: mapBer,
    });
}

function loadmaps() {
    initMapBru();
    initMapBro();
    initMapBer();
}

window.loadmaps();











