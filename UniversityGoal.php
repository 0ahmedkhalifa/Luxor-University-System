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
    <link rel="stylesheet" href="css/UniversityGoal.css">
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
        <h1>أهداف الجامعة</h1>
       <div class="row ">
            <div class="col-md-4 image">
                <img src="images/goals.jpg" alt="">
            </div>
            <div class="col-md-4 goal">
                <p><i class="fa-solid fa-bullseye"></i>إعداد طلاب متميزين في مجالات تخصصهم، قياديين ومنتجين في مجتمعاتهم.</p>
                <p><i class="fa-solid fa-bullseye"></i>تطوير قدرات البحث العلمي والابتكار في المجالات ذات الأهمية الوطنية والدولية.</p>
                <p><i class="fa-solid fa-bullseye"></i>ضمان تقديم كافة الخدمات الإدارية وفق معايير الجودة والكفاءة والشفافية.</p>
                <p><i class="fa-solid fa-bullseye"></i>توسيع نطاق الاعتماد الدولي للجامعة ولبرامجها الأكاديمية وتعزيز سمعتها دولياً.</p>
            </div>
            <div class="col-md-4 goal">
                <p><i class="fa-solid fa-bullseye"></i> ترسيخ ثقافة الابتكار وريادة الأعمال في بيئة العمل المؤسسي.</p>
                <p><i class="fa-solid fa-bullseye"></i>دعم برامج تحافظ على التراث الإنساني العالمي وبصفة خاصة لمدينة الأقصر.</p>
                <p><i class="fa-solid fa-bullseye"></i>دعم برامج تحافظ على التراث الإنساني العالمي وبصفة خاصة لمدينة الأقصر.</p>
                <p><i class="fa-solid fa-bullseye"></i>توثيق الروابط العلمية والثقافية مع الجامعات
                     والهيئات العلمية ومراكز البحوث والتطوير الإقليمية والدولية.</p>
            </div>
       </div>
    </div>
    <!-- start content -->


    <!-- start footer -->

  m <?php include "HeaderFooter/Footer.php"; ?>

    <!-- end footer -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>