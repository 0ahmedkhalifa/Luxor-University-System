let images = ["images/TechnologyFaculty1.jpg","images/TechnologyFaculty2.png","images/TechnologyFaculty3.png"];
let myImage = document.querySelector(".landingImage");
setInterval(frame, 5000);
function frame(){
    let rand = Math.floor(Math.random() * images.length);
    myImage.src = images[rand];
}