<?php
include "./auth/authUser.php";
setCookiesToSession();
?>

<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Zaker</title>
  <meta name="description" content="zaker.click" />
  <meta name="keywords" content="" />
  <meta name="author" content="5adem" />
  <link rel="icon" href="./img/logo.png" type="image/png">
  <link rel="stylesheet" href="./css/odometer.css" />
  <link href="./css/tailwind.css" rel="stylesheet">
  <link href="./css/myStyle.css?v2" rel="stylesheet">
  <script strc="js/translate.js"></script>
  <script strc="js/translations.js"></script>
</head>

<body class="leading-normal tracking-normal text-white gradient" dir="rtl">
  <!--Nav-->
  <header>
    <nav id="header" class="fixed container z-30 mx-auto px-8 top-0 text-white" style="min-width:100%">
      <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="pl-4 flex items-center">
          <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
            href="index.php">
            <!--Icon from: http://www.potlabicons.com/ -->
            <img class="w-20 md:w-5/5 z-50 rounded-full bg-white" src="./img/logo.png" />
          </a>
        </div>
        <div class="block lg:hidden pr-4">
          <button id="nav-toggle"
            class="flex items-center p-1 text-white hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            <svg class="fill-current h-6 w-6 toggleColour" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
        <div
          class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-gray-600 lg:bg-transparent  p-4 lg:p-0 z-20"
          id="nav-content">
          <ul class="list-reset lg:flex justify-end flex-1 items-center">
            <li class="mr-3">
              <a class="inline-block py-2 text-white hover:text-gray-400 hover:underline px-4  font-bold no-underline toggleColour"
                href="index.php" data-i18n="t1">الرئيسية</a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-white hover:text-gray-400  no-underline hover:underline py-2 px-4 toggleColour"
                href="#salat" data-i18n="t2">عدد الصلوات</a>
            </li>
            <li class="mr-3">
              <select
                class="py-2 px-4 text-white  border-none bg-transparent inline-block hover:text-gray-400  no-underline hover:underline toggleColour "
                id="languageSelector">
                <option selected> اختر اللغة </option>
                <option value="ar" data-i18n="arabic" class="text-gray-700 hover:text-gray-900">Arabic</option>
                <option value="en" data-i18n="english" class="text-gray-700 hover:text-gray-900">English</option>
              </select>
            </li>
            <?php
            if (!isSession()):
              ?>
              <li class="mr-3">
                <a class="inline-block text-white hover:text-gray-400 no-underline hover:underline py-2 px-4 toggleColour"
                  href="./public/signUp.php" data-i18n="t3">إنشاء حساب</a>
              </li>
            </ul>
            <button id="navAction"
              class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
              <a class="text-gray-800 hover:text-gray-600 no-underline hover:underline py-2 px-4"
                href="./public/signIn.php" data-i18n="t4">تسجيل الدخول</a>
            </button>
          <?php elseif (isUserLoggedIn()): ?>
            <li class="mr-3">
              <a class="inline-block text-white hover:text-gray-300 text-black no-underline hover:underline py-2 px-4"
                href="./auth/logout.php" data-i18n="t5"> تسجيل الخروج </a>
            </li>
            <li class="mr-3">
              <a class="inline-block text-white hover:text-gray-300 text-black no-underline hover:underline py-2 px-4"
                href="./auth/logout.php" data-i18n="t6"> تسجيل الخروج </a>
            </li>

            <!-- <button id="navAction" class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            <a class="text-gray-800 hover:text-gray-600 text-black no-underline hover:underline py-2 px-4" href="./userDashboard.php">لوحة التحكم</a>
          </button> -->
          <?php elseif (isUserAdmin()): ?>
            <li class="mr-3">
              <a class="inline-block text-white hover:text-gray-300 text-black no-underline hover:underline py-2 px-4"
                href="./auth/logout.php" data-i18n="t7"> تسجيل الخروج </a>
            </li>
            <button id="navAction"
              class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
              <a class="text-gray-800 hover:text-gray-600 text-black no-underline hover:underline py-2 px-4"
                href="./adminDashboard.php" data-i18n="t8">لوحة التحكم</a>
            </button>
          <?php endif; ?>
        </div>
      </div>
      <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>
  </header>

  <!--Hero-->
  <br />
  <div class="pt-24">
    <div class="container px-7 mx-auto ">
      <h3 id="AllPrayers"
        class="my-4 text-black bg-clip-text text-transparent text-center bg-gradient-to-r from-emerald-900 to-emerald-300 text-4xl leading-tight odometer"
        style="color:#fff; margin: 0 auto; font-size:50px;display: block;" dir="ltr">
      </h3>

      <h3 id="textAllPrayers"
        class="my-4 text-black bg-clip-text text-transparent text-center bg-gradient-to-r from-emerald-900 to-emerald-300 text-4xl leading-tight"
        style="color:#fff; margin: 0 auto; font-size:30px; display: block;" data-i18n="t9">
        صلاة على الحبيب الأعظم ﷺ
      </h3>


    </div>
    <div class="container px-7 mx-auto flex flex-wrap flex-col md:flex-row items-center">
      <!--Left Col-->
      <div class="flex flex-col w-full md:w-3/5 justify-center items-center text-right">
        <p class="uppercase tracking-loose w-full" data-i18n="t10">موقع ذاكر</p>
        <h1 class="my-4 text-5xl font-bold leading-tight" data-i18n="t11">
          نحو مليارية الصلاة والسلام على أشرف الأنام
        </h1>
        <p class="leading-normal text-2xl mb-8" data-i18n="t12">
          الحمد لله وصلى الله وسلَّم وبارك على حبيبه ومصطفاه بجميع الصلوات
          والتسليمات التي يصلي بها أهل الوجود اللهم اجعلنا من ألهج الخلق في
          الصلاة والسلام عليه ومن أنهج الخلق في متابعته عليه الصلاة والسلام
          وفي أبهج الخلق في مشاهدته ومطالعته عليه الصلاة والسلام
        </p>
        <form class="flex flex-col w-full md:w-3/5 justify-center items-center text-right" id="MyParyersNumber">
          <div class="relative">

            <input type="number"
              class="block text-black flex-1 bg-white border border-gray-300 hover:border-gray-500 rounded px-4 py-2 leading-tight focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
              placeholder="أدخل رقم الحملة" id="idCampaign" name="idCampaign" data-i18n="t100" />
            <input type="number" list="myList"
              class="block text-black flex-1 bg-white border border-gray-300 hover:border-gray-500 rounded px-4 py-2 leading-tight focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
              placeholder="أدخل عدد صلواتك" id="prayerCount" name="prayerCount" data-i18n="t100" />
            <datalist id="myList">
              <option value="100"></option>
              <option value="300"></option>
              <option value="500"></option>
              <option value="1000"></option>
              <option value="2000"></option>
              <option value="3000"></option>
              <option value="5000"></option>
              <option value="10000"></option>
            </datalist>
          </div>
          <?php
          if (isUserAdmin() || isUserLoggedIn()):
            ?>
            <button
              class="mx-auto lg:mx-0 w-1/2 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-2 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
              onClick="addPrayersIndex(event)">
              ارسل صلواتك
            </button>
            <span id="prayerCountError" style="color:#fff"></span>

            <?php
          elseif (!isSession()):
            ?>
            <span class="mt-4 text-center  " data-i18n="t13"> يرجى تسجيل الدخول او إنشاء حساب جديد كي تتمكن من إدخال
              صلواتك <br>
              <span style="color:rgb(0,255,0)" data-i18n="t14"> علماً ان التسجيل لمرة واحدة </span>
            </span>
            <div class="text-gray-800 mt-4">
              <a href="./public/signIn.php"
                class="mx-auto lg:mx-0 w-1/3 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-2 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out mt-2"
                data-i18n="t15">
                تسجيل الدخول
              </a>

              <a href="./public/signUp.php"
                class="mx-auto lg:mx-0 w-1/3 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-2 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out mt-2"
                data-i18n="t16">
                إنشاء حساب
              </a>
            </div>
          </form>
        <?php endif; ?>

      </div>
      <!--Right Col-->
      <div class="w-full md:w-2/5 p-12 text-center">
        <img class="w-full md:w-5/5 z-50 rounded-full bg-gray-300" src="./img/logo.png" />
      </div>
    </div>
  </div>
  <div class="relative -mt-9 lg:-mt-30">
    <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink">
      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
          <path
            d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
            opacity="0.100000001"></path>
          <path
            d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
            opacity="0.100000001"></path>
          <path
            d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
            id="Path-4" opacity="0.200000003"></path>
        </g>
        <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
          <path
            d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z">
          </path>
        </g>
      </g>
    </svg>
  </div>
  <section class="bg-white border-b py-8" id="salat">
    <div class="container max-w-5xl mx-auto m-8">
      <div class="w-full mb-4">
        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
      </div>
      <br />

      <!-- مجموع الصلوات اصبح في الاعلى -->
      <div class="flex flex-wrap">
        <div class="w-5/6 sm:w-1/2 p-6">
          <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3" style="color:rgb(26, 159, 118)" ;
            style="line-height: 1.5; text-align: justify ;" data-i18n="t17">
            إنَّ أولى النَّاسِ بي يَومَ القيامةِ أَكْثرُهُم عليَّ صلاةً
          </h3>

          <h3 id="usersPrayers" class="text-3xl text-gray-800 font-bold leading-none mb-3"
            style="line-height: 1.5; text-align: justify ;margin-top: 10px;" data-i18n="t969">

          </h3>

        </div>

        <div class="max-w-lg sm:w-1/2 p-6">
          <img src="./img/salat1.png" alt="" />
        </div>
      </div>
      <div class="flex flex-wrap flex-col-reverse sm:flex-row">
        <!-- <div class="max-w-lg p-6 mt-6">
          <img src="./img/nawaya.png" alt="" />
        </div> -->

        <div class="w-full sm:w-1/2 p-6 mt-6" style="width: 100%;">
          <div class="align-middle">
            <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3" style="color:rgb(26, 159, 118)" ;
              data-i18n="t18">
              يا أيها الذين آمنوا صلّوا عليه وسلّموا تسليما
            </h3>
            <br />
            <p class="text-gray-600 mb-8 text-lg" data-i18n="t19">
              اللهم اجعل هذه الصلوات وهذه التسليمات في دائرة القبول، وفي حنانة قلب الحبيب الرسول ﷺ واجعل اللهم من نوايا
              هذه الصلوات والتسليمات إدخال السرور على قلبه الشريف وتجديد الوصل بأمته الحنيفة

              اللهم اجعل واردات هذه الصلوات رحمة وسكينة ومحبة وسلاما تتنزل على أهلِ هذا العالمِ وعلى أهل هذه المرحلة
              المعاصرة من آثار ما وقع لهم من اكتسابات ومن انتسابات

              اللهم اجعل تحولات ذلك ببركة الصلاة والسلام على النبي ﷺ، واجعل اللهم آثارها على كل لسان يذكر ويصلي على
              النبي ﷺ وعلى بيته وعلى أسرته وعلى أولاده وعلى زمانه وعلى قطره بما فيها من تأمينات وضمانات وحصانات وتجليات
              وإفاضات وواردات وأرزاق حسيات ومعنويات

              وأن الله يفتح بهذه الصلوات كل باب مغلق وييسر بها كل أمر عسير وأن الله يكتبنا في خواص المصلين على النبي ﷺ
              ويجعلنا من حملة لواء الصلاة والسلام عليه في العالمين
              وأن الله يقرب مجلسنا منه يوم القيامة ويجعلنا من الأحاسن أخلاقا وما أودع النبي ﷺ من فضائل ومن بركات ومن
              عطايا المصلين والمسلمين عليه في سائر الأوقات وفي كل ميقات وفي خصوصية ليلة الجمعة ويوم الجمعة وأن الله يجعل
              هذه الصلوات والتسليمات غنيمة لنا بين يدي معالمته ومعرفته ومحبته ومتابعته ﷺ
              وأن الله يجعلها من باب القيامِ بحقوق النبي ﷺ من تعزير وتعزيز وتوقير
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-white border-b py-8">
    <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800" data-i18n="t20" style="color:rgb(26, 159, 118);">
            مشاركة العلماء في حملة ذاكر
        </h2>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                    <!--<p class="w-full text-gray-600 text-xs md:text-sm px-6" data-i18n="t21">-->
                    <!--  من الأردن-->
                    <!--</p>-->
                    <div class="w-full font-bold text-xl text-gray-800 px-6" data-i18n="t22">
                        الشيخ عون القدومي
                    </div>
                    <p class="text-gray-800 text-base px-6 mb-5">
                        <iframe width="300" height="300" src="https://www.youtube.com/embed/TxsPw1vy57c" title="الشيخ عون القدومي || مزايا شهر شعبان الحسان" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </p>
                </a>
            </div>
            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                <div class="flex items-center justify-start">
                    <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        <a href="https://www.youtube.com/watch?v=TxsPw1vy57c" data-i18n="t23">شاهد الفيديو</a>
                    </button>
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                    <!--<p class="w-full text-gray-600 text-xs md:text-sm px-6" data-i18n="t24"> من الهند </p>-->
                    <div class="w-full font-bold text-xl text-gray-800 px-6" data-i18n="t25">
                        الشيخ عون القدزمي
                    </div>
                    < class="text-gray-800 text-base px-6 mb-5">
                        <iframe width="300" height="300" src="https://www.youtube.com/embed/0PLr9Jw9UbM" title="الشيخ عون القدومي ll شهر شعبان ودفع الغفلة فيه" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </p>
                </a>
            </div>
            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                <div class="flex items-center justify-start">
                    <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        <a href="https://www.youtube.com/watch?v=0PLr9Jw9UbM" data-i18n="t26">شاهد الفيديو</a>
                    </button>
                </div>
            </div>
        </div>

        <!-- تم التعديل -->
        <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
            <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                    <!--<p class="w-full text-gray-600 text-xs md:text-sm px-6" data-i18n="t27"> من الأردن </p>-->
                    <div class="w-full font-bold text-xl text-gray-800 px-6" data-i18n="t28">
                        الشيخ عون القدومي
                    </div>
                    <p class="text-gray-800 text-base px-6 mb-5">
                        <iframe width="300" height="300" src="https://www.youtube.com/embed/2sUhmYfOrJM" title="بالصلاة على النبي ﷺ _ الشيخ عون القدومي حفظه الله تعالى" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </p>
                </a>
            </div>
            <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                <div class="flex items-center justify-start">
                    <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        <a href="https://www.youtube.com/shorts/2sUhmYfOrJM?feature=share" data-i18n="t29">شاهد الفيديو</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
            <g class="wave" fill="#f8fafc">
                <path d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z">
                </path>
            </g>
            <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
                <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                    <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                    <path d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z" opacity="0.100000001"></path>
                    <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
                </g>
            </g>
        </g>
    </g>
</svg>
<section class="container mx-auto text-center py-6 mb-12">
    <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white" data-i18n="t30">
        حملة ذاكر هي من حملات ريبع المحبين
    </h2>
    <div class="w-full mb-4">
        <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
    </div>
    <h3 class="my-4 text-3xl leading-tight" data-i18n="t31">ربيع المحبين 1445</h3>
    <!-- <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
        Action!
      </button> -->
</section>

  <?php include "footerFront.php" ?>

  <a href="https://t.me/ZakerClick" class="teleIcon">
    <i class="fab fa-telegram" style="background: #fff; border-radius: 50%; font-size: 40px;"></i>
  </a>


  <script>
    var scrollpos = window.scrollY;
    var header = document.getElementById("header");
    var navcontent = document.getElementById("nav-content");
    var navaction = document.getElementById("navAction");
    var brandname = document.getElementById("brandname");
    var toToggle = document.querySelectorAll(".toggleColour");

    document.addEventListener("scroll", function () {
      /*Apply classes for slide in bar*/
      scrollpos = window.scrollY;

      if (scrollpos > 10) {
        header.classList.add("bg-white");
        header.classList.add("text-black");
        navaction.classList.remove("bg-white");
        navaction.classList.add("gradient");
        navaction.classList.remove("text-white");
        navaction.classList.add("text-gray-800");
        //Use to switch toggleColour colours
        for (var i = 0; i < toToggle.length; i++) {
          toToggle[i].classList.add("text-gray-800");
          toToggle[i].classList.remove("text-white");
        }
        header.classList.add("shadow");
        navcontent.classList.remove("bg-gray-100");
        navcontent.classList.add("bg-white");
        navcontent.classList.add("text-black");
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

    function displayEnglishNumber() {
      var input = document.querySelector('input[type="number"]');
      var selectedValue = input.value;
      var displayValue = new Intl.NumberFormat('en').format(selectedValue);
      input.value = displayValue;
    }
  </script>
  <script strc="js/translate.js"></script>
  <script strc="js/translations.js"></script>

  <script src="js/odometer.js"></script>
  <script src="js/FontAwesome.js"></script>
  <script src="js/filejs.js?v='12'"></script>
  <script src="js/translateJs.js"></script>
  <script src="js/axios.js"></script>

  <script>
    window.addEventListener('DOMContentLoaded', function () {
      let idCampaign = 22;
      getPrayersAll(idCampaign);
      getPrayersUsers(idCampaign);

    });
  </script>

<script>
        // استدعاء تابع استرجاع الحملات عند تحميل الصفحة
        window.onload = fetchCampaignsIndex;
</script>



</body>

</html>