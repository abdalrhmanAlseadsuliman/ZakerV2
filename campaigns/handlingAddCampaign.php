<?php
include "../db/dbConn.php";

function validateRequiredFields($fields, &$errors)
{
    foreach ($fields as $field => $label) {
        if (empty($_POST[$field])) {
            $errors[$field] = 'الرجاء إدخال ' . $label;
        }
    }
}

// تحقق صحة رابط يوتيوب
function validateYouTubeUrl($url, $field, &$errors)
{
    $pattern = '/^(https?:\/\/)?(www\.)?(youtube\.com|youtu\.be)\/.+/';
    if (!preg_match($pattern, $url)) {
        $errors[$field] = 'الرجاء إدخال رابط فيديو صحيح من يوتيوب';
    }
}

// تحقق صحة الحقل titleEnglish بأنه باللغة الإنجليزية
// function validateEnglishTitle($title, $field, &$errors)
// {
//     if (!preg_match('/^\b[a-zA-Z]+\b$/', $title)) {
//         $errors[$field] = 'الرجاء إدخال عنوان باللغة الإنجليزية فقط ومن كلمة واحدة ايضا';
//     }
// }

// تحقق صحة حقول embedLink
function validateEmbedLink($embedLink, $field, &$errors)
{
    $pattern = '/^<iframe[^>]*src="https:\/\/www\.youtube\.com\/embed\/[a-zA-Z0-9_-]+"[^>]*><\/iframe>/';
    if (!preg_match($pattern, $embedLink)) {
        $errors[$field] = 'الرجاء إدخال كود تضمين صحيح لـ ' . $field;
    }
}

// تحقق صحة روابط الفيديو باستخدام فلتر FILTER_VALIDATE_URL
function validateVideoLink($link, $field, &$errors)
{
    if (!filter_var($link, FILTER_VALIDATE_URL)) {
        $errors[$field] = 'الرجاء إدخال رابط فيديو صحيح لـ ' . $field;
    }
}

// تحقق نجاح تحميل الملفات
function validateFileUploads($fileFields, &$errors, &$imageNameAll)
{
    foreach ($fileFields as $field) {
        if (!isset($_FILES[$field]) || $_FILES[$field]['error'] !== UPLOAD_ERR_OK) {
            $errors[$field] = 'الرجاء تحميل الصورة';
        } else {
            $fileType = $_FILES[$field]['type'];
            $allowedTypes = ['image/jpeg', 'image/png']; // أنواع الملفات المسموح بها (مثال: JPEG و PNG)

            if (!in_array($fileType, $allowedTypes)) {
                $errors[$field] = 'الملف يجب أن يكون صورة من نوع JPEG أو PNG';
            } else {

                $uploadFolder = 'upload/';
                $imageTmpName = $_FILES[$field]['tmp_name']; // اسم الملف المؤقت
                $imageName = $_FILES[$field]['name']; // اسم الملف الأصلي
                $result = move_uploaded_file($imageTmpName, $uploadFolder . $imageName);
                if ($result) {
                    $imageNameAll[$field] =  $imageName;
                }
            }
        }
    }
}

// تحقق من التابع بالغة العربية
function is_arabic_title($title_arabic, &$errors)
{
    // استخدام تعبير منتظم للتحقق من أن العنوان يحتوي على حروف عربية فقط
    $pattern = '/^[\p{Arabic}\s]+$/u';
    if (!preg_match($pattern, $title_arabic)) {
        $errors['titleArabic'] = "العنوان يجب أن يحتوي على حروف عربية فقط";
    }
}


// تحقق من ان عنوان الحملة غير مخزن مسبقا
function check_title_arabic_exists($title_arabic, $connection, &$errors)
{
    // $query = "SELECT COUNT(*)  FROM campaigns WHERE titleArabic = '$title_arabic'";
    $query = "SELECT   *  FROM campaigns WHERE titleArabic = '$title_arabic'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    // $count = $row['COUNT(*)'];
    if ($row > 0) {
        $errors['titleArabic'] = "الحملة موجودة مسبقا";
    }
}


// تخزين البيانات
function InsertData($connection, $data, $imageNameAll)
{
    $imageNamesJson = json_encode($imageNameAll);

    if ($data['statusCampaign'] == 0) {
        $data['status'] = 'الحملة غير مفعلة';
    } elseif ($data['statusCampaign'] == 1) {

        $data['status'] = 'الحملة مفعلة';
    }

    $query = " INSERT INTO campaigns (  titleArabic, subtitleCounter, mainTitle, mainParag, title2, title3, nawaya, title4, titleVideo1, titleVideo2, titleVideo3, embedLink1, embedLink2, embedLink3, linkVideo1, linkVideo2, linkVideo3, endTitle, dateCampaign, status, status_value, image_names)
    VALUES ('$data[titleArabic]', '$data[subtitleCounter]', '$data[mainTitle]', '$data[mainParag]', '$data[title2]', '$data[title3]', '$data[nawaya]', '$data[title4]', '$data[titleVideo1]', '$data[titleVideo2]', '$data[titleVideo3]', '$data[embedLink1]', '$data[embedLink2]', '$data[embedLink3]', '$data[linkVideo1]', '$data[linkVideo2]', '$data[linkVideo3]', '$data[endTitle]', '$data[dateCampaign]', '$data[status]', $data[statusCampaign],'$imageNamesJson')";



    $result = mysqli_query($connection, $query);

    $response = array();
    if ($result) {
        $response['responseCampaign'] = 'تم إنشاء الحملة بنجاح';
    } else {
        $response['responseCampaign'] = 'فشل إنشاء الحملة';
    }

    return $response;
}


// [titleEnglish, titleArabic, subtitleCounter ,mainTitle, mainParag, 1 mainImg ,title2 , 2 img2 , title3. nawaya, 3 img3, title4 ,titleVideo1 , titleVideo2, titleVideo3, embedLink1, embedLink2, embedLink3, linkVideo1, linkVideo2,linkVideo3 ,endTitle ,dateCampaign]


$errors = array();
$imageNameAll = array();

$fields = array(
    // 'titleEnglish'     => 'عنوان الحملة باللغة الإنجليزية',
    'titleArabic'      => 'عنوان الحملة باللغة العربية',
    'subtitleCounter'  => 'العنوان الفرعي للعداد',
    'mainTitle'        => 'العنوان الرئيسي',
    'mainParag'        => 'الفقرة الرئيسية',
    'title2'           => 'العنوان الرئيسي الثاني',
    'title3'           => 'العنوان الرئيسي الثالث',
    'nawaya'           => 'النوايا',
    'title4'           => 'العنوان الرئيسي الرابع',
    'titleVideo1'      => ' عنوان الفيديو الأول',
    'titleVideo2'      => ' عنوان الفيديو الثاني',
    'titleVideo3'      => ' عنوان الفيديو الثالث',
    'embedLink1'       => 'تضمين الفيديو الأول',
    'embedLink2'       => 'تضمين الفيديو الثاني',
    'embedLink3'       => 'تضمين الفيديو الثالث',
    'linkVideo1'       => 'رابط الفيديو الأول',
    'linkVideo2'       => 'رابط الفيديو الثاني',
    'linkVideo3'       => 'رابط الفيديو الثالث',
    'endTitle'         => 'العنوان الأخير',
    'dateCampaign'     => 'تاريخ الحملة',
    'statusCampaign'   => 'حالة الحملة',
);

// التحقق من عدم فراغ الحقول
validateRequiredFields($fields, $errors);


// التحقق من ان العنوان باللغة العربية 
is_arabic_title($_POST['titleArabic'], $errors);

// التحقق من ان الحملة غير موجودة مسبقا
if (empty($errors['titleArabic'])) {

    check_title_arabic_exists($_POST['titleArabic'], $connection, $errors);
}
// التحقق من صحة رابط الفيديو
validateYouTubeUrl($_POST['linkVideo1'], 'linkVideo1', $errors);
validateYouTubeUrl($_POST['linkVideo2'], 'linkVideo2', $errors);
validateYouTubeUrl($_POST['linkVideo3'], 'linkVideo3', $errors);

// التحقق من صحة الحقل titleEnglish
// validateEnglishTitle($_POST['titleEnglish'], 'titleEnglish', $errors);

// التحقق من صحة الحقول المرتبطة بـ embedLink
validateEmbedLink($_POST['embedLink1'], 'embedLink1', $errors);
validateEmbedLink($_POST['embedLink2'], 'embedLink2', $errors);
validateEmbedLink($_POST['embedLink3'], 'embedLink3', $errors);

// التحقق من صحة روابط الفيديو باستخدام فلتر FILTER_VALIDATE_URL
validateVideoLink($_POST['linkVideo1'], 'linkVideo1', $errors);
validateVideoLink($_POST['linkVideo2'], 'linkVideo2', $errors);
validateVideoLink($_POST['linkVideo3'], 'linkVideo3', $errors);

// التحقق من نجاح تحميل الملفات
validateFileUploads(['mainImg', 'img2', 'img3'], $errors, $imageNameAll);

// إذا لم يكن هناك أخطاء، قم بإنشاء الجدول والتخزين
if (empty($errors)) {
    // createTableAndStoreData($connection,$_POST) ;
    echo json_encode(InsertData($connection, $_POST, $imageNameAll));
} else {
    // إرجاع المصفوفة $errors كإجابة
    echo json_encode($errors);
}
