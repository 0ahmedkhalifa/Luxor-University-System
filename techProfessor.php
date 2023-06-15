<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Professor</title>
    <link rel="stylesheet" type="text/css" href="css/demo.css">
	 
	 <style>
      body {
    margin: 0;
    padding: 0;
    color: #FFFFFF;
    width: 100%;
    min-height: 100%;
    overflow-x: hidden;
    -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
    
  }
 
  body section.slideshow {
    position: relative;
    display: block;
    width: 100%;
    height: 100%;
    height: 100vh;
    margin: 0 auto;
    visibility: hidden;
    overflow: hidden;
  }
  body section.slideshow ul.navigation {
    position: absolute;
    display: block;
    width: 640px;
    height: 640px;
    padding: 0;
    margin: 0;
    left: -230px;
    top: 50%;
    margin-top: -320px;
    z-index: 10;
  }
  
  body section.slideshow ul.navigation li.navigation-item {
    position: absolute;
    display: inline-block;
    overflow: hidden;
    width: 120px;
    height: 120px;
    padding: 10px;
    text-align: center;
    cursor: pointer;
    border-radius: 50%;
    transition: border 0.6s ease-in-out;
  }
  
  body section.slideshow ul.navigation li.navigation-item .rotate-holder {
    position: fixed;
    display: block;
    width: 0;
    height: 0;
    left: -9999px;
    top: -9999px;
  }
  body section.slideshow ul.navigation li.navigation-item .background-holder {
    position: absolute;
    display: block;
    width: 100%;
    height: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    border-radius: 50%;
    background-repeat: no-repeat;
    background-position: center center;    
    background-size: cover;
    opacity: 1;
    visibility: visible;
    transition: opacity 0.6s ease-in-out, visibility 0.6s ease-in-out;
  }
  body section.slideshow ul.navigation li.navigation-item:hover .background-holder {
    opacity: 0.75;
  }
  body section.slideshow ul.navigation li.navigation-item.active .background-holder {
    opacity: 0;
    visibility: hidden;
  }
  body section.slideshow .detail {
    position: absolute;
    display: block;
    width: 100%;
    height: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 8;
  }
  body section.slideshow .detail .detail-item {
    position: absolute;
    display: block;
    width: 100%;
    height: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
  }
  body section.slideshow .detail .detail-item .headline {
    position: absolute;
    display: block;
    width: 100%;
    max-width: calc(100% - 480px);
    height: 126px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    overflow: visible;
    white-space: nowrap;
    box-sizing: border-box;
    z-index: 2;
  }

  body section.slideshow .detail .detail-item .aboutText {
    position: absolute;
    display: block;
    width: 25%;
    height: 600px;
    /* color:black; */
    font-size: 20px;
    top: 25%;
    right: 5%;
    overflow: visible;
    box-sizing: border-box;
    z-index: 2;
  }
  body section.slideshow .detail .detail-item .headline span{
    font-size: 50px;
    font-weight: bold;
  }
 
  body section.slideshow .detail .detail-item .headline .letter {
    font-family: 'Oswald', sans-serif;
    position: relative;
    display: inline-block;
    opacity: 0;
    visibility: hidden;
    color: #FFFFFF;
    font-size: 65px;
    line-height: 110px;
    font-weight: 900;
    font-kerning: none;
    white-space: nowrap;
    box-sizing: border-box;
      /* text-transform: uppercase; */
  }
  
  body section.slideshow .detail .detail-item .background {
    position: absolute;
    display: block;
    width: 100%;
    width: calc(100% + 100px);
    height: 100%;
    height: calc(100% + 100px);
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    overflow: visible;
    background-repeat: no-repeat;
    background-position: center center;     
    background-size: cover;
    z-index: 1;
  }
  body section.slideshow .detail .detail-item .background::before {
    content: ""; 
    background: linear-gradient(to right, black 0%, rgba(0, 0, 0, 0) 90%);   
    position: absolute;
    display: block;
    width: 100%;
    height: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 2;
      
  }
  body section.slideshow .detail .detail-item.active {
    opacity: 1;
    visibility: visible;
  }
      
      </style>
	 
	 
  </head>
  <body>
    
    <section class="slideshow">
 
      <ul class="navigation">
 
        <li class="navigation-item active">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(images/H.jpg);"></span>
        </li>
        <!-- slideshow:navigation:item END -->

        <!-- slideshow:navigation:item START -->
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(images/A.jpg);"></span>
        </li>
       
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(images/HU.jpg);"></span>
        </li>
       
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(images/B.jpg);"></span>
        </li>
      
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(images/ATTA.jpg);"></span>
        </li>
      
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(assets/img/img-6.jpg);"></span>
        </li>
        
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(assets/img/hong.jpg);"></span>
        </li>
         
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(assets/img/img-8.jpeg);"></span>
        </li>
         
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(assets/img/img-9.jpg);"></span>
        </li>
       

      </ul>
      
      <div class="detail">
       
        <div class="detail-item active">
          <div class="headline">Dr.HAMAM</div>
          <div class="aboutText">Dr. Hamam Mohamed Abdul-Aal works as an assistant professor at the department of information technology,
           Luxor University, Egypt.His research areas are data mining, machine learning technologies, supervised learning algorithms, natural language processing, artificial intelligence.
            Member of the Arid Science Platform for Arabic-speaking Scientists, Experts and Researchers.
            Author/co-author of numerous published scientific research where more than 20 research papers with impact factors were published in the SCOPS and Thompson database  </div>
          <div class="background" style="background-image: url(images/profbackground.png); height: 100vh;"></div>
          <div class="background" style="background-image: url(images/profbackground.png); height: 100vh; background-size: cover; background-position: center;"></div>
        </div>
        <!-- slideshow:details END -->
        
        <!-- slideshow:details START -->
        <div class="detail-item">
          <div class="headline">Dr.AMANY</div>
          <div class="aboutText">
          Dr. Amany Ashraf works as an assistant Assistant Professor in information systems department. 
          Scholar visitor in North calorina university USA, Fulbright alumni. Manager for digital
           transformation and training center. Manager for technology transfer office in university.
           PhD in system architecture mansoura university. Authorized trainer for cloud computing in
            Huawei Academy in Luxor.Authorized trainer tor digital transformation.
          </div>
          <div class="background" style="background-image: url(images/profbackground.png);"></div>
        </div>
        <!-- slideshow:details END -->
        
        <!-- slideshow:details START -->
        <div class="detail-item">
          <div class="headline">Dr.HOSNY</div>
          <div class="aboutText">
          Dr. Hosny A. Abbas works as an assistant professor at the department of information technology,
           Luxor University, Egypt. He graduated in computer and control eng. from Assiut University in1998,
            Egypt. In 2011, he received his master degree from Aswan faculty of engineering, South Valley University.
             In 2017, he received his PhD degree in computers and systems engineering, Assiut University.
              His current research interests are Industrial Informatics, Cyber-Physical Systems, and Digital
               Transformation, and complexity.
          </div>
          <div class="background" style="background-image: url(images/profbackground.png);"></div>
        </div>
        <!-- slideshow:details END -->
        
        <!-- slideshow:details START -->
        <div class="detail-item">
          <div class="headline">Dr.BASSEM</div>
          <div class="aboutText">
          Dr. Bassem Abd-El-Atty received B.S. degree in physics and computer science, M.Sc. degree in computer
           science, and Ph.D degree in computer science all from Menoufia University, Egypt, in 2010, 2017,
            and 2020 respectively. He is currently an Assistant Professor in the Faculty of Computers and 
            Information, Luxor University, Egypt. He is author and co-author of more than 40 papers
          </div>
          <div class="background" style="background-image: url(images/profbackground.png);"></div>
        </div>
        <!-- slideshow:details END -->
        
        <!-- slideshow:details START -->
        <div class="detail-item">
          <div class="headline">MODERNO</div>
          <div class="background" style="background-image: url(assets/img/img-5.jpg);"></div>
        </div>
        <!-- slideshow:details END -->
        
        <!-- slideshow:details START -->
        <div class="detail-item">
          <div class="headline">POTÊNCIA</div>
          <div class="background" style="background-image: url(assets/img/img-6.jpg);"></div> 
        </div>
        <!-- slideshow:details END -->
        
        <!-- slideshow:details START -->
        <div class="detail-item">
          <div class="headline">SEGURANÇA</div>
          <div class="background" style="background-image: url(assets/img/hong.jpg);"></div>
        </div>
        <!-- slideshow:details END -->
        
        <!-- slideshow:details START -->
        <div class="detail-item">
          <div class="headline">SILENCIOSO</div>
          <div class="background" style="background-image: url(assets/img/img-8.jpeg);"></div>
        </div>
        <!-- slideshow:details END -->
        
        <!-- slideshow:details START -->
        <div class="detail-item">
          <div class="headline">PODER</div>
          <div class="background" style="background-image: url(assets/img/img-9.jpg);"></div>
        </div>
        <!-- slideshow:details END -->
        
      </div>
      <!-- slideshow:details END -->

    </section>
    <!-- slideshow END -->

    <script src="js\min\1.js"></script>
    <script src="js\min\2.js"></script>
    <script src="js\min\3.js"></script>
    <script src="js\min\4.js"></script>
    <script src="js\min\5.js"></script>
    <script src="js/demo.js"></script>
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-1VDDWMRSTH"></script> -->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-1VDDWMRSTH');
</script>
  </body>
</html>
