let images = ["images/AlsunFaculty1.jpg","images/AlsunFaculty2.jpg","images/AlsunFaculty3.jpg"];
let myImage = document.querySelector(".landingImage");
setInterval(frame, 5000);
function frame(){
    let rand = Math.floor(Math.random() * images.length);
    myImage.src = images[rand];
}