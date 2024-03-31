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
    } else if (response.data.responseCampaign == "فشل إنشاء الحملة") {
      alert("فشل إنشاء الحملة يرجى إعادة المحاولة");
      window.location.href = "../campaigns/addCampaign.php";
    } else {
      errors = [
        "titleArabic",
        "subtitleCounter",
        "mainTitle",
        "mainParag",
        "mainImg",
        "title2",
        "img2",
        "title3",
        "nawaya",
        "img3",
        "title4",
        "titleVideo1",
        "titleVideo2",
        "titleVideo3",
        "embedLink1",
        "embedLink2",
        "embedLink3",
        "linkVideo1",
        "linkVideo2",
        "linkVideo3",
        "endTitle",
        "dateCampaign",
        "statusCampaign",
      ];

      showError = [
        "titleArabicErrors",
        "subtitleCounterErrors",
        "mainTitleErrors",
        "mainParagErrors",
        "mainImgErrors",
        "title2Errors",
        "img2Errors",
        "title3Errors",
        "nawayaErrors",
        "img3Errors",
        "title4Errors",
        "titleVideo1Errors",
        "titleVideo2Errors",
        "titleVideo3Errors",
        "embedLink1Errors",
        "embedLink2Errors",
        "embedLink3Errors",
        "linkVideo1Errors",
        "linkVideo2Errors",
        "linkVideo3Errors",
        "endTitleErrors",
        "dateCampaignErrors",
        "statusCampaignErrors",
      ];

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

function fetchCampaigns() {
  const campaignsGrid = document.getElementById("campaignsGrid");

  fetch("http://localhost/zaker/campaigns/getCampagins.php")
    .then((response) => response.json())
    .then((data) => {
      campaignsGrid.innerHTML = ""; // تفريغ المحتوى السابق

      data.forEach((campaign) => {
        const campaignDiv = document.createElement("div");
        campaignDiv.classList.add("col-md-4", "mb-4");
        campaignDiv.innerHTML = `
            <div  class="card">
              <img src="upload/${campaign.mainImg
          }" height="350px" width="350px" class="card-img-top" alt="صورة الحملة">
              <div class="card-body">
                <h5 class="card-title">${campaign.titleArabic}</h5>
                <p class="card-text">${campaign.mainTitle}</p>
                
              </div>
              <div class="btn-group" role="group" aria-label="أزرار الإجراءات">
                <button type="button" class="btn btn-info"    onclick='viewCampaign(${JSON.stringify(
            campaign
          )})'>عرض الحملة</button>
                <button type="button" class="btn btn-warning" onclick='editCampagin(${JSON.stringify(
            campaign
          )})'>تعديل الحملة</button>
                <button type="button" class="btn btn-danger"  onclick='deleteCampaign(${JSON.stringify(
            campaign
          )})'>حذف الحملة</button>
                <button type="button" class="btn btn-warning"  onclick='resetCampaign(${JSON.stringify(
                  campaign
                )})'>تهيئة الحملة</button>
            </div>
            </div>
          `;
        campaignsGrid.appendChild(campaignDiv);
      });
    })
    .catch((error) => {
      console.error("حدث خطأ أثناء استدعاء المقالات:", error);
    });
}

function viewCampaign(campaign) {
  localStorage.setItem("campaignData", JSON.stringify(campaign));
  // التوجيه إلى صفحة عرض المقال
  window.location.href = "../campaigns/showCampaign.php";
}

function editCampagin(campaign) {
  console.log(campaign);
  localStorage.setItem("campaignData", JSON.stringify(campaign));
  window.location.href = "../campaigns/editCampagin.php";
}


async function updateCampaign(event) {
  event.preventDefault();


  try {
    const formData = new FormData(document.getElementById("MyEditCampaign"));

    const response = await axios.post(
      "http://localhost/zaker/campaigns/handlingEditCampaign.php",
      formData
    );
    console.log(response);
    if (response.data.responseCampaign == "تم تعديل الحملة بنجاح") {
      alert("تم تعديل الحملة بنجاح");
      window.location.href = "../campaigns/showCampaigns.php";
    } else if (response.data.responseCampaign == "فشل تعديل الحملة") {
      alert("فشل تعديل الحملة يرجى إعادة المحاولة");
      window.location.href = "../campaigns/addCampaign.php";
    } else {

      errors = ["titleArabic", "subtitleCounter", "mainTitle", "mainParag", "mainImg", "title2", "img2", "title3", "nawaya", "img3", "title4", "titleVideo1", "titleVideo2", "titleVideo3", "embedLink1", "embedLink2", "embedLink3", "linkVideo1", "linkVideo2", "linkVideo3", "endTitle", "dateCampaign", "statusCampaign",
      ];

      showError = ["titleArabicErrors", "subtitleCounterErrors", "mainTitleErrors", "mainParagErrors", "mainImgErrors", "title2Errors", "img2Errors", "title3Errors", "nawayaErrors", "img3Errors", "title4Errors", "titleVideo1Errors", "titleVideo2Errors", "titleVideo3Errors", "embedLink1Errors", "embedLink2Errors", "embedLink3Errors", "linkVideo1Errors", "linkVideo2Errors", "linkVideo3Errors", "endTitleErrors", "dateCampaignErrors", "statusCampaignErrors",
      ];

      for (let i = 0; i < errors.length; i++) {
        const errorShow = document.getElementById(showError[i]);
        if (errorShow) {
          errorShow.textContent = response.data[errors[i]];
        }
      }
    }


  } catch (error) {
    // التعامل مع الأخطاء في الطلب
    console.error("حدث خطأ أثناء إرسال الحملة:", error);
  }
}



// function deleteCampaign(idCampaign) {
//   // اكتب الكود الخاص بحذف المقال هنا باستخدام articleId كمعرّف للمقال
//   console.log(idCampaign);
//   const data = { IdCampaign: idCampaign };
//   // console.log(data)
//   sendData("http://localhost/zaker/campaigns/deleteCampaign.php", data).then(
//     (response) => {
//       if (response.message) {
//         alert(response.message);
//         window.location.href = "../campaigns/showCampaigns.php";
//       }
//     }
//   );
// }

function deleteCampaign(campaign) {
  console.log(campaign)
  var confirmation = confirm(" هل أنت متأكد من رغبتك في حذف الحملة " + campaign.titleArabic + " ؟");

  if (confirmation) {

    const data = { IdCampaign: campaign.id };

    sendData("http://localhost/zaker/campaigns/deleteCampaign.php", data).then(
      (response) => {
        if (response.message) {
          alert(response.message);
          window.location.href = "../campaigns/showCampaigns.php";
        }
      }
    );
  }
}

function resetCampaign(campaign) {
  console.log(campaign)
  var confirmation = confirm(" هل أنت متأكد من رغبتك في تهيئة الحملة " + campaign.titleArabic + " ؟");

  if (confirmation) {

    const data = { IdCampaign: campaign.id };

    sendData("http://localhost/zaker/campaigns/resetCampaign.php", data).then(
      (response) => {
        if (response.message) {
          alert(response.message);
          window.location.href = "../campaigns/showCampaigns.php";
        }
      }
    );
  }
}

