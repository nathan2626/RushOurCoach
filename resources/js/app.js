require('./bootstrap');

//Scroll to top
// function scrollToTop() {
//     window.scroll({top: 0, left: 0, behavior: 'smooth'});
// }

//Home Page scrolling coachs
let scrollAppear = () => {
    let introImages = document.getElementsByClassName('introImage');

    for (const introImage of introImages){
        let introPosition = introImage.getBoundingClientRect().top;
        let screenPosition = window.innerHeight / 1.3;

        if(introPosition < screenPosition){
            introImage.style.opacity = "1";
            introImage.style.transform = "translateY(0)";
        }
    }
};
window.addEventListener('scroll', scrollAppear);

// Initialize and add the map
function initMap() {
    // The location of Uluru
    const uluru = { lat: -25.344, lng: 131.036 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 4,
        center: uluru,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
        position: uluru,
        map: map,
    });
}
