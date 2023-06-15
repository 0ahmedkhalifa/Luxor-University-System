let images = ["images/ArcheologyFaculty1.jpg","images/ArcheologyFaculty2.jpg","images/ArcheologyFaculty3.jpg"];
let myImage = document.querySelector(".landingImage");
setInterval(frame, 5000);
function frame(){
    let rand = Math.floor(Math.random() * images.length);
    myImage.src = images[rand];
}