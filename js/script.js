// start landin

let images = ["images/landing-1.jpeg","images/landing-2.jpeg","images/landing-3.jpeg","images/landing-4.jpeg"];
let myImage = document.querySelector(".landingImage");
setInterval(frame, 5000);
function frame(){
    let rand = Math.floor(Math.random() * images.length);
    myImage.src = images[rand];
}

// end landing

// f

// let box = document.querySelector(".swiper");
var swiper = new Swiper(".content", {
    slidesPerView: 3,
    spaceBetween: 20,
    freeMode: true,
    // margin: 10,
    autoplayTimeout: 3000,
    autoplay:true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    // responsive:{
    //   0:{
    //     box:1
    //   },
    //   600:{
    //     box:3
    //   },
    //   1000:{
    //     box:5
    //   },
    // },
  });
// f
