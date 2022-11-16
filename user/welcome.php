<?php
session_start();
if( isset($_SESSION['user_id']) && isset($_SESSION['email'])){
    
    echo"<html>
        <head>
            <style>
                </style>
                </head>
                <body>
                <div>
                   <h2><?php echo $_SESSION['user_id']?></h2>
                </div>

                </body>
    </html>";

?>       