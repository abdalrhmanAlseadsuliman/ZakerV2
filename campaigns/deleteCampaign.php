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
                $sql = "DELETE FROM campaigns WHERE id = '$postData[IdCampaign]'";
                $result = mysqli_query($connection,$sql) ;
                if ($result) {
                    $response["message"] = "تم الحذف بنجاح";
                }
                else{
                    $response["message"] = " خطأ اثناء الحذف ";
                }
            } else {
                $response["message"] = " خطأ في ارسال بيانات الحذف ";
            }         
        }
    }else {
        $response["message"] = " خطأ في ارسال بيانات الحذف ";
    }

    echo json_encode($response);
