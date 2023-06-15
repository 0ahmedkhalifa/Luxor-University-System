// start landin
// let myImage = document.querySelector(".landingImage");
let Faculty = document.title;
let images1 = ["","",""];
if(Faculty === "كلية الحاسبات والمعلومات"){
    let Image1 = document.querySelector("#landingImage1");
    images1 = ["images/TechnologyFaculty1.jpg","images/TechnologyFaculty2.png","images/TechnologyFaculty3.png"];
    setInterval(frame, 3000);
    function frame(){
        let rand = Math.floor(Math.random() * images1.length);
        Image1.src = images1[rand];

    }}
else if (Faculty === "كليةالالسن"){
    let Image2 = document.querySelector("#landingImage2");
    let images2 = ["images/AlsunFaculty1.jpg","images/AlsunFaculty2.jpg","images/AlsunFaculty3.jpg"];
    setInterval(frame, 3000);
    function frame(){
        let rand = Math.floor(Math.random() * images2.length);
        Image2.src = images2[rand];
    }}
else if (myImage.src === "images/ArcheologyFaculty1.jpg"){
    images = ["images/ArcheologyFaculty1.jpg","images/ArcheologyFaculty2.jpg","images/ArcheologyFaculty3.jpg"];
    setInterval(frame, 3000);
    function frame(){
        let rand = Math.floor(Math.random() * images.length);
        myImage.src = images[rand];
    }}

// end landing