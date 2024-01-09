let ss="<br><br><br>";
const translations = {
  ar: {
    t1: "الرئيسية",
    t2: "عدد الصلوات",
    t3: "انشاء حساب",
    t4: "تسجيل الدخول",
t5: "تسجيل الخروج",
t6: "تسجيل الخروج",
t7: "تسجيل الخروج",
t8: "لوحة التحكم",
t9:"الصلاة على الحبيب الاعظم",
t10:"موقع ذاكر",
t11:" نحو مليارية الصلاة والسلام على أشرف الأنام ﷺ",
t12:`لحمد لله وصلى الله وسلَّم وبارك على حبيبه ومصطفاه بجميع الصلوات
        والتسليمات التي يصلي بها أهل الوجود اللهم اجعلنا من ألهج الخلق في
        الصلاة والسلام عليه ومن أنهج الخلق في متابعته عليه الصلاة والسلام
        وفي أبهج الخلق في مشاهدته ومطالعته عليه الصلاة والسلام`,
t13:"يرجى تسجيل الدخول او إنشاء حساب جديد كي تتمكن من إدخال صلواتك",
t14:"علماً ان التسجيل لمرة واحدة ",
t15:"تسجيل الدخول",
t16:"انشاء حساب",
t17:"إنَّ أولى النَّاسِ بي يَومَ القيامةِ أَكْثرُهُم عليَّ صلاة",
t18:"يا أيها الذين آمنوا صلّوا عليه وسلّموا تسليما",
t19:` اللهم اجعل هذه الصلوات وهذه التسليمات في دائرة القبول وفي حنانة
            قلب الحبيب الرسول واجعل اللهم من نوايا هذه الصلوات والتسليمات
            إدخال السرور على قلبه الشريف وتجديد الوصل بأمته الحنيفية
            
           اللهم اجعل واردات هذه الصلوات رحمة وسكينة ومحبة وسلام
            تتنزل على أهل هذا العالم وعلى أهل هذه المرحلة المعاصرة من آثار
            ما وقع لهم من اكتسابات ومن انتسابات
           
            اللهم اجعل تحولات ذلك ببركة الصلاة والسلام على النبي صلى الله
            عليه وسلم
            واجعل اللهم آثارها على كل لسان يذكر ويصلي على النبي صلى
            الله عليه وآله وسلم وعلى بيته وعلى أسرته وعلى أولاده وعلى زمانه
            وعلى قِطره بما فيها من تأمينات وضمانات وحصانات وتجليات وإفاضات
            وواردات وأرزاق حسيات ومعنويات
           
            وأن الله يفتح بهذه الصلوات كل باب مغلق وييسر بها كل أمر عسير
            وأنَّ الله يكتبنا في خواص المصلين على النبي صلى الله عليه وسلم
            ويجعلنا من حملة لواء الصلاة والسلام عليه في العالمين
            
            وأنَّ الله يقرب مجلسنا منه يوم القيامة ويجعلنا من الأحاسن أخلاقا
            وما أَوَدَّ النبي صلى الله عليه وآله وسلم من فضائل ومن بركات ومن
            عطايا المصلين والمسلمين عليه في سائر الأوقات وفي كل ميقات وفي
            خصوصية ليلة الجمعة ويوم الجمعة وأنَّ الله يجعل هذه الصلوات
            والتسليمات غنيمة لنا بين يدي معالمته ومعرفته ومحبته ومتابعته صلى
            الله عليه وسلم
           
            وأنَّ الله يجعلها من باب القيام بحقوق النبي صلى الله عليه وآله
            وسلم من تعزير وتعزيز وتوقير`,
t20:"مشاركة العلماء في حملة ذاكر",
t21:" من الاردن",
t22:"الشيخ عون القدومي",
t23:"شاهد الفيديو",
t24:"من الهند",
t25:"فضيلة العلامة السيد إبراهيم الخليل البخاري",
t26:"شاهد الفيديو",
t27:" من الاردن",
t28:"الشيخ عون القدومي",
t29:"شاهد الفيديو",
t30:"حملة ذاكر هي من حملات ريبع المحبين",
t31:"ربيع المحبين1445",
t32:"تطوير فريق خادم - قسم البرمجة",
t33:"التسجيل في الموقع",
t34:"لماً ان التسجيل لمرة واحدة ",
t35:"الاسم الاول",
t36:"الكنية",
t37:"عنوان البريد الالكتروني",
t38:"البلد",
t39:"الجنسية",
t40:"كلمة السر",
t41:"تأكيد كلمة السر",
t42:"ذكر",
t43:"انثى",
t100:"ادخل عدد صلواتك",

t45:"ذاكر",
t46:"تطوير فريق ذاكر",


t44: "العمر",

t46: "تم تطويره بواسطة فريق `اكر",
t47: "تذكرني",
t48: "نسيت كلمة المرور",
t49: "تسجيل الدخول",
t50: "ذاكر",
t51: "تم تطويره بواسطة فريق ذاكر",
t52: "البريد الإلكتروني",
t53: "كلمة المرور",
t99:"الجنس",
t77:"ذاكر",
t88:"تسجيل",
t89:"اختر اللغة",
t90:"تسجيل الدخول",

    arabic:"العربية",
    english:"الإنجليزية"
  
  },
  en: {
    t1: "Home",
    t2: "Number of Prayers",
    t3: "Create an Account",
    t4: "Log In",
    t5: "Log Out",
    t6: "Log Out",
    t7: "Log Out",
    t8: "Dashboard",
    t9: "Prayer for the Greatest Beloved",
    t10: "zakir Website",
    t11: "Towards a billion prayers of peace and blessings upon the most noble of people, peace and blessings be upon him",
    t12: `All praise and prayers and blessings be upon his beloved and chosen one in all prayers
          and salutations offered by the people of existence. O Allah, make us among those who
          excel in prayer and peace upon him, and among those who follow his path of prayer and
          peace upon him, and among those who find joy in seeing and observing him, peace be upon
          him.`,
    t13: "Please log in or create a new account to enter your prayers.",
    t14: "Note that registration is only required once.",
    t15: "Log In",
    t16: "Create an Account",
    t17: "The closest people to me on the Day of Resurrection will be those who prayed the most upon me.",
    t18: "O you who have believed, pray upon him and submit to him in peace.",
    t19: `O Allah, accept these prayers and salutations within the circle of acceptance and in the
          tenderness of the heart of the noble Prophet. O Allah, make the intentions behind these
          prayers and salutations bring joy to his noble heart and renew the connection with his
          righteous nation.
         

         
          O Allah, make the proceeds of these prayers mercy, tranquility, love, and peace that
          descend upon the people of this world and the people of this contemporary era, due to
          what they have gained and what they have joined.
         
          O Allah, transform all of this through the blessings of prayers and peace upon the
          Prophet, peace be upon him.
          O Allah, make its effects present on every tongue that mentions and prays upon the
          Prophet, peace be upon him and his family, and upon his household, children, time,
          and state, including its provisions, guarantees, protections, manifestations, outpourings,
          proceeds, material and spiritual sustenance.
         
          And know that Allah opens every closed door with these prayers and facilitates every
          difficult matter with them. And Allah writes us among the special people who pray upon
          the Prophet, peace be upon him, and makes us bearers of the banner of prayer and peace
          upon him in the worlds.
         
          And Allah brings our gathering near to Him on the Day of Resurrection and makes us the
          best in character, as desired by the Prophet, peace be upon him, in terms of virtues,
          blessings, and gifts for the praying and Muslim community upon him at all times, in
          every occasion, and especially on Friday night and Friday. And Allah makes these prayers
          and salutations a booty for us in the presence of His landmarks, knowledge, love, and
          following of His Prophet, peace be upon him.
         
          And Allah makes them a means of fulfilling the rights of the Prophet, peace be upon him,
          in terms of honoring, venerating, and respecting him.`,
    t20: "Scholars' Participation in the zakir Campaign",
    t21: "From Jordan",
    t22: "Sheikh Awn Al-Qudumi",
    t23: "Watch the Video",
    t24: "From India",
    t25: "His Eminence Al-Sayyid Ibrahim Al-Khalil Al-Bukhari",
    t26: "Watch the Video",
    t27: "From Jordan",
    t28: "Sheikh Awn Al-Qudumi",
    t29: "Watch the Video",
    t30: "zakir Campaign is one of the campaigns of the loving spring",
    t31: "Rabi' Al-Muhibbin 1445",
    t32: "Development of the Servant Team - Programming Department",
    t33: "Register on the Website",
    t34: "Note that registration is only required once.",
    t35: "First Name",
    t36: "Last Name",
    t37: "Email Address",
    t38: "Country",
    t39: "Nationality",
    t40: "Password",
    t41: "Confirm Password",
    t42:"male",
t43:"female",
t44:"age",
t45:"zaker",
t46:"developed by zaker team",
t47:"remember me",
t48:"do you frogat password",
t49:"login",
t50:"zaker",
t51:"developed by zaker team",
t52:"email",
t53:"password",
t99:"gender",
t77:"zaker",
t100:"Enter the number of your prayers",
t88:"Sign Up",
t90:"Sign In",

  arabic: "Arabic",
    english:"English"
  },
};

const languageSelector = document.getElementById("languageSelector");

if (languageSelector) {
  languageSelector.addEventListener("change", handleLanguageChange);
  
}

document.addEventListener("DOMContentLoaded", () => {
  const language = localStorage.getItem("lang") || "ar";
  console.log(language);
  setLanguage(language);
  getPrayersAll();
  getPrayersUsers();

});

function handleLanguageChange(event) {
  const selectedLanguage = event.target.value;
  setLanguage(selectedLanguage);
  localStorage.setItem("lang", selectedLanguage);
  var lang = localStorage.getItem("lang") || "ar";
  var elements1 = document.getElementsByTagName("*");

  for (var i = 0; i < elements1.length; i++) {
    var element11 = elements1[i];
    if(element11.id==="AllPrayers"){
      break;
    }
    

    if (lang === "en") {
      element11.style.direction = "ltr";
    } else { element11.style.direction = "rtl";
     }
}

getPrayersUsers();

}

function setLanguage(language) {
  const elements = document.querySelectorAll("[data-i18n]");
  elements.forEach((element) => {
    const translationKey = element.getAttribute("data-i18n");
    element.textContent = getTranslation(language, translationKey);
    
  });
  // document.dir = language === "ar" ? "rtl" : "ltr";
}

function getTranslation(language, translationKey) {
  return translations[language][translationKey];
}

// تغيير اتجاه العناصر عند تحميل الصفحة
document.addEventListener("DOMContentLoaded", () => {
  var lang = localStorage.getItem("lang") || "ar";
  var elements1 = document.getElementsByTagName("*");

  for (var i = 0; i < elements1.length; i++) {
    var element11 = elements1[i];
    if(element11.id==="AllPrayers"){
      break;
    } 
    

    if (lang === "en") {
      element11.style.direction = "ltr";
    } else {element11.style.direction = "rtl";
     }
  }

  
});





































function startCountdownAndRedirect(seconds, elementId, redirectUrl) {
  const countdownElement = document.getElementById(elementId);
  countdownElement.textContent = `سيتم التحويل خلال ${seconds} ثواني`;

  const countdownInterval = setInterval(() => {
    seconds--;
    countdownElement.textContent = `سيتم التحويل خلال ${seconds} ثواني`;

    if (seconds <= 0) {
      clearInterval(countdownInterval);
      window.location.href = redirectUrl;
    }
  }, 1000);
}

function verifyEmail() {
  // استخراج معلومات البريد الإلكتروني ورمز التحقق من عنوان الURL
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  const email = urlParams.get("email");
  const vCode = urlParams.get("vCode");

  // بناء بيانات الطلب
  const formData = new FormData();
  formData.append("email", email);
  formData.append("vCode", vCode);
  document.getElementById("messageResponse").textContent = "";

  if (!email || !vCode) {
    document.getElementById("messageResponse").textContent =
      "انتهت صلاحية الرابط";
    // document.getElementById("MyParyersNumber").style.display = "none";

    return;
  }

  // بناء عنوان الطلب API
  const apiUrl = "https://zaker.click/auth/verify.php";

  // إجراء طلب POST باستخدام fetch
  fetch(apiUrl, {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        document.getElementById("messageResponse").textContent = data.success;
        document.getElementById("MyParyersNumber").style.display = "flex";
        document.getElementById("logout").style.display = "flex";
        document.getElementById("navAction").style.display = "none";
        document.getElementById("register").style.display = "none";

        // startCountdownAndRedirect(secondsLeft, elementId, redirectUrl);
      }
      if (data.error) {
        document.getElementById("messageResponse").textContent = data.error;
      }
      // console.log(data); // يمكنك التعامل مع البيانات هنا
    })
    .catch((error) => {
      console.error("Error:", error);
    });
}

// تعريف الدالة لإرسال البيانات
function sendData(url, data) {
  return fetch(url, {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(data),
  }).then((response) => response.json());
}

// تعريف دالة لمعالجة النموذج وإرساله
function handleRegistration(event) {
  event.preventDefault(); // منع إعادة تحميل الصفحة

  const formData = new FormData(document.getElementById("MyRegister"));
  const data = {};

  formData.forEach((value, key) => {
    data[key] = value;
  });

  sendData("https://zaker.click/auth/handlingRegister.php", data)
    .then((errors) => {
      // قم بعرض رسائل الخطأ داخل النموذج
      if (errors) {
        const lang = localStorage.getItem("lang");

        console.log(errors);
        document.getElementById("FirstNameError").textContent = "";
        document.getElementById("LastNameError").textContent = "";
        document.getElementById("GenderError").textContent = "";
        document.getElementById("AgeError").textContent = "";
        document.getElementById("NationalityError").textContent = "";
        document.getElementById("EmailError").textContent = "";
        document.getElementById("PasswordError").textContent = "";
        document.getElementById("PasswordConfirmError").textContent = "";
        document.getElementById("Connection").textContent = "";

        if (errors.FirstName) {
          document.getElementById("FirstNameError").textContent =
              lang === "ar"
                  ? "اسم الأول غير صحيح!"
                  : lang === "turkish"
                  ? "Geçersiz ilk isim!"
                  : "errors.FirstName";
      }
      if (errors.LastName) {
          document.getElementById("LastNameError").textContent =
              lang === "ar"
                  ? "اسم العائلة غير صحيح!"
                  : lang === "turkish"
                  ? "Geçersiz soyadı!"
                  : "errors.LastName";
      }
      if (errors.Gender) {
          document.getElementById("GenderError").textContent =
              lang === "ar"
                  ? "الجنس غير صحيح!"
                  : lang === "turkish"
                  ? "Geçersiz cinsiyet!"
                  : "errors.Gender";
      }
      if (errors.Age) {
          document.getElementById("AgeError").textContent =
              lang === "ar"
                  ? "العمر غير صحيح!"
                  : lang === "turkish"
                  ? "Geçersiz yaş!"
                  :"errors.Age" ;
      }
      if (errors.Nationality) {
          document.getElementById("NationalityError").textContent =
              lang === "ar"
                  ? "الجنسية غير صحيحة!"
                  : lang === "turkish"
                  ? "Geçersiz uyruk!"
                  : "errors.Nationality";
      }
      if (errors.Email) {
          document.getElementById("EmailError").textContent =
              lang === "ar"
                  ? "البريد الإلكتروني غير صحيح!"
                  : lang === "turkish"
                  ? "Geçersiz e-posta adresi!"
                  : "errors.Email";
      }
      if (errors.Password) {
          document.getElementById("PasswordError").textContent =
              lang === "ar"
                  ? "كلمة المرور غير صحيحة!"
                  : lang === "turkish"
                  ? "Geçersiz şifre!"
                  : "errors.Password";
      }
      if (errors.PasswordConfirm) {
          document.getElementById("PasswordConfirmError").textContent =
          lang === "ar" ? "تأكيد كلمة المرور غير صحيح!" : errors.PasswordConfirm;}
        if (errors.Connection) {
          document.getElementById("Connection").textContent = errors.Connection;
          if(errors.link){
               setTimeout(function() {
                  window.location.href = response.link;
                }, 3000); // تأخير لمدة 3 ثوانٍ (3000 مللي ثانية)
          }
          //   alert(errors.Connection);
        }
        // يمكنك استمرار العمل بنفس الطريقة مع باقي الحقول
      }
    })
    .catch((error) => {
      console.log("Error:", error);
    });
}

// تعريف دالة لمعالجة تسجيل الدخول
function handleLogin(event) {
  event.preventDefault(); // منع إعادة تحميل الصفحة

  const formData = new FormData(document.getElementById("MyLogin"));
  const data = {};

  formData.forEach((value, key) => {
    data[key] = value;
  });

  sendData("https://zaker.click/auth/handlingLogin.php", data)
    .then((response) => {
      document.getElementById("loginSuccess").textContent = "";
      // قم بعرض رسائل الخطأ داخل النموذج
      // console.log(response)
      if (response.message) {
        document.getElementById("loginSuccess").textContent = response.message;
        if (response.link) {
          window.location.href = "../" + response.link;
        }
      } else if (response.link) {
        window.location.href = response.link;
      }
    })
    .catch((error) => {
      console.log("Error:", error);
    });
}

function forgotPassword(event) {
  event.preventDefault(); // منع إعادة تحميل الصفحة

  const formData = new FormData(document.getElementById("MyForgotPassword"));
  const data = {};

  formData.forEach((value, key) => {
    data[key] = value;
  });
  //   console.log(data);
  sendData("https://zaker.click/auth/forgotPassword.php", data)
    .then((response) => {
      // قم بعرض رسائل الخطأ داخل النموذج
      console.log(response);
      document.getElementById("forgotResponse").textContent = "";
      // document.getElementById("PasswordError").textContent = "";
      // document.getElementById("PasswordConfirmError").textContent = "";
      if (response.message) {
        document.getElementById("forgotResponse").textContent =
          response.message;
      }
    })
    .catch((error) => {
      console.log("Error:", error);
    });
}

function resetPassword(event) {
  event.preventDefault(); // منع إعادة تحميل الصفحة

  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  const email = urlParams.get("email");
  const vCode = urlParams.get("vCode");

  const formData = new FormData(document.getElementById("MyResetPassword"));
  formData.append("email", email);
  formData.append("vCode", vCode);

  const data = {};
  formData.forEach((value, key) => {
    data[key] = value;
  });

  sendData("https://zaker.click/auth/forgotPassword.php", data)
    .then((response) => {
      // قم بعرض رسائل الخطأ داخل النموذج
      console.log(response);
      document.getElementById("resetResponse").textContent = "";
      document.getElementById("PasswordError").textContent = "";
      document.getElementById("PasswordConfirmError").textContent = "";
      if (response.message) {
        document.getElementById("resetResponse").textContent = response.message;
        if (response.link) {
          let secondsLeft = 5;
          let elementId = "countdown";
          let redirectUrl = response.link;
          startCountdownAndRedirect(secondsLeft, elementId, redirectUrl);
        }
      }
      if (response.Password) {
        document.getElementById("PasswordError").textContent =
          response.Password;
      }
      if (response.PasswordConfirm) {
        document.getElementById("PasswordConfirmError").textContent =
          response.PasswordConfirm;
      }
    })
    .catch((error) => {
      console.log("Error:", error);
    });
}

// جلب معلومات المستخدم الذي نشر المقالة
function getUsersDataNumber() {
  return fetch("https://zaker.click/auth/getUserNumber.php")
    .then((response) => response.json())
    .then((data) => {
      if (data.userError) {
        alert(data.userError);
        return false;
      }
      return data; // إرجاع القيمة المستلمة
    });
}

function getUsersNumber() {
  return fetch("https://zaker.click/auth/getUserNumber.php")
    .then((response) => response.json())
    .then((data) => {
      if (data.userError) {
        // alert(data.userError);
        return false;
      }
      return data; // إرجاع القيمة المستلمة
    });
}

async function addArticle(event) {
  event.preventDefault();

  const featuredImage = document.getElementById("featuredImage").files[0];

  if (
    featuredImage &&
    !["image/png", "image/jpeg", "image/jpg"].includes(featuredImage.type)
  ) {
    document.getElementById("imgErrors").textContent =
      "الملف غير مدعوم. يجب أن يكون نوع الملف صورة (png, jpg, jpeg).";
    document.getElementById("featuredImage").value = "";
    return;
  }

  try {
    let x = await getUsersDataNumber(); // انتظار حل الوعد
    const formData = new FormData(document.getElementById("MyAddArticle"));
    formData.delete("featuredImage");
    formData.append("userId", x["UserId"]);
    formData.append("featuredImage", featuredImage);

    const response = await axios.post(
      "https://zaker.click/articles/handlingAddArticle.php",
      formData
    );
    document.getElementById("titleErrors").textContent = "";
    document.getElementById("contentErrors").textContent = "";
    document.getElementById("excerptErrors").textContent = "";
    document.getElementById("categoryErrors").textContent = "";
    document.getElementById("publishDateErrors").textContent = "";
    document.getElementById("keywordsErrors").textContent = "";
    document.getElementById("imgErrors").textContent = "";
    if (response.data.title) {
      document.getElementById("titleErrors").textContent = response.data.title;
    }
    if (response.data.content) {
      document.getElementById("contentErrors").textContent =
        response.data.content;
    }
    if (response.data.excerpt) {
      document.getElementById("excerptErrors").textContent =
        response.data.excerpt;
    }
    if (response.data.category) {
      document.getElementById("categoryErrors").textContent =
        response.data.category;
    }
    if (response.data.publishDate) {
      document.getElementById("publishDateErrors").textContent =
        response.data.publishDate;
    }
    if (response.data.keywords) {
      document.getElementById("keywordsErrors").textContent =
        response.data.keywords;
    }
    if (response.data.featuredImage) {
      document.getElementById("imgErrors").textContent =
        response.data.featuredImage;
    }
    if (response.data.insertArticle) {
      alert(response.data.insertArticle);
    }
  } catch (error) {
    // التعامل مع الأخطاء في الطلب
    console.error("حدث خطأ أثناء إرسال المقالة:", error);
  }
}

function fetchArticles() {
  const articlesGrid = document.getElementById("articlesGrid");

  fetch("https://zaker.click/articles/getPost.php")
    .then((response) => response.json())
    .then((data) => {
      articlesGrid.innerHTML = ""; // تفريغ المحتوى السابق

      data.forEach((article) => {
        const articleDiv = document.createElement("div");
        articleDiv.classList.add("col-md-4", "mb-4");
        articleDiv.innerHTML = `
          <div  class="card">
            <img src="upload/${
              article.FeaturedImage
            }" height="350px" class="card-img-top" alt="صورة المقالة">
            <div class="card-body">
              <h5 class="card-title">${article.Title}</h5>
              <p class="card-text">${article.Excerpt}</p>
              <p class="card-text">ناشر: ${article.publisher_name}</p>
              <p class="card-text">تاريخ النشر: ${article.PublishDate}</p>
              <p class="card-text">تصنيف: ${article.Category}</p>
            </div>
            <div class="btn-group" role="group" aria-label="أزرار الإجراءات">
              <button type="button" class="btn btn-info"    onclick='viewArticle(${JSON.stringify(
                article
              )})'>عرض المقال</button>
              <button type="button" class="btn btn-warning" onclick='editArticle(${JSON.stringify(
                article
              )})'>تعديل المقال</button>
              <button type="button" class="btn btn-danger"  onclick='deleteArticle(${
                article.ArticleId
              })'>حذف المقال</button>
          </div>
          </div>
        `;
        articlesGrid.appendChild(articleDiv);
      });
    })
    .catch((error) => {
      console.error("حدث خطأ أثناء استدعاء المقالات:", error);
    });
}

function viewArticle(article) {
  // const articleJSON = JSON.stringify(article);
  // console.log(article.ArticleId)
  // // تحديد العنوان والمسار لصفحة عرض المقال
  // const articlePageURL = `../articles/showPost.php?article=${encodeURIComponent(articleJSON)}`;
  localStorage.setItem("articleData", JSON.stringify(article));
  // التوجيه إلى صفحة عرض المقال
  window.location.href = "../articles/showPost.php";
}

function editArticle(article) {
  console.log(article);
  localStorage.setItem("articleData", JSON.stringify(article));
  window.location.href = "../articles/editArticle.php";
}

function editPost(event, articleId, userArticleId) {
  event.preventDefault();

  const featuredImage = document.getElementById("featuredImage").files[0];

  if (
    featuredImage &&
    !["image/png", "image/jpeg", "image/jpg"].includes(featuredImage.type)
  ) {
    document.getElementById("imgErrors").textContent =
      "الملف غير مدعوم. يجب أن يكون نوع الملف صورة (png, jpg, jpeg).";
    document.getElementById("featuredImage").value = "";
    return;
  }

  try {
    const formData = new FormData(document.getElementById("MyEditArticle"));
    formData.delete("featuredImage");
    formData.append("userId", UserArticleId);
    formData.append("articleId", articleId);
    formData.append("featuredImage", featuredImage);

    const response = axios.post(
      "https://zaker.click/articles/handlingEditArticle.php",
      formData
    );
    document.getElementById("titleErrors").textContent = "";
    document.getElementById("contentErrors").textContent = "";
    document.getElementById("excerptErrors").textContent = "";
    document.getElementById("categoryErrors").textContent = "";
    document.getElementById("publishDateErrors").textContent = "";
    document.getElementById("keywordsErrors").textContent = "";
    document.getElementById("imgErrors").textContent = "";
    if (response.data.title) {
      document.getElementById("titleErrors").textContent = response.data.title;
    }
    if (response.data.content) {
      document.getElementById("contentErrors").textContent =
        response.data.content;
    }
    if (response.data.excerpt) {
      document.getElementById("excerptErrors").textContent =
        response.data.excerpt;
    }
    if (response.data.category) {
      document.getElementById("categoryErrors").textContent =
        response.data.category;
    }
    if (response.data.publishDate) {
      document.getElementById("publishDateErrors").textContent =
        response.data.publishDate;
    }
    if (response.data.keywords) {
      document.getElementById("keywordsErrors").textContent =
        response.data.keywords;
    }
    if (response.data.featuredImage) {
      document.getElementById("imgErrors").textContent =
        response.data.featuredImage;
    }
    if (response.data.insertArticle) {
      alert(response.data.insertArticle);
    }
  } catch (error) {
    // التعامل مع الأخطاء في الطلب
    console.error("حدث خطأ أثناء إرسال المقالة:", error);
  }
}

function deleteArticle(articleId) {
  // اكتب الكود الخاص بحذف المقال هنا باستخدام articleId كمعرّف للمقال
  console.log(articleId);
  const data = { ArticleId: articleId };
  // console.log(data)
  sendData("https://zaker.click/articles/deletePost.php", data).then(
    (response) => {
      if (response.message) {
        alert(response.message);
        window.location.href = "../articles/showArticles.php";
      }
    }
  );
}

async function addPrayers(event) {
  event.preventDefault();

  try {
    let x = await getUsersDataNumber(); // انتظار حل الوعد
    // الحصول على التاريخ الحالي بالتقويم الهجري
    var currentDate = new Date();
    var year = currentDate.getFullYear();
    var month = currentDate.getMonth() + 1;
    var day = currentDate.getDate();
    var formattedDate = day + "-" + month + "-" + year;
    var apiUrl = "http://api.aladhan.com/v1/gToH/" + formattedDate;

    const response1 = await fetch(apiUrl);
    const data = await response1.json();
    var hijriDate = data.data.hijri.date + "-" + data.data.hijri.month.ar;

    const formData = new FormData(document.getElementById("MyParyersNumber"));
    formData.append("userId", x["UserId"]);
    formData.append("hijriDate", hijriDate);

    const dataForm = {};
    formData.forEach((value, key) => {
      dataForm[key] = value;
    });
    console.log(dataForm.prayerCount);

    const response = await axios.post(
      "https://zaker.click/prayersHandling/prayersCountHandling.php",
      formData
    );
    document.getElementById("prayerCountError").textContent = "";

    if (response.data.prayerCount) {
      document.getElementById("prayerCountError").textContent =
        response.data.prayerCount;
    }

    if (response.data.insertArticle == "تم إضافة عدد صلواتك بنجاح") {
      var table = $("#datatablesSimple").DataTable();
      var currentRow = table.row(table.data().length - 1).data();

      if (currentRow) {
        var previousNumberPrayers = parseInt(currentRow.NumberPrayers);
        var newNumberPrayers =
          parseInt(previousNumberPrayers) + parseInt(dataForm.prayerCount);
        
        currentRow.NumberPrayers = newNumberPrayers;
        table
          .row(table.data().length - 1)
          .data(currentRow)
          .draw();
        alert("تم إضافة عدد صلواتك بنجاح");
      }
    } else if (response.data.insertArticle == "تم إدخال عدد صلواتك بنجاح") {
      var table = $("#datatablesSimple").DataTable();
      var currentRow = table.row(table.data().length - 1).data();
      table.row
        .add({
          ترتيب: table.data().length + 1,
          NumberPrayers: dataForm.prayerCount,
          Date: dataForm.hijriDate,
        })
        .draw();
      alert("تم إدخال عدد صلواتك بنجاح");
    } else {
      alert("لم يتم الإضافة");
    }
  } catch (error) {
    // التعامل مع الأخطاء في الطلب
    console.error("حدث خطأ أثناء إرسال الطلب:", error);
  }
}

let totalPrayers = 0;


async function addPrayersIndex(event) {
  event.preventDefault();

  try {
    let x = await getUsersDataNumber(); // انتظار حل الوعد
    if (x == false) {
      return;
    }
    // الحصول على التاريخ الحالي بالتقويم الهجري
    var currentDate = new Date();
    var year = currentDate.getFullYear();
    var month = currentDate.getMonth() + 1;
    var day = currentDate.getDate();
    var formattedDate = day + "-" + month + "-" + year;
    var apiUrl = "https://api.aladhan.com/v1/gToH/" + formattedDate;

    const response1 = await fetch(apiUrl);
    const data = await response1.json();
    var hijriDate = data.data.hijri.date + "-" + data.data.hijri.month.ar;

    const formData = new FormData(document.getElementById("MyParyersNumber"));
    formData.append("userId", x["UserId"]);
    formData.append("hijriDate", hijriDate);

    
      const lang = localStorage.getItem("lang");

    if (lang === "ar") {
      if (document.getElementById("prayerCount").value > 1000000) {
        document.getElementById("prayerCountError").textContent =
          "لا يمكن إدخال أكثر من مليون صلاة على رسول الله ﷺ في العملية الواحدة";
        document.getElementById("prayerCount").value = "";
        return;
      } else if (document.getElementById("prayerCount").value < 0) {
        document.getElementById("prayerCountError").textContent =
          "لا يمكن إدخال عدد سالب";
        document.getElementById("prayerCount").value = "";
        return;
      }
    } else if (lang === "en") {
      if (document.getElementById("prayerCount").value > 1000000) {
        document.getElementById("prayerCountError").textContent =
          " It is not possible to enter more than one million prayers for the Messenger of Allah in one transaction ";
        document.getElementById("prayerCount").value = "";
        return;
      } else if (document.getElementById("prayerCount").value < 0) {
        document.getElementById("prayerCountError").textContent =
          " You cannot enter a negative number ";
        document.getElementById("prayerCount").value = "";
        return;
      }
    }


    const response = await axios.post(
      "https://zaker.click/prayersHandling/prayersCountHandling.php",
      formData
    );
    document.getElementById("prayerCountError").textContent = "";
    // console.log(totalPrayers);
    if (response.data.prayerCount) {
      document.getElementById("prayerCountError").textContent =
        response.data.prayerCount;
      document.getElementById("prayerCount").value = "";
    }
    let previousPrayersUser = document.getElementById("usersPrayers");
    let prayer = document.getElementById("prayerCount").value;
    let previousPrayers = parseInt(totalPrayers);

    if (response.data.insertPrayer == "تم إضافة عدد صلواتك بنجاح") {  
      totalPrayers = previousPrayers + parseInt(prayer);
      document.getElementById("AllPrayers").textContent = totalPrayers;
      
      if(lang === "ar"){
        previousPrayersUser.textContent =
        parseInt(previousPrayersUser.textContent) + parseInt(prayer) + " صلواتك على رسول الله ﷺ ";
        alert(" تم إضافة عدد صلواتك بنجاح");
     
      }else if(lang === "en"){
        previousPrayersUser.textContent =
        parseInt(previousPrayersUser.textContent) + parseInt(prayer) + " Your prayers on the prophet of Allah ";
        alert(" Your prayer count has been entered successfully " );
     
      }else {
          previousPrayersUser.textContent =
            parseInt(previousPrayersUser.textContent) +
            parseInt(prayer) +
            " صلواتك على رسول الله ﷺ ";
          alert(" تم إضافة عدد صلواتك بنجاح");
        }
      
      
      document.getElementById("prayerCount").value = "";
    } else if (response.data.insertPrayer == "تم إدخال عدد صلواتك بنجاح") {
      
      if (isNaN(previousPrayers)){
        totalPrayers = parseInt(prayer)  ;
        document.getElementById("AllPrayers").textContent = totalPrayers;
      }else{
        totalPrayers = parseInt(prayer) + previousPrayers ;
        document.getElementById("AllPrayers").textContent = totalPrayers;
      }

      if (previousPrayersUser.textContent.trim() === ""){
        if(lang === "ar"){
          previousPrayersUser.textContent = parseInt(prayer)  + " صلواتك على رسول الله ﷺ " ;
          alert(" تم إضافة عدد صلواتك بنجاح");
       
        }else if(lang === "en"){
          previousPrayersUser.textContent = parseInt(prayer)  +  " Your prayers on the prophet of Allah ";
          alert(" Your prayer count has been entered successfully " );
       
        }
        
        document.getElementById("prayerCount").value = "";
      }
      else{

        if(lang === "ar"){
          previousPrayersUser.textContent =
          parseInt(previousPrayersUser.textContent) + parseInt(prayer) + " صلواتك على رسول الله ﷺ ";
          alert(" تم إضافة عدد صلواتك بنجاح");
       
        }else if(lang === "en"){
          previousPrayersUser.textContent =
          parseInt(previousPrayersUser.textContent) + parseInt(prayer) + " Your prayers on the prophet of Allah ";
          alert(" Your prayer count has been entered successfully " );
       
        }       
        document.getElementById("prayerCount").value = "";
      }
      
    } else if(response.data.insertPrayer == "خطأ في عدد الصلوات"){
      document.getElementById("prayerCountError").textContent = "لا يمكن إدخال أكثر من ميلون صلاة على رسول الله ﷺ في العملية الواحدة"
      document.getElementById("prayerCount").value = "";
     }else {
      alert("لم يتم الإضافة");
      document.getElementById("prayerCount").value = "";
    }
  } catch (error) {
    // التعامل مع الأخطاء في الطلب
    console.error("حدث خطأ أثناء إرسال الطلب:", error);
  }
}


// async function getPrayersAll() {
//   try {
    // const response = await axios.get(
    //   "https://zaker.click/prayersHandling/getPrayersAll.php"
    // );
//     console.log(response.data[0]["TotalPrayers"]);

//     document.getElementById("AllPrayers").innerHTML =
//       response.data[0]["TotalPrayers"] + "صلاة";

//     // return  JSON.stringify(response.data);
//   } catch (error) {
//     console.error("حدث خطأ أثناء إرسال الطلب:", error);
//   }
// }
async function getPrayersAll() {
  try {
    const response = await axios.get(
      "https://zaker.click/prayersHandling/getPrayersAll.php"
    );
    totalPrayers = response.data[0]["TotalPrayers"];
    
    
   
    // Update the element with the prayers count
    document.getElementById("AllPrayers").textContent = totalPrayers;

    // Initialize the odometer
    const odometerElement = document.getElementById("AllPrayers");
    const odometerOptions = {
      format: "d",
      duration: 3500, // Animation duration in milliseconds
    };
    const odometer = new Odometer(odometerElement, odometerOptions);
    odometer.render();

    // Animate the odometer to the target value
    document.querySelector(".odometer-inside").style.direction = "ltr";
    odometer.update(totalPrayers);

  } catch (error) {
    console.error("حدث خطأ أثناء إرسال الطلب:", error);
  }
}

// Call the function to retrieve and animate the prayers count
// getPrayersAll();


async function getPrayersUsers() {
  try {

    let x = await getUsersNumber(); // انتظار حل الوعد
    if (x == false) {
      return;
    }
    const formData = new FormData();
    formData.append("userId", x["UserId"]);
    // const data = {
    //   userId: x["UserId"]
    // };
    const response = await axios.post(
      "https://zaker.click/prayersHandling/getPrayersUsers.php", formData
    );
    console.log(response);
    // console.log(response.data[0]["TotalPrayers"]);
    const lang = localStorage.getItem("lang");
    if (response.data[0]["TotalPrayers"]) {
    
    if(lang === "ar"){

      document.getElementById("usersPrayers").textContent =   response.data[0]["TotalPrayers"] + "  صلواتك على رسول الله ﷺ ";
    }
    else if(lang==="en"){
      document.getElementById("usersPrayers").textContent =   response.data[0]["TotalPrayers"] + " Your prayers on the prophet of Allah ";

    }else {
        document.getElementById("usersPrayers").textContent =
          response.data[0]["TotalPrayers"] + "  صلواتك على رسول الله ﷺ ";
      } 
  }

    // return  JSON.stringify(response.data);
  } catch (error) {
    console.error("حدث خطأ أثناء إرسال الطلب:", error);
  }
}



function getTotalUsers() {
  fetch("https://zaker.click/auth/getAllUserTotal.php")
    .then((response) => response.json())
    .then((data) => {
      document.getElementById("totalUser").textContent = data.totalSubscribers + ": عدد المشاركين ";     
    });
}


function getTotalArticles() {
  fetch("https://zaker.click/articles/getAllArticleTotal.php")
    .then((response) => response.json())
    .then((data) => {
      document.getElementById("totalArticle").textContent = data.totalArticles + ": عدد المقالات ";     
    });
}