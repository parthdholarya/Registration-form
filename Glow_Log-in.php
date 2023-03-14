<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $con=mysqli_connect("localhost","root","","module");
    if(mysqli_connect_errno())
    {
        echo "<br>";
        echo " Failed  Connected "; 
    }
    else
    {
        echo "Successfully  Connected ";
        echo "<br>";
    }
    if (isset($_POST["submit"]))
    {
        $uname=$_POST['uname'];
        $pw=$_POST['pw']; 
        $sql = "SELECT * FROM  Info WHERE uname='$uname' && pw='$pw' ";
        $result = mysqli_query($con, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1)
        {
            $login = true;
            
            $_SESSION['loggedin'] = true;
            $_SESSION['uname'] = $uname;
            header("Location:h.php");
            exit();
        } 
        else
        {
            echo "Invalid user";
        }
    }
        
} 
  session_unset();    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="" rel="stylesheet">
</head>
<style type="text/css">
tr,td{
    border: 0;
    
}
td{
    margin: 20px;
}
body{
    
        background-color: steelblue;
        color: #fff;
        font-family:Comic sans;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        
        margin: 0;
        font-size: 20px;
      
}
.container{
    background-color:  rgba(0, 0, 0, 0.4);
    color:white;
    padding: 40px 40px;
    border-radius: 20px;
     font-size: 20px;
    
}
input{
    background-color: transparent;
    border: 0;
    border-bottom: 2px #fff solid;
    font-size: 20px;
    color: #fff;
}
.btn{
    background: lightblue;
    border: 0;
    cursor: pointer;
    border-radius: 4px;
    width: 20%;
    height: 40px;
    margin: 30px;
    
    
    
}
img{
    margin-top: 20px;
}
a{
    color: white;
}
</style>
<body>
    <div class="container" align="center">
    <form class="box" method="post" action="Glow_Log-in.php">
            <h1>
login</h1>
            username:<input type="text" placeholder="username" class="usid" name="uname"><br>
            password:<input type="password" placeholder="password" class="usid" name="pw"><br>
            <input type="submit" value="login" class="btn" name="submit">
    </form>

</div>
</body>
</html>