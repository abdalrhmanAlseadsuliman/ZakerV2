<?php
session_start();
include "../db/dbConn.php";
$response = [];
if  ( 
        isset($_SESSION['Email']) && isset($_SESSION['typeUsers']) &&
        !empty($_SESSION['Email']) && !empty($_SESSION['typeUsers']) &&
        $_SESSION['typeUsers'] === 'admin'
    )
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $json = file_get_contents('php://input');
            $data = json_decode($json, true);
            $postData = $data;
            if ( isset($postData["IdCampaign"]) && !empty($postData["IdCampaign"])){
               
                $sql = "DELETE FROM SchedulePrayers WHERE campaign_id = '$postData[IdCampaign]'";
                $result = mysqli_query($connection,$sql) ;
                if ($result) {
                    $response["message"] = "تمت التهيئة";
                }
                else{
                    $response["message"] = " خطأ اثناء التهيئة ";
                }
            } else {
                $response["message"] = " خطأ في ارسال بيانات التهيئة ";
            }         
        }
    }else {
        $response["message"] = " خطأ في ارسال بيانات التهيئة ";
    }

    echo json_encode($response);
