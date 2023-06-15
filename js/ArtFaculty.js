let images = ["images/ArtFaculty1.png","images/ArtFaculty2.png","images/ArtFaculty3.jpg"];
let myImage = document.querySelector(".landingImage");
setInterval(frame, 5000);
function frame(){
    let rand = Math.floor(Math.random() * images.length);
    myImage.src = images[rand];
}