<?php
include "../auth/functionRegisteration.php" ;


// if  ( 
//     isset($_SESSION['Email']) && isset($_SESSION['typeUsers']) &&
//     !empty($_SESSION['Email']) && !empty($_SESSION['typeUsers']) &&
//     ( $_SESSION['typeUsers'] === 'admin' ||  $_SESSION['typeUsers'] === 'user' )
// ){
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $postData = $_POST;
        // var_dump($postData);
        $requiredFields = [
            'prayerCount' => 'عدد الصلوات',
            'userId' => 'رقم المستخدم',
            'hijriDate' => 'التاريخ',
            'idCampaign' => 'رقم الحملة'
        ];
        if (
                isValidData($requiredFields,$postData,$response)
            ) {
                $postData['idCampaign']      = (int)$postData['idCampaign'];
                $postData['userId']      = (int)$postData['userId'];
                $postData['prayerCount'] = (int)$postData['prayerCount'];
                if ($postData['prayerCount'] <= 1000000) {
                    // $currentDate = date("Y-m-d");
                    $postData['hijriDate'] = trim($postData['hijriDate']);
                    $sql = "SELECT NumberPrayers FROM SchedulePrayers WHERE Date = '$postData[hijriDate]' AND UserIdP= '$postData[userId]' AND campaign_id = '$postData[idCampaign]'";             
                    if ( mysqli_num_rows(mysqli_query($connection,$sql))==1){                        
                        $sql = "UPDATE SchedulePrayers SET NumberPrayers = (NumberPrayers + '$postData[prayerCount]') WHERE  Date = '$postData[hijriDate]' AND UserIdP = '$postData[userId]' AND campaign_id = '$postData[idCampaign]'";
                        if (mysqli_query($connection,$sql)) {
                            $response["insertPrayer"] = "تم إضافة عدد صلواتك بنجاح";
                            }else {
                            $response["insertPrayer"] = " فشل إدخال عدد صلواتك  ";
                            }
                    }else{
                        $sql = "INSERT INTO SchedulePrayers (NumberPrayers,Date,UserIdP,campaign_id)
                        VALUES ('$postData[prayerCount]', '$postData[hijriDate]' ,'$postData[userId]' , '$postData[idCampaign]')";
                        if (mysqli_query($connection,$sql)) {
                        $response["insertPrayer"] = "تم إدخال عدد صلواتك بنجاح";
                        }else {
                        $response["insertPrayer"] = " فشل إدخال عدد صلواتك  ";
                        }
                    }
                }else {
                        $response["insertPrayer"] = "خطأ في عدد الصلوات";
                    }

        }else{
            $response["insertPrayer"] = " فشل إدخال عدد صلواتك  ";
        }
    }
    echo json_encode($response);

// }