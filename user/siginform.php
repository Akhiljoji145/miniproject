<html>
    <head>
        <style>
            
            .submit
            {
                height:25px;
                width: 245px;
                background-color: black;
                color:azure;
            }
            h1
            {
                text-align: center;
            }
            .border
            {
                border:1px solid black;
            }
            .height
            {
                height:550px;   
            }
            .width
            {
                width:1330px;
            }
            .padding
            {
                padding-left: 550px;
                padding-top:150px;
            }
            .bg
            {
                background-image: url("../images/parking.jpg");
                background-size: 100% 100%;
            }
            label{
                color:white;
            }
        </style>
    </head>
    <body>
        <div class="border width">
            <h1>User Login</h1>
        </div>
        <div class="border height width bg">
        <br>
        <div class="padding">
        <form method="POST" action="../php/userlogin.php">
        <label>username:</label><input type="email" autocomplete="off" name="email"><br><br>
        <label>password:</label><input type="password" autocomplete="off" name="pass"><br><br>
        <input class="submit" type="submit" name="submit">
        </form>
        </div>
        </div>
        
    </body>
</html>