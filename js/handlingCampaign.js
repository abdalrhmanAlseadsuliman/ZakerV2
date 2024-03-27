// [titleEnglishErrors, titleArabicErrors, subtitleCounterErrors ,mainTitleErrors, mainParagErrors, mainImgErrors ,title2Errors , img2Errors , title3Errors. nawayaErrors, img3Errors, title4Errors ,titleVideo1Errors , titleVideo2Errors, titleVideo3Errors, embedLink1Errors, embedLink2Errors, embedLink3Errors, linkVideo1Errors, linkVideo2Errors,linkVideo3Errors ,endTitleErrors ,dateTitleErrors]
// alert('ewreg4');


async function addCampaign(event) {
  event.preventDefault();
  
   
  
    try {
      const formData = new FormData(document.getElementById("MyAddCampaigns"));
      
      const response = await axios.post(
        "http://localhost/zaker/campaigns/handlingAddCampaign.php",
        formData
      );
      
      if (response.data.responseCampaign == "تم إنشاء الحملة بنجاح") {
        alert("تم إنشاء الحملة بنجاح");
        window.location.href = "../campaigns/showCampaign.php";
      }else if (response.data.responseCampaign == "فشل إنشاء الحملة") {
        alert("فشل إنشاء الحملة يرجى إعادة المحاولة");
        window.location.href = "../campaigns/addCampaign.php";
      } else {
        
      

      errors = ['titleEnglish', 'titleArabic', 'subtitleCounter' ,'mainTitle', 'mainParag', 'mainImg' ,'title2' , 'img2' , 'title3', 'nawaya', 'img3', 'title4' ,'titleVideo1' , 'titleVideo2', 'titleVideo3', 'embedLink1', 'embedLink2', 'embedLink3', 'linkVideo1', 'linkVideo2','linkVideo3' ,'endTitle' ,'dateCampaign', 'statusCampaign']


      showError = ['titleEnglishErrors', 'titleArabicErrors', 'subtitleCounterErrors' ,'mainTitleErrors', 'mainParagErrors', 'mainImgErrors' ,'title2Errors' , 'img2Errors' , 'title3Errors', 'nawayaErrors', 'img3Errors', 'title4Errors' ,'titleVideo1Errors' , 'titleVideo2Errors', 'titleVideo3Errors', 'embedLink1Errors', 'embedLink2Errors', 'embedLink3Errors', 'linkVideo1Errors', 'linkVideo2Errors','linkVideo3Errors' ,'endTitleErrors' ,'dateCampaignErrors','statusCampaignErrors']

      for (let i = 0; i < errors.length; i++) {
        const errorShow = document.getElementById(showError[i]);
        if (errorShow) {
          errorShow.textContent = response.data[errors[i]];
        }
      }
     
    }


    } catch (error) {
      // التعامل مع الأخطاء في الطلب
      console.error("حدث خطأ أثناء إرسال المقالة:", error);
    }
  }
  
  // function fetchArticles() {
  //   const articlesGrid = document.getElementById("articlesGrid");
  
  //   fetch("http://localhost/zaker/articles/getPost.php")
  //     .then((response) => response.json())
  //     .then((data) => {
  //       articlesGrid.innerHTML = ""; // تفريغ المحتوى السابق
  
  //       data.forEach((article) => {
  //         const articleDiv = document.createElement("div");
  //         articleDiv.classList.add("col-md-4", "mb-4");
  //         articleDiv.innerHTML = `
  //           <div  class="card">
  //             <img src="upload/${
  //               article.FeaturedImage
  //             }" height="350px" class="card-img-top" alt="صورة المقالة">
  //             <div class="card-body">
  //               <h5 class="card-title">${article.Title}</h5>
  //               <p class="card-text">${article.Excerpt}</p>
  //               <p class="card-text">ناشر: ${article.publisher_name}</p>
  //               <p class="card-text">تاريخ النشر: ${article.PublishDate}</p>
  //               <p class="card-text">تصنيف: ${article.Category}</p>
  //             </div>
  //             <div class="btn-group" role="group" aria-label="أزرار الإجراءات">
  //               <button type="button" class="btn btn-info"    onclick='viewArticle(${JSON.stringify(
  //                 article
  //               )})'>عرض المقال</button>
  //               <button type="button" class="btn btn-warning" onclick='editArticle(${JSON.stringify(
  //                 article
  //               )})'>تعديل المقال</button>
  //               <button type="button" class="btn btn-danger"  onclick='deleteArticle(${
  //                 article.ArticleId
  //               })'>حذف المقال</button>
  //           </div>
  //           </div>
  //         `;
  //         articlesGrid.appendChild(articleDiv);
  //       });
  //     })
  //     .catch((error) => {
  //       console.error("حدث خطأ أثناء استدعاء المقالات:", error);
  //     });
  // }
  
  // function viewArticle(article) {
  //   // const articleJSON = JSON.stringify(article);
  //   // console.log(article.ArticleId)
  //   // // تحديد العنوان والمسار لصفحة عرض المقال
  //   // const articlePageURL = `../articles/showPost.php?article=${encodeURIComponent(articleJSON)}`;
  //   localStorage.setItem("articleData", JSON.stringify(article));
  //   // التوجيه إلى صفحة عرض المقال
  //   window.location.href = "../articles/showPost.php";
  // }
  
  // function editArticle(article) {
  //   console.log(article);
  //   localStorage.setItem("articleData", JSON.stringify(article));
  //   window.location.href = "../articles/editArticle.php";
  // }
  
  // function editPost(event, articleId, userArticleId) {
  //   event.preventDefault();
  
  //   const featuredImage = document.getElementById("featuredImage").files[0];
  
  //   if (
  //     featuredImage &&
  //     !["image/png", "image/jpeg", "image/jpg"].includes(featuredImage.type)
  //   ) {
  //     document.getElementById("imgErrors").textContent =
  //       "الملف غير مدعوم. يجب أن يكون نوع الملف صورة (png, jpg, jpeg).";
  //     document.getElementById("featuredImage").value = "";
  //     return;
  //   }
  
  //   try {
  //     const formData = new FormData(document.getElementById("MyEditArticle"));
  //     formData.delete("featuredImage");
  //     formData.append("userId", UserArticleId);
  //     formData.append("articleId", articleId);
  //     formData.append("featuredImage", featuredImage);
  
  //     const response = axios.post(
  //       "http://localhost/zaker/articles/handlingEditArticle.php",
  //       formData
  //     );
  //     document.getElementById("titleErrors").textContent = "";
  //     document.getElementById("contentErrors").textContent = "";
  //     document.getElementById("excerptErrors").textContent = "";
  //     document.getElementById("categoryErrors").textContent = "";
  //     document.getElementById("publishDateErrors").textContent = "";
  //     document.getElementById("keywordsErrors").textContent = "";
  //     document.getElementById("imgErrors").textContent = "";
  //     if (response.data.title) {
  //       document.getElementById("titleErrors").textContent = response.data.title;
  //     }
  //     if (response.data.content) {
  //       document.getElementById("contentErrors").textContent =
  //         response.data.content;
  //     }
  //     if (response.data.excerpt) {
  //       document.getElementById("excerptErrors").textContent =
  //         response.data.excerpt;
  //     }
  //     if (response.data.category) {
  //       document.getElementById("categoryErrors").textContent =
  //         response.data.category;
  //     }
  //     if (response.data.publishDate) {
  //       document.getElementById("publishDateErrors").textContent =
  //         response.data.publishDate;
  //     }
  //     if (response.data.keywords) {
  //       document.getElementById("keywordsErrors").textContent =
  //         response.data.keywords;
  //     }
  //     if (response.data.featuredImage) {
  //       document.getElementById("imgErrors").textContent =
  //         response.data.featuredImage;
  //     }
  //     if (response.data.insertArticle) {
  //       alert(response.data.insertArticle);
  //     }
  //   } catch (error) {
  //     // التعامل مع الأخطاء في الطلب
  //     console.error("حدث خطأ أثناء إرسال المقالة:", error);
  //   }
  // }
  
  // function deleteArticle(articleId) {
  //   // اكتب الكود الخاص بحذف المقال هنا باستخدام articleId كمعرّف للمقال
  //   console.log(articleId);
  //   const data = { ArticleId: articleId };
  //   // console.log(data)
  //   sendData("http://localhost/zaker/articles/deletePost.php", data).then(
  //     (response) => {
  //       if (response.message) {
  //         alert(response.message);
  //         window.location.href = "../articles/showArticles.php";
  //       }
  //     }
  //   );
  // }
  