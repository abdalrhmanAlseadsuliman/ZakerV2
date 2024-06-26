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
  const apiUrl = "http://localhost/zaker/auth/verify.php";

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

  sendData("http://localhost/zaker/auth/handlingRegister.php", data)
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

  sendData("http://localhost/zaker/auth/handlingLogin.php", data)
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
  sendData("http://localhost/zaker/auth/forgotPassword.php", data)
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

  sendData("http://localhost/zaker/auth/forgotPassword.php", data)
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
  return fetch("http://localhost/zaker/auth/getUserNumber.php")
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
  return fetch("http://localhost/zaker/auth/getUserNumber.php")
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

  // const featuredImage = document.getElementById("featuredImage").files[0];

  // if (
  //   featuredImage &&
  //   !["image/png", "image/jpeg", "image/jpg"].includes(featuredImage.type)
  // ) {
  //   document.getElementById("imgErrors").textContent =
  //     "الملف غير مدعوم. يجب أن يكون نوع الملف صورة (png, jpg, jpeg).";
  //   document.getElementById("featuredImage").value = "";
  //   return;
  // }

  try {
    let x = await getUsersDataNumber(); // انتظار حل الوعد
    const formData = new FormData(document.getElementById("MyAddArticle"));
    // formData.delete("featuredImage");
    formData.append("userId", x["UserId"]);
    // formData.append("featuredImage", featuredImage);

    const response = await axios.post(
      "http://localhost/zaker/articles/handlingAddArticle.php",
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

  fetch("http://localhost/zaker/articles/getPost.php")
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

async function editPost(event, articleId, userArticleId) {
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

    const response = await axios.post(
      "http://localhost/zaker/articles/handlingEditArticle.php",
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
  sendData("http://localhost/zaker/articles/deletePost.php", data).then(
    (response) => {
      if (response.message) {
        alert(response.message);
        window.location.href = "../articles/showArticles.php";
      }
    }
  );
}

// async function addPrayers(event) {
//   event.preventDefault();

//   try {
//     let x = await getUsersDataNumber(); // انتظار حل الوعد
//     // الحصول على التاريخ الحالي بالتقويم الهجري
//     var currentDate = new Date();
//     var year = currentDate.getFullYear();
//     var month = currentDate.getMonth() + 1;
//     var day = currentDate.getDate();
//     var formattedDate = day + "-" + month + "-" + year;
//     var apiUrl = "http://api.aladhan.com/v1/gToH/" + formattedDate;

//     const response1 = await fetch(apiUrl);
//     const data = await response1.json();
//     var hijriDate = data.data.hijri.date + "-" + data.data.hijri.month.ar;

//     const formData = new FormData(document.getElementById("MyParyersNumber"));
//     formData.append("userId", x["UserId"]);
//     formData.append("hijriDate", hijriDate);

//     const dataForm = {};
//     formData.forEach((value, key) => {
//       dataForm[key] = value;
//     });
//     console.log(dataForm.prayerCount);

//     const response = await axios.post(
//       "http://localhost/zaker/prayersHandling/prayersCountHandling.php",
//       formData
//     );
//     document.getElementById("prayerCountError").textContent = "";

//     if (response.data.prayerCount) {
//       document.getElementById("prayerCountError").textContent =
//         response.data.prayerCount;
//     }

//     if (response.data.insertArticle == "تم إضافة عدد صلواتك بنجاح") {
//       var table = $("#datatablesSimple").DataTable();
//       var currentRow = table.row(table.data().length - 1).data();

//       if (currentRow) {
//         var previousNumberPrayers = parseInt(currentRow.NumberPrayers);
//         var newNumberPrayers =
//           parseInt(previousNumberPrayers) + parseInt(dataForm.prayerCount);
        
//         currentRow.NumberPrayers = newNumberPrayers;
//         table
//           .row(table.data().length - 1)
//           .data(currentRow)
//           .draw();
//         alert("تم إضافة عدد صلواتك بنجاح");
//       }
//     } else if (response.data.insertArticle == "تم إدخال عدد صلواتك بنجاح") {
//       var table = $("#datatablesSimple").DataTable();
//       var currentRow = table.row(table.data().length - 1).data();
//       table.row
//         .add({
//           ترتيب: table.data().length + 1,
//           NumberPrayers: dataForm.prayerCount,
//           Date: dataForm.hijriDate,
//         })
//         .draw();
//       alert("تم إدخال عدد صلواتك بنجاح");
//     } else {
//       alert("لم يتم الإضافة");
//     }
//   } catch (error) {
//     // التعامل مع الأخطاء في الطلب
//     console.error("حدث خطأ أثناء إرسال الطلب:", error);
//   }
// }

let totalPrayers = 0;


// إضافة الاذكار من الصفحة الرئسية 

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

     if (lang === "en") {
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
    } else {
      if (document.getElementById("prayerCount").value > 1000000) {
        document.getElementById("prayerCountError").textContent =
          "لا يمكن إدخال أكثر من مليون في العملية الواحدة";
        document.getElementById("prayerCount").value = "";
        return;
      } else if (document.getElementById("prayerCount").value < 0) {
        document.getElementById("prayerCountError").textContent =
          "لا يمكن إدخال عدد سالب";
        document.getElementById("prayerCount").value = "";
        return;
      }
    }


    const response = await axios.post(
      "http://localhost/zaker/prayersHandling/prayersCountHandling.php",
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
        parseInt(previousPrayersUser.textContent) + parseInt(prayer) + " عدد الصلوات التي قمت بإدخالها حتى الآن ";
        alert(" تم إضافة عدد الصلوات بنجاح");
     
      }else if(lang === "en"){
        previousPrayersUser.textContent =
        parseInt(previousPrayersUser.textContent) + parseInt(prayer) + " Your prayers on the prophet of Allah ";
        alert(" Your prayer count has been entered successfully " );
     
      }else {
          previousPrayersUser.textContent =
            parseInt(previousPrayersUser.textContent) +
            parseInt(prayer) +
            " عدد الصلوات التي قمت بإدخالها حتى الآن ";
          alert(" تم إضافة عدد الصلوات بنجاح");
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
          previousPrayersUser.textContent = parseInt(prayer)  + " عدد الصوات التي قمت بإدخالها حتى الآن "   ;
          alert(" تم إضافة عدد الصلوات بنجاح");
       
        }else if(lang === "en"){
          previousPrayersUser.textContent = parseInt(prayer)  +  " Your prayers on the prophet of Allah ";
          alert(" Your prayer count has been entered successfully " );
       
        }
        
        document.getElementById("prayerCount").value = "";
      }
      else{

        if(lang === "ar"){
          previousPrayersUser.textContent =
          parseInt(previousPrayersUser.textContent) + parseInt(prayer) + " عدد الصلوات التي قمت بإدخالها حتى الآن "
          alert(" تم إضافة عدد الصلوات بنجاح");
       
        }else if(lang === "en"){
          previousPrayersUser.textContent =
          parseInt(previousPrayersUser.textContent) + parseInt(prayer) + " Your prayers on the prophet of Allah ";
          alert(" Your prayer count has been entered successfully " );
       
        } else{
            previousPrayersUser.textContent =
          parseInt(previousPrayersUser.textContent) + parseInt(prayer) + " عدد الصلوات التي قمت بإدخالها حتى الآن "
          alert(" تم إضافة عدد الصوات بنجاح");
       
        }
        document.getElementById("prayerCount").value = "";
      }
      
    } else if(response.data.insertPrayer == "خطأ في عدد الصلوات"){
      document.getElementById("prayerCountError").textContent = "لا يمكن إدخال أكثر من ميلون الصلوات في العملية الواحدة"
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
    //   "http://localhost/zaker/prayersHandling/getPrayersAll.php"
    // );
//     console.log(response.data[0]["TotalPrayers"]);

//     document.getElementById("AllPrayers").innerHTML =
//       response.data[0]["TotalPrayers"] + "صلاة";

//     // return  JSON.stringify(response.data);
//   } catch (error) {
//     console.error("حدث خطأ أثناء إرسال الطلب:", error);
//   }
// }
async function getPrayersAll(idCampaign) {
  try { 

    const formData = new FormData();
    formData.append("idCampaign", idCampaign );

    const response = await axios.post(
      "http://localhost/zaker/prayersHandling/getPrayersAll.php",formData
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


//  معرفة عدد اذكار المستخدم
async function getPrayersUsers(idCampaign) {
  try {

    let x = await getUsersNumber(); // انتظار حل الوعد
    if (x == false) {
      return;
    }



    const formData = new FormData();
    formData.append("userId", x["UserId"]);
    formData.append("idCampaign", idCampaign );
    
    const response = await axios.post(
      "http://localhost/zaker/prayersHandling/getPrayersUsers.php", formData
    );
    
    const lang = localStorage.getItem("lang");
   if (response.data[0]["TotalPrayers"]) {
    
    if(lang === "ar"){

      document.getElementById("usersPrayers").textContent =   response.data[0]["TotalPrayers"]
       + " عدد الصلوات التي قمت بإدخالها حتى الآن "
      ;
    }
    else if(lang==="en"){
      document.getElementById("usersPrayers").textContent =   response.data[0]["TotalPrayers"] + " Your prayers on the prophet of Allah ";

    }else {
        document.getElementById("usersPrayers").textContent =
          response.data[0]["TotalPrayers"]  
          + " عدد الصلوات التي قمت بإدخالها حتى الآن ";
          
      } 
  }

    // return  JSON.stringify(response.data);
  } catch (error) {
    console.error("حدث خطأ أثناء إرسال الطلب:", error);
  }
}



function getTotalUsers() {
  fetch("http://localhost/zaker/auth/getAllUserTotal.php")
    .then((response) => response.json())
    .then((data) => {
      document.getElementById("totalUser").textContent = data.totalSubscribers + ": عدد المشاركين ";     
    });
}


function getTotalArticles() {
  fetch("http://localhost/zaker/articles/getAllArticleTotal.php")
    .then((response) => response.json())
    .then((data) => {
      document.getElementById("totalArticle").textContent = data.totalArticles + ": عدد المقالات ";     
    });
}



// جلب معلومات الحملات

function fetchCampaignsIndex() {

  fetch("http://localhost/zaker/campaigns/getCampaignsIndex.php")
    .then((response) => response.json())
    .then((data) => {
      console.log(data);
    })
    .catch((error) => {
      console.error("حدث خطأ أثناء استدعاء المقالات:", error);
    });
}