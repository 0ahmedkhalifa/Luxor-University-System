<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxor University</title>
    <!-- owl-carousel library -->
    <!-- <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
     <!-- owl-carousel library -->

     <!-- bootstrap -->
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <!-- bootstrap -->

     <!-- swaper library -->
     <link rel="stylesheet" href="css/swiper-bundle.min.css">
     <!-- swaper library -->
     <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/HeaderFooter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
</head>
<body>
    <!-- start header -->
    <?php include "HeaderFooter/Header.php"; ?>

    <style>
        .header-minu .main-minue-links .nav-item .maino{
            color: black;
        }
    </style>

    <!-- end header -->
    

    <!-- start landing -->
    <div class="main-landing">
        <img class="landingImage" src="images/landing-1.jpeg" alt="image">
    </div>
    <!-- end landing -->
    
    <!-- start about -->

    <div class="about">
        <div class="container">
            <div class="image">
                <img src="images/welcome.png" alt="welcome">
            </div>
            <div class="text">
                <h1>مرحبا في جامعة الأقصر</h1>
                <p>
                    إن جامعة الأقصر هي جامعة حكومية تقوم بتسخير إمكاناتها وتوجيهها لتحقيق رؤيتها من خلال خلق بيئة تعليمية محفزة وبحوث مميزة لتخريج كوادر قادرة على المنافسة محلياً ودولياً لتحقيق رياده علمية طبقاً لمعايير الجودة بما يخدم المجتمع ويحقق التنمية المستدامة إلي جانب سعيها لتوفير بيئة تكنولوجية داعمة للتعلم المستمر والبحث العلمي والابتكار وريادة الأعمال
                </p>
                <a href="exploreUniversity.php"><span>استكشف جامعة الأقصر</span></a>
            </div>
        </div>
    </div>

    <!-- end about -->

    <!-- start faculties -->
            
     <div class="faculties swiper">
        <h1>كليات جامعة الأقصر</h1>
        <div class="content">
            <div class="swiper-wrapper">
                <div class="facultyBox swiper-slide">
                    <a href="TechnologyFaculty.php" target="_blank">
                        <img src="images/facultyImage_tec.jpg" alt="facultyImage" class="background">
                        <img src="images/facultyLogo_tec.png" alt="logo" class="logo">
                        <p class="text">
                        كلية الحاسبات والمعلومات
                    </p>
                    </a>
                </div>
                <div class="facultyBox swiper-slide">
                    <a href="AlsunFaculty.php" target="_blank">
                        <img src="images/facultyImage_als.jpeg" alt="facultyImage" class="background">
                        <img src="images/facultyLogo_als.png" alt="logo" class="logo">
                        <p class="text">
                            كلية الألسن
                        </p>
                    </a>
                </div>
                <div class="facultyBox swiper-slide">
                    <a href="ArcheologyFaculty.php" target="_blank">
                        <img src="images/facultyImage_arc.jpg" alt="facultyImage" class="background">
                        <img src="images/facultyLogo_arc.png" alt="logo" class="logo">
                        <p class="text">
                            كلية الاثار
                        </p>
                    </a>
                </div>
                <div class="facultyBox swiper-slide">
                    <a href="ArtFaculty.php" target="_blank">
                        <img src="images/facultyImage_art.jpg" alt="facultyImage" class="background">
                        <img src="images/facultyLogo_art.png" alt="logo" class="logo">
                        <p class="text">
                            كلية الفنون الجميلة
                        </p>
                    </a>
                </div>
                <div class="facultyBox swiper-slide">
                    <a href="TourismFaculty.php">
                        <img src="images/facultyImage_tour.jpg" alt="facultyImage" class="background">
                        <img src="images/facultyLogo_tour.png" alt="logo" class="logo">
                        <p class="text">
                            كلية سياحة و فنادق
                        </p>
                    </a>
                </div>
                <div class="facultyBox swiper-slide">
                    <a href="MedecineFaculty.php">
                        <img src="images/facultyImage_med.jpg" alt="facultyImage" class="background">
                        <img src="images/facultyLogo_med.png" alt="logo" class="logo">
                        <p class="text">
                            كلية الطب
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>    
    </div>

    <!-- start faculties -->


    <!-- start news -->
    <div class="news">
        <h1>الأخبار</h1>
        <div class="container">
        <a href="news/news_10.php">
                <div class="news-box">
                    <img src="images/news1.jpg" alt="news"><div class="full-date"><span>16 April</span><span>2023</span></div></img>
                    <div class="news-text">
                        <p>رئيس جامعة الأقصر يشارك العاملين في الجامعة حفل الإفطار السنوي بالإدارة المركزية</p>
                    </div>
                </div>
            </a>
            <a href="news/news_11.php">
                <div class="news-box">
                    <img src="images/news2.jpg" alt="news"><div class="full-date"><span>16 April</span><span>2023</span></div></img>
                    <div class="news-text">
                        <p>رئيس جامعة الأقصر يزور كنائس الطوائف المسيحية للتهنئة بعيد القيامة المجيد</p>
                    </div>
                </div>
            </a>
            <a href="news/news_12.php">
                <div class="news-box">
                    <img src="images/news3.jpg" alt="news"><div class="full-date"><span>16 April</span><span>2023</span></div></img>
                    <div class="news-text">
                        <p>رئيس جامعة الأقصر يهنئ البابا تواضروس وجميع الأخوة الأقباط بعيد القيامة المجيد</p>
                    </div>
                </div>
            </a>
            <a href="news/news_7.php">
                <div class="news-box">
                    <div class="full-date"><span>05 April</span><span>2023</span></div>
                    <img src="images/news6.jpg" alt="news"></img>
                    <div class="news-text">
                        <p>رئيس جامعة الأقصر يشارك طلاب كلية الآثار حفل الإفطار الجماعي</p>
                    </div>
                </div>
            </a>
            <a href="news/news_8.php">
                <div class="news-box">
                    <img src="images/news5.jpg" alt="news"><div class="full-date"><span>07 April</span><span>2023</span></div></img>
                    <div class="news-text">
                        <p>رئيس جامعة الأقصر يشارك طلاب كلية الألسن حفل الإفطارالجماعي</p>
                    </div>
                </div>
            </a>
            <a href="news/news_9.php">
                <div class="news-box">
                    <img src="images/news4.jpg" alt="news"><div class="full-date"><span><p>08</p><p>April</p></span><span>2023</span></div></img>
                    <div class="news-text">
                        <p>وفد من الجامعة الأمريكية يزور مركز التطوير المهني بجامعة الأقصر ويلتقي رئيس الجامعة</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- start news -->

    <!-- start footer -->
    <?php include "HeaderFooter/Footer.php"; ?>
    <!-- end footer -->
   

    <!-- <script src="js/jquery.min.js"></script>
    <script src="js/owl.carousel.min.js"></script> -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>