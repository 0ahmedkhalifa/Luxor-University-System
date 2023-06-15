let images = ["images/MedecinFaculty1.jpg","images/MedecinFaculty2.jpg"];
let myImage = document.querySelector(".landingImage");
setInterval(frame, 5000);
function frame(){
    let rand = Math.floor(Math.random() * images.length);
    myImage.src = images[rand];
}