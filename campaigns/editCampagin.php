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
    <title> تعديل الحملة </title>
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
                                   
                                <form id="MyEditCampaign" enctype="multipart/form-data">
                                   
                                   <div class="mb-3">
                                       <input type="hidden" class="form-control" id="idCampaign" name="idCampaign" required>
                                       
                                   </div>

                                   <div class="mb-3">
                                       <label for="titleArabic" class="form-label"> عنوان الحملة يجب ان يكون في لغة العربي</label>
                                       <input type="text" class="form-control" id="titleArabic" name="titleArabic" required>
                                       <span id="titleArabicErrors" class="error"></span>
                                   </div>

                                   <div class="mb-3">
                                       <label for="subtitleCounter" class="form-label"> نص يظهر اسفل العداد </label>
                                       <input type="text" class="form-control" id="subtitleCounter" name="subtitleCounter" required>
                                       <span id="subtitleCounterErrors" class="error"></span>
                                   </div>

                                   <div class="mb-3">
                                       <label for="mainTitle" class="form-label"> عنوان رقم 1 رئيسي </label>
                                       <input type="text" class="form-control" id="mainTitle" name="mainTitle" required>
                                       <span id="mainTitleErrors" class="error"></span>
                                   </div>

                                   <div class="mb-3">
                                       <label for="mainParag" class="form-label"> فقرة رقم 1 رئيسية </label>
                                       <input type="text" class="form-control" id="mainParag" name="mainParag" required>
                                       <span id="mainParagErrors" class="error"></span>
                                   </div>

                                   <div class="mb-3">
                                       <label for="mainImg" class="form-label"> صورة رقم 1 في الموقع </label>
                                       <img src="" id="mainImgSrc" class="form-control" />
                                       <input type="file" class="form-control" id="mainImg" name="mainImg" required>
                                       <span id="mainImgErrors" class="error"></span>
                                   </div>



                                   <div class="mb-3">
                                       <label for="title2" class="form-label"> عنوان رقم 2 يظهر قبل عدد أذكار المشارك في الحملة </label>
                                       <input type="text" class="form-control" id="title2" name="title2" required>
                                       <span id="title2Errors" class="error"></span>
                                   </div>
                                   <div class="mb-3">
                                       <label for="img2" class="form-label"> صورة رقم 2 في الموقع </label>
                                       <img src="" id="img2Src" class="form-control" />
                                       <input type="file" class="form-control" id="img2" name="img2" required>
                                       <span id="img2Errors" class="error"></span>
                                   </div>


                                   <div class="mb-3">
                                       <label for="title3" class="form-label"> عنوان رقم 3 يظهر فوق نوايا الحملة </label>
                                       <input type="text" class="form-control" id="title3" name="title3" required>
                                       <span id="title3Errors" class="error"></span>
                                   </div>
                                   <div class="mb-3">
                                       <label for="nawaya" class="form-label"> نوايا الحملة </label>
                                       <textarea class="form-control" id="nawaya" name="nawaya" rows="12" required></textarea>
                                       <span id="nawayaErrors" class="error"></span>
                                   </div>
                                   <div class="mb-3">
                                       <label for="img3" class="form-label"> صورة رقم 3 في الموقع تظهر يمين النوايا </label>
                                       <img src="" id="img3Src" class="form-control" />
                                       <input type="file" class="form-control" id="img3" name="img3" required>
                                       <span id="img3Errors" class="error"></span>
                                   </div>


                                   <div class="mb-3">
                                       <label for="title4" class="form-label"> عنوان رقم 4 يظهر فوق فيديوهات الشيخ للحملة </label>
                                       <input type="text" class="form-control" id="title4" name="title4" required>
                                       <span id="title4Errors" class="error"></span>
                                   </div>

                                   <div class="mb-3">
                                       <label for="titleVideo1" class="form-label"> عنوان الفيديو الاول </label>
                                       <input type="text" class="form-control" id="titleVideo1" name="titleVideo1" required>
                                       <span id="titleVideo1Errors" class="error"></span>
                                   </div>
                                   <div class="mb-3">
                                       <label for="embedLink1" class="form-label"> رابط فيديو رقم 1 <span class="text-danger"> يجب ان يكون رابط مضمن وليس مباشر </span> </label>
                                       <span id="embedLink1Frame" class="error"></span>
                                       <textarea class="form-control" id="embedLink1" name="embedLink1" rows="3" required></textarea>
                                       <span id="embedLink1Errors" class="error"></span>
                                   </div>
                                   <div class="mb-3">
                                       <label for="linkVideo1" class="form-label"> رابط فيديو رقم 1 مباشر </label>
                                       <textarea class="form-control" id="linkVideo1" name="linkVideo1" rows="3" required></textarea>
                                       <span id="linkVideo1Errors" class="error"></span>
                                   </div>


                                   <div class="mb-3">
                                       <label for="titleVideo2" class="form-label"> عنوان الفيديو الثاني </label>
                                       <input type="text" class="form-control" id="titleVideo2" name="titleVideo2" required>
                                       <span id="titleVideo2Errors" class="error"></span>
                                   </div>
                                   <div class="mb-3">
                                       <label for="embedLink2" class="form-label"> رابط فيديو رقم 2 <span class="text-danger"> يجب ان يكون رابط مضمن وليس مباشر </span> </label>
                                       <span id="embedLink2Frame" class="error"></span> 
                                       <textarea class="form-control" id="embedLink2" name="embedLink2" rows="3" required></textarea>
                                       <span id="embedLink2Errors" class="error"></span>
                                   </div>
                                   <div class="mb-3">
                                       <label for="linkVideo2" class="form-label"> رابط فيديو رقم 2 مباشر </label>
                                       <textarea class="form-control" id="linkVideo2" name="linkVideo2" rows="3" required></textarea>
                                       <span id="linkVideo2Errors" class="error"></span>
                                   </div>


                                   <div class="mb-3">
                                       <label for="titleVideo3" class="form-label"> عنوان الفيديو الثالث </label>
                                       <input type="text" class="form-control" id="titleVideo3" name="titleVideo3" required>
                                       <span id="titleVideo3Errors" class="error"></span>
                                   </div>
                                   <div class="mb-3">
                                       <label for="embedLink3" class="form-label"> رابط فيديو رقم 3 <span class="text-danger"> يجب ان يكون رابط مضمن وليس مباشر </span> </label>
                                       <span id="embedLink3Frame" class="error"></span>
                                       <textarea class="form-control" id="embedLink3" name="embedLink3" rows="3" required></textarea>
                                       <span id="embedLink3Errors" class="error"></span>
                                   </div>
                                   <div class="mb-3">
                                       <label for="linkVideo3" class="form-label"> رابط فيديو رقم 3 مباشر </label>
                                       <textarea class="form-control" id="linkVideo3" name="linkVideo3" rows="3" required></textarea>
                                       <span id="linkVideo3Errors" class="error"></span>
                                   </div>

                                   <div class="mb-3">
                                       <label for="endTitle" class="form-label"> عنوان اخير في الموقع </label>
                                       <input type="text" class="form-control" id="endTitle" name="endTitle" required>
                                       <span id="endTitleErrors" class="error"></span>
                                   </div>
                                   <div class="mb-3">
                                       <label for="dateCampaign" class="form-label"> تاريخ الحملة </label>
                                       <input type="text" class="form-control" id="dateCampaign" name="dateCampaign" required>
                                       <span id="dateCampaignErrors" class="error"></span>
                                   </div>

                                   <div class="mb-3">
                                   
                                       <label for="statusCampaign" class="form-label"> حالة الحملة </label>
                                       <select class="form-control" id="statusCampaign" name="statusCampaign" required>
                                           <option value="1"> غير مفعلة </option>
                                           <option value="2"> مفعلة </option>
                                       </select>
                                       <span id="statusCampaignErrors" class="error"></span>
                                   </div>

                                   <!-- <button type="submit" class="btn btn-primary" onclick="updateCampaign(event)">إضافة الحملة</button> -->
                                   <div class="d-flex justify-content-between">
                                        <button id="btnSubmit" type="button" class="btn btn-primary" onclick="updateCampaign(event)">تعديل الحملة</button>
                                        <a href="showCampaigns.php" class="btn btn-primary">إلغاء التعديل</a>
                                    </div>
                                </form>
                                </div>
                               
                               

                                <script>
                                    const campaignJSON = localStorage.getItem('campaignData');
                                    const campaignData = JSON.parse(campaignJSON);   
                                    console.log(campaignData)                                 
                                    document.getElementById('idCampaign').value = campaignData.id;
                                    document.getElementById('titleArabic').value = campaignData.titleArabic;
                                    document.getElementById('subtitleCounter').value = campaignData.subtitleCounter;
                                    document.getElementById('mainTitle').value = campaignData.mainTitle;
                                    document.getElementById('mainParag').value = campaignData.mainParag;
                                    document.getElementById("mainImgSrc").src = `./upload/${campaignData.mainImg}`;
                                    document.getElementById('title2').value = campaignData.title2;
                                    document.getElementById("img2Src").src = `./upload/${campaignData.img2}`;
                                    document.getElementById('title3').value = campaignData.title3;
                                    document.getElementById('nawaya').textContent = campaignData.nawaya;
                                    document.getElementById("img3Src").src = `./upload/${campaignData.img3}`;
                                    document.getElementById('title4').value = campaignData.title4;
                                    document.getElementById('titleVideo1').value = campaignData.titleVideo1;
                                    document.getElementById('linkVideo1').value = campaignData.linkVideo1;
                                    document.getElementById('embedLink1Frame').innerHTML =campaignData.embedLink1;
                                    document.getElementById('titleVideo2').value = campaignData.titleVideo2;
                                    document.getElementById('linkVideo2').value = campaignData.linkVideo2;
                                    document.getElementById('embedLink2Frame').innerHTML = campaignData.embedLink2;
                                    document.getElementById('titleVideo3').value = campaignData.titleVideo3;
                                    document.getElementById('linkVideo3').value = campaignData.linkVideo3;
                                    document.getElementById('embedLink3Frame').innerHTML = campaignData.embedLink3;
                                    document.getElementById('embedLink1').innerHTML = campaignData.embedLink1;
                                    document.getElementById('embedLink2').innerHTML = campaignData.embedLink2;
                                    document.getElementById('embedLink3').innerHTML = campaignData.embedLink3;
                                    document.getElementById('endTitle').value = campaignData.endTitle;
                                    document.getElementById('dateCampaign').value = campaignData.dateCampaign;
                                    document.getElementById('statusCampaign').value = campaignData.status_value;
                                    
                                    // localStorage.removeItem('campaignData');

                                    // document.getElementById('btnSubmit').onclick = function(event) {
                                    // editPost(event, articleId,UserArticleId);
                                    //  };
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