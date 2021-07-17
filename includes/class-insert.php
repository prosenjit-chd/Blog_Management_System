<?php
    require_once('class-db.php');
    require_once('server.php');

    if(!class_exists('INSERT')){
        class INSERT{
            public function post($postdata){
                global $db;

                date_default_timezone_set('Asia/Dhaka');

                $username = $_SESSION['username'];
                $date=date('F-j, Y');
                $query = "
                            INSERT INTO posts(post_title, post_content, post_date, post_username)
                            VALUES ('$postdata[post_title]', '$postdata[post_content]','$date', '$username')
                        ";

                return $db->insert($query);
            }
        }
    }
    $insert = new INSERT;
?>