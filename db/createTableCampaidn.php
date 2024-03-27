<?php
include "dbConn.php";
function createTableAndStoreData($connection, $data)
{
    
    $query = "
      CREATE TABLE IF NOT EXISTS campaigns (
      id INT AUTO_INCREMENT PRIMARY KEY,
      titleEnglish VARCHAR(255) NOT NULL,
      titleArabic VARCHAR(255) NOT NULL,
      subtitleCounter VARCHAR(255) NOT NULL,
      mainTitle VARCHAR(500) NOT NULL,
      mainParag TEXT NOT NULL,
      title2 VARCHAR(500) NOT NULL,
      title3 VARCHAR(500) NOT NULL,
      nawaya VARCHAR(5000) NOT NULL,
      title4 VARCHAR(500) NOT NULL,
      titleVideo1 VARCHAR(500) NOT NULL,
      titleVideo2 VARCHAR(500) NOT NULL,
      titleVideo3 VARCHAR(500) NOT NULL,
      embedLink1 VARCHAR(1000) NOT NULL,
      embedLink2 VARCHAR(1000) NOT NULL,
      embedLink3 VARCHAR(1000) NOT NULL,
      linkVideo1 VARCHAR(1000) NOT NULL,
      linkVideo2 VARCHAR(1000) NOT NULL,
      linkVideo3 VARCHAR(1000) NOT NULL,
      endTitle VARCHAR(500) NOT NULL,
      dateCampaign VARCHAR(500) NOT NULL,
      status VARCHAR(20) NOT NULL,
      status_value INT NOT NULL,
      image_names VARCHAR(500),CREATE TABLE IF NOT EXISTS campaigns (
      id INT AUTO_INCREMENT PRIMARY KEY,
      titleEnglish VARCHAR(255) NOT NULL,
      titleArabic VARCHAR(255) NOT NULL,
      subtitleCounter VARCHAR(255) NOT NULL,
      mainTitle VARCHAR(500) NOT NULL,
      mainParag TEXT NOT NULL,
      title2 VARCHAR(500) NOT NULL,
      title3 VARCHAR(500) NOT NULL,
      nawaya VARCHAR(5000) NOT NULL,
      title4 VARCHAR(500) NOT NULL,
      titleVideo1 VARCHAR(500) NOT NULL,
      titleVideo2 VARCHAR(500) NOT NULL,
      titleVideo3 VARCHAR(500) NOT NULL,
      embedLink1 VARCHAR(1000) NOT NULL,
      embedLink2 VARCHAR(1000) NOT NULL,
      embedLink3 VARCHAR(1000) NOT NULL,
      linkVideo1 VARCHAR(1000) NOT NULL,
      linkVideo2 VARCHAR(1000) NOT NULL,
      linkVideo3 VARCHAR(1000) NOT NULL,
      endTitle VARCHAR(500) NOT NULL,
      dateCampaign VARCHAR(500) NOT NULL,
      status VARCHAR(20) NOT NULL,
      status_value INT NOT NULL,
      image_names VARCHAR(500),);
    )";
      
    $result = mysqli_query($connection, $query);

    $response = array();
    if ($result) {
        $response['status'] = 'تم إنشاء الجدول بنجاح';
    } else {
        $response['status'] = 'لم يتم إنشاء الجدول';
    }

    return $response;
}