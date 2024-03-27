// الاتصال بقاعدة البيانات
$servername = "اسم_خادم_قاعدة_البيانات";
$username = "اسم_مستخدم_قاعدة_البيانات";
$password = "كلمة_مرور_قاعدة_البيانات";
$dbname = "اسم_قاعدة_البيانات";

$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من نجاح الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// استعلام لاسترداد أسماء الصور من قاعدة البيانات
$sql = "SELECT image_names FROM table_name WHERE id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $imageNamesJson = $row['image_names'];

    // تحويل السلسلة النصية إلى مصفوفة
    $imageNamesArray = json_decode($imageNamesJson, true);

    // عرض أسماء الصور في صفحة الويب
    foreach ($imageNamesArray as $fieldName => $imageName) {
        echo "اسم الحقل: " . $fieldName . ", اسم الصورة: " . $imageName . "<br>";
        // يمكنك استخدام علامة الصورة لعرض الصورة في صفحة الويب
        echo "<img src='upload/" . $imageName . "' alt='صورة'><br><br>";
    }
} else {
    echo "لا توجد صور لعرضها.";
}

// إغلاق اتصال قاعدة البيانات
$conn->close();