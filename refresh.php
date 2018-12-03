<?php

include('config.php');

if (!$con) {

    die('Connection Failed'.mysqli_connect_error());

}
        $sql = "SELECT * FROM post";

        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc(($result))){
                echo '<div class="chat" style="display:flex; flex-flow: row wrap; align-items: flex-start;">';
                
                echo '<p class="chat-message" style="width:70%; padding: 15px; margin: 5px 15px 0; background: #1ddced; border-radius: 10px; color:#fff; font-size: 18px; "> '.$row['username'].''.'::'.$row['message'].'</p>';
                echo '</div>';
                echo "<br>";
            }
        }


?>