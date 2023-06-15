let images = ["images/TourismFaculty1.png","images/TourismFaculty2.png"];
let myImage = document.querySelector(".landingImage");
setInterval(frame, 5000);
function frame(){
    let rand = Math.floor(Math.random() * images.length);
    myImage.src = images[rand];
}