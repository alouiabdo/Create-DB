<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect Database</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Connnect DataBase</h1>
    <form action="" method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" >
    <input type="text" name="text" id="">
    <input type="submit" name="sub" id="he" value="Connect">
    </form>
    <?php 
    @$value = $_POST["text"];
    if(isset($_POST["sub"])){
        $servername="localhost";
        $username= "root";
        $password= "";
        try{
            $conn = new PDO("mysql:host=$servername", $username, $password);
            $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
            $sql = "CREATE DATABASE $value";
            $conn -> exec($sql);

            echo"<h4 class='text'>Database created successfully</h4>";
        }catch(PDOException $e){
            echo"<p>created by abdelkader aloui</p>";
        }
}
?>
<!-- <h4 class='text'>Database created successfully</h4> -->
</body>
</html>