<?php
include "../auth/authUser.php";
if (isSession()) {
  if (isUserLoggedIn()) {
    redirectToUserDashboard();
  } elseif (isUserAdmin()) {
    redirectToAdminDashboard();
  }
}
if (setCookiesToSession()) {
  if (isUserLoggedIn()) {
    redirectToUserDashboard();
  } elseif (isUserAdmin()) {
    redirectToAdminDashboard();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>
    Zaker
  </title>
  <meta name="description" content="zaker.click" />
  <meta name="keywords" content="" />
  <meta name="author" content="5adem" />
  <link href="../css/tailwind.css" rel="stylesheet">
  <link href="../css/myStyle.css" rel="stylesheet">
   <link rel="icon" href="../img/logo.png" type="image/png">

  </style>
</head>

<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif" dir="rtl">
  <!--Nav-->
  <header>
    <nav id="header" class="fixed container z-30 mx-auto px-8 top-0 text-white" style="min-width:100%">
      <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="pl-4 flex items-center">
          <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="../index.php">
            <!--Icon from: http://www.potlabicons.com/ -->
            <img class="w-20 md:w-5/5 z-50 rounded-full bg-white" src="../img/logo.png" />
          </a>
        </div>
        <div class="block lg:hidden pr-4">
          <button id="nav-toggle" class="flex items-center p-1 text-white hover:text-gray-500 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            <svg class="fill-current h-6 w-6 toggleColour" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-gray-600 lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
          <ul class="list-reset lg:flex justify-end flex-1 items-center">
            <li class="mr-3">
              <a class="inline-block py-2 text-white hover:text-gray-300 hover:underline px-4 text-black font-bold no-underline toggleColour" href="../index.php">الرئيسية</a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-white hover:text-gray-300 text-black no-underline  hover:underline py-2 px-4 toggleColour" href="../index.php#salat">عدد الصلوات</a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-white hover:text-gray-300 text-black no-underline hover:underline py-2 px-4 toggleColour" href="signUp.php">إنشاء حساب</a>
            </li>
          </ul>
          <button id="navAction" class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            <a class="text-black hover:text-gray-600 text-black no-underline hover:underline py-2 px-4" href="signIn.php">تسجيل الدخول</a>
          </button>
        </div>
      </div>
      <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>
  </header>

  <!--Hero-->
  <br />
  <div class="pt-24">
    <section class="bg-white border-b py-8">
      <div class="container max-w-5xl mx-auto m-8">
        <form id="MyForgotPassword">
          <div class="border-b border-gray-900/10 p-12 bg-white rounded-t rounded-b-none overflow-hidden shadow">
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
              إعادة تعين كلمة المرور
            </h2>
            <h4 class="w-full my-2 text-xl leading-tight text-center text-gray-800">ادخل بريدك الالكتروني وسنرسل لك رابطاً لإعادة تعين كلمة المرور</h4>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-6">
                <label for="first-name" class="block text-lg font-medium leading-6 text-gray-900">الايميل</label>
                <div class="mt-2">
                  <input type="email" name="Email" id="inputEmail" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                  <h3 id="forgotResponse" class="text-center text-emerald-600 mt-2 mb-0"></h3>
                </div>
              </div>


              <div class="mt-6 w-full">
                <button type="submit" onclick="forgotPassword(event)" class="rounded-md w-full bg-emerald-600 px-1 py-2 text-lg font-semibold text-white shadow-sm hover:bg-emerald-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                  ارسل رابط إعادة التعين
                </button>
              </div>

              <div class="mt-6 w-full">
                <a href="signIn.php" class="text-emerald-600 text-lg hover:underline">العودة لواجهة تسجيل الدخول</a>
              </div>
              <br>
            </div>
        </form>

        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
      </div>
    </section>
  </div>

  <!--Footer-->
 
  <footer class="bg-white">
    <div class="container mx-auto px-8">
      <div class="w-full flex flex-col md:flex-row py-6">
        <div class="flex-1 mb-6 text-black text-center sm:text-right">
          <a class="no-underline hover:no-underline font-bold text-4xl" style="color:#317e71" href="index.php">
            ذاكر
          </a>
        </div>

      
        <div class="flex justify-flex-center">


          <a href="https://www.facebook.com/rabe3almoheben" class="flex-1 md:w-12 text-gray-600" style="font-size: 34px; color:#317e71;margin: 0 20px;">
            <i class="fab fa-facebook" ></i>
          </a>

          <a href="https://www.youtube.com/@AounalKaddoumi" class="flex-1 md:w-12 text-gray-600" style="font-size: 34px; color:#317e71;margin: 0 20px;">
            <i class="fab fa-youtube"></i>
          </a>

          <a href="https://t.me/ZakerClick" class="flex-1 md:w-12 text-gray-600" style="font-size: 34px; color:#317e71;margin: 0 20px;">
            <i class="fab fa-telegram-plane"></i>
          </a>


        </div>
      </div>
      <p class="text-center" style="color:#317e71">
        تطوير فريق خادم - قسم البرمجة
      </p>
      <br />
    </div>
  </footer>

  <a href="https://t.me/ZakerClick" class="teleIcon">
    <i class="fab fa-telegram" style="background: #fff; border-radius: 50%; font-size: 40px;"></i>
  </a>

  <!-- jQuery if you need it
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  -->
  <script>
    var scrollpos = window.scrollY;
    var header = document.getElementById("header");
    var navcontent = document.getElementById("nav-content");
    var navaction = document.getElementById("navAction");
    var brandname = document.getElementById("brandname");
    var toToggle = document.querySelectorAll(".toggleColour");

    document.addEventListener("scroll", function() {
      /*Apply classes for slide in bar*/
      scrollpos = window.scrollY;

      if (scrollpos > 10) {
        header.classList.add("bg-white");
        navaction.classList.remove("bg-white");
        navaction.classList.add("gradient");
        navaction.classList.remove("text-gray-800");
        navaction.classList.add("text-white");
        //Use to switch toggleColour colours
        for (var i = 0; i < toToggle.length; i++) {
          toToggle[i].classList.add("text-gray-800");
          toToggle[i].classList.remove("text-white");
        }
        header.classList.add("shadow");
        navcontent.classList.remove("bg-gray-100");
        navcontent.classList.add("bg-white");
      } else {
        header.classList.remove("bg-white");
        navaction.classList.remove("gradient");
        navaction.classList.add("bg-white");
        navaction.classList.remove("text-white");
        navaction.classList.add("text-gray-800");
        //Use to switch toggleColour colours
        for (var i = 0; i < toToggle.length; i++) {
          toToggle[i].classList.add("text-white");
          toToggle[i].classList.remove("text-gray-800");
        }

        header.classList.remove("shadow");
        navcontent.classList.remove("bg-white");
        navcontent.classList.add("bg-gray-100");
      }
    });
  </script>
  <script>
    /*Toggle dropdown list*/
    /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

    var navMenuDiv = document.getElementById("nav-content");
    var navMenu = document.getElementById("nav-toggle");

    document.onclick = check;

    function check(e) {
      var target = (e && e.target) || (event && event.srcElement);

      //Nav Menu
      if (!checkParent(target, navMenuDiv)) {
        // click NOT on the menu
        if (checkParent(target, navMenu)) {
          // click on the link
          if (navMenuDiv.classList.contains("hidden")) {
            navMenuDiv.classList.remove("hidden");
          } else {
            navMenuDiv.classList.add("hidden");
          }
        } else {
          // click both outside link and outside menu, hide menu
          navMenuDiv.classList.add("hidden");
        }
      }
    }

    function checkParent(t, elm) {
      while (t.parentNode) {
        if (t == elm) {
          return true;
        }
        t = t.parentNode;
      }
      return false;
    }
  </script>
  <script src="../js/filejs.js"></script>
  <script src="js/translateJs.js"></script>
  <script src="../js/FontAwesome.js"></script>
</body>

</html>