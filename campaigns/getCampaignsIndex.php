<?php 

session_start();
include "../db/dbConn.php";
if  ( 
        isset($_SESSION['Email']) && isset($_SESSION['typeUsers']) &&
        !empty($_SESSION['Email']) && !empty($_SESSION['typeUsers']) &&
        $_SESSION['typeUsers'] === 'admin'
    )
    {
        $sql = "SELECT * FROM campaigns WHERE status_value = 2";

        $result = mysqli_query($connection,$sql) ;
        if ($result) {
            $campaigns = array();
        
            while ($row = mysqli_fetch_assoc($result)) {
                $data = json_decode($row['image_names'], true);
                $row['mainImg'] = $data['mainImg'];
                $row['img2'] = $data['img2'];
                $row['img3'] = $data['img3'];
                unset($row['image_names']);
                $campaigns[] = $row;
            }
            
            echo json_encode($campaigns);
        } else {
            echo json_encode(array('error' => 'خطا في تنفيذ الاستعلام'));
        }

    } else{
        echo json_encode(array('error' => 'ليس لديك صلاحيات في الوصول'));
    } 

