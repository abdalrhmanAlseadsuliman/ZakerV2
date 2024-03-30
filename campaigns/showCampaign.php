<?php
require_once '../auth/authUser.php';

if (!isSession() && !setCookiesToSession()) {
    redirectToLogoutPage();
}


// التحقق من صلاحيات المستخدم العادي
if (isUserLoggedIn() && !isUserAdmin()) {
    redirectToLogoutPage();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> عرض الحملة </title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" /> -->
    <link href="../css/datatable.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="../js/fontawesome.js"></script>
    <style>
        span iframe{
            width: 300px ;
            height: 200px ;
        }
    </style>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="../adminDashboard.php"> ذاكر </a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <!-- <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li> -->
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="../auth/logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <?php include "sideBar.php" ?>
                </div>

                <div class="sb-sidenav-footer">
                    <!-- <div class="small">Logged in as:</div> -->
                    ذاكر
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">لوحة التحكم</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"><a href="../adminDashboard.php">لوحة التحكم</a></li>
                        <li class="breadcrumb-item active"> عرض الحملة</li>

                    </ol>


                    <!-- <div class="container"> -->
                    <div class="container mt-4">
                        <div class="row" dir="rtl">
                            <div class="col-lg-8 offset-lg-2" style="margin:0 auto">
                                <div class="card">
                                    <img id="imgArticle" src="" class="card-img-top" alt="صورة المقال">
                                    <div class="card-body">

                                        <div class="mb-3">
                                            <label for="titleArabic" class="form-label"> عنوان الحملة يجب ان يكون في لغة العربي</label>
                                            <span id="titleArabic" class="form-control"></span>
                                        </div>

                                        <div class="mb-3">
                                            <label for="subtitleCounter" class="form-label"> نص يظهر اسفل العداد </label>
                                            <span id="subtitleCounter" class="form-control"></span>
                                        </div>

                                        <div class="mb-3">
                                            <label for="mainTitle" class="form-label"> عنوان رقم 1 رئيسي </label>
                                            <span id="mainTitle" class="form-control"></span>
                                        </div>

                                        <div class="mb-3">
                                            <label for="mainParag" class="form-label"> فقرة رقم 1 رئيسية </label>
                                            <span id="mainParag" class="form-control"></span>
                                        </div>

                                        <div class="mb-3">
                                            <label for="mainImg" class="form-label"> صورة رقم 1 في الموقع </label>
                                            <img src="" id="mainImg" class="form-control" />
                                        </div>

                                        <div class="mb-3">
                                            <label for="title2" class="form-label"> عنوان رقم 2 يظهر قبل عدد أذكار المشارك في الحملة </label>
                                            <span id="title2" class="form-control"></span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="img2" class="form-label"> صورة رقم 2 في الموقع </label>
                                            <img src="" id="img2" class="form-control"/>
                                        </div>


                                        <div class="mb-3">
                                            <label for="title3" class="form-label"> عنوان رقم 3 يظهر فوق نوايا الحملة </label>
                                            <span id="title3" class="form-control"></span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nawaya" class="form-label"> نوايا الحملة </label>
                                            <span id="nawaya" class="form-control"></span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="img3" class="form-label"> صورة رقم 3 في الموقع تظهر يمين النوايا </label>
                                            <img src="" id="img3" class="form-control"/>
                                        </div>


                                        <div class="mb-3">
                                            <label for="title4" class="form-label"> عنوان رقم 4 يظهر فوق فيديوهات الشيخ للحملة </label>
                                            <span id="title4" class="form-control"></span>
                                        </div>

                                        <div class="mb-3">
                                            <label for="titleVideo1" class="form-label"> عنوان الفيديو الاول </label>
                                            <span id="titleVideo1" class="form-control"></span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="embedLink1" class="form-label"> رابط فيديو رقم 1 
                                                <span class="text-danger"> يجب ان يكون رابط مضمن وليس مباشر </span> </label>
                                            <span id="embedLink1" class="form-control"></span>

                                            
                                           
                                        </div>
                                        <div class="mb-3">
                                            <label for="linkVideo1" class="form-label"> رابط فيديو رقم 1 مباشر </label>
                                            <a href="" id="linkVideo1" class="form-control"> عرض الفيديو </a>
                                        </div>


                                        <div class="mb-3">
                                            <label for="titleVideo2" class="form-label"> عنوان الفيديو الثاني </label>
                                            <span id="titleVideo2" class="form-control"></span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="embedLink2" class="form-label"> رابط فيديو رقم 2 <span class="text-danger"> يجب ان يكون رابط مضمن وليس مباشر </span> </label>
                                            <span id="embedLink2" class="form-control"></span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="linkVideo2" class="form-label"> رابط فيديو رقم 2 مباشر </label>
                                            <a href="" id="linkVideo2" class="form-control"> عرض الفيديو </a>
                                        </div>


                                        <div class="mb-3">
                                            <label for="titleVideo3" class="form-label"> عنوان الفيديو الثالث </label>
                                            <span id="titleVideo3" class="form-control"></span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="embedLink3" class="form-label"> رابط فيديو رقم 3 <span class="text-danger"> يجب ان يكون رابط مضمن وليس مباشر </span> </label>
                                            <span id="embedLink3" class="form-control"></span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="linkVideo3" class="form-label"> رابط فيديو رقم 3 مباشر </label>
                                            <a href="" id="linkVideo3" class="form-control"> عرض الفيديو </a>
                                        </div>

                                        <div class="mb-3">
                                            <label for="endTitle" class="form-label"> عنوان اخير في الموقع </label>
                                            <span id="endTitle" class="form-control"></span>
                                        </div>

                                        <div class="mb-3">
                                            <label for="dateCampaign" class="form-label"> تاريخ الحملة </label>
                                            <span id="dateCampaign" class="form-control"></span>
                                        </div>

                                        <div class="mb-3">
                                            <label for="statusCampaign" class="form-label"> حالة الحملة </label>
                                            <span id="status" class="form-control"></span>
                                        </div>


                                        <a href="showCampaigns.php" class="btn btn-primary" style="margin:0px;">الرجوع إلى القائمة</a>
                                    </div>
                                </div>
                               
                               

                                <script>
                                    const campaignJSON = localStorage.getItem('campaignData');
                                    const campaignData = JSON.parse(campaignJSON);                                    
                                    document.getElementById('titleArabic').textContent = campaignData.titleArabic;
                                    document.getElementById('subtitleCounter').textContent = campaignData.subtitleCounter;
                                    document.getElementById('mainTitle').textContent = campaignData.mainTitle;
                                    document.getElementById('mainParag').textContent = campaignData.mainParag;
                                    document.getElementById("mainImg").src = `./upload/${campaignData.mainImg}`;
                                    document.getElementById('title2').textContent = campaignData.title2;
                                    document.getElementById("img2").src = `./upload/${campaignData.img2}`;
                                    document.getElementById('title3').textContent = campaignData.title3;
                                    document.getElementById('nawaya').textContent = campaignData.nawaya;
                                    document.getElementById("img3").src = `./upload/${campaignData.img3}`;
                                    document.getElementById('title4').textContent = campaignData.title4;
                                    document.getElementById('titleVideo1').textContent = campaignData.titleVideo1;
                                    document.getElementById('linkVideo1').href = campaignData.linkVideo1;
                                    document.getElementById('embedLink1').innerHTML =campaignData.embedLink1;
                                    document.getElementById('titleVideo2').textContent = campaignData.titleVideo2;
                                    document.getElementById('linkVideo2').href = campaignData.linkVideo2;
                                    document.getElementById('embedLink2').innerHTML = campaignData.embedLink2;
                                    document.getElementById('titleVideo3').textContent = campaignData.titleVideo3;
                                    document.getElementById('linkVideo3').href = campaignData.linkVideo3;
                                    document.getElementById('embedLink3').innerHTML = campaignData.embedLink3;
                                    document.getElementById('endTitle').textContent = campaignData.endTitle;
                                    document.getElementById('dateCampaign').textContent = campaignData.dateCampaign;
                                    document.getElementById('status').textContent = campaignData.status;
                                    
                                    
                                </script>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
            </main>
            <?php include "../footerAll.php"; ?>
        </div>
    </div>
    <script src="../js/bootstrap5.js"></script>
    <script src="../js/scripts.js"></script>
    <script src="../js/axios.js"></script>
    <script src="../js/filejs.js"></script>
    <script src="../js/handlingCampaign.js"></script>

</body>

</html>