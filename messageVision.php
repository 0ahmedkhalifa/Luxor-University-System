<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxor University</title>
     <!-- bootstrap -->
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <!-- bootstrap -->
     <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
     <link rel="stylesheet" href="css/messageVision.css">
     <link rel="stylesheet" href="css/HeaderFooter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
</head>
<body>
    <!-- start header -->
    <?php include "HeaderFooter/Header.php"; ?>

    <style>
        .header-minu .main-minue-links .nav-item .historry{
            color: black;
        }
    </style>
    
    <!-- end header -->
    
    <!-- start address-bar -->
    <div class="address-bar">
        <div class="overlay"></div>
        <h1>عن الجامعة</h1>
    </div>
    <!-- end address-bar -->

    <!-- start content -->
    <div class="content">
        <div class="container">
            <h3>الرؤية والرسالة</h3>
        </div>
        <div class="row justify-content-around box" >
            <div class="message col-md-6">
                <div><i class="fas fa-book-reader"></i>رسالة الجامعة</div>
                <p>تسعي جامعة الأقصر لخلق بيئة تعليمية
                    محفزة وبحوث مميزة لتخريج كوادر قادرة على المنافسة محلياً ودولياً لتحقيق رياده 
                   علمية طبقاً لمعايير الجودة بما يخدم المجتمع ويحقق التنمية المستدامة إلي جانب سعيها 
                   لتوفير بيئة تكنولوجية داعمة للتعلم المستمر والبحث العلمي والابتكار وريادة الأعمال
               </p>
            </div>
            <div class="vision col-md-5">
                <div><i class="far fa-eye"></i><span>رؤية الجامعة</span></div>
                <p>الريادة والابتكار في التعليم والبحث 
                    العلمي على المستويين المحلي والدولي بما يحقق التنمية المجتمعية المستدامة
                </p>
            </div>
        </div>
    </div>
    <!-- start content -->


    <!-- start footer -->
    <?php include "HeaderFooter/Footer.php"; ?>
    <!-- end footer -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>