 <?php

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
    @$name=$_POST['name'];
    @$uname=$_POST['uname'];
    @$pw=$_POST['pw'];
    @$email=$_POST['email'];
    @$num=$_POST['num'];
    $ins="INSERT INTO Info VALUES ('$name', '$uname', '$pw','$email','$num')";
    $res=mysqli_query($con,$ins);
    if($res==TRUE) 
    {
      header("location:Glow_Log-in.php");
    } 
    else 
    {
      echo "New record created successfully";
    }
    mysqli_close($con);
}

?>
<html lang="en">
<head>
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
        color: white;
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
    <form class="box" method="POST">
            <h1>Sign Up</h1>
			Name:<input type="text" placeholder="Name" class="usid " name="name"><br>
			Username:<input type="text" placeholder="Username" class="usid" name="uname"><br>
			Password:<input type="password" placeholder="Password" class="usid" name="pw"><br>
			E-mail:<input type="E-mail" placeholder="E-mail" class="usid" name="email" ><br>
			Mob:<input type="tel" placeholder="Mobile-Number" class="usid" name="num"><br>
			  
			
            <font color=white>Gender: </font><font color=gray>Male</font><input type="radio" name="a" class="gender"><font color=gray>Female</font><input type="radio" name="a" class="gender"><br><br>
            Upload-File:<font color=gray><input type="file">
			
			
        </form>
        <input type="submit" name="submit" value="Sign Up" class="btn"><br>
    </div>
    </body>
</html>



		<?php

// $isNumError = false;
// $isPassError = false;
// $isNameError = false;
// $isUsernameError = false;
// $isEmailError = false;
//  function validateForm() 
// {
//     $isValidForm = false;
    
//     $name = $_POST['name']; 
//     $uname = $_POST['uname'];
//     $email = $_POST['email'];
//     $pw = $_POST['pw'];
//     $num = $_POST['num'];

//      if(!preg_match("/^[0-9]{10}+$/",$num) || strlen($num) <= 0)
//      {
//          $isNumError = true;
        
//      }
//      if(strlen($name) <= 0) {
//         $isNameError = true;
//     }

//     if(strlen($uname) <= 0) {
//         $isUsernameError = true;
//     }
//     if(strlen($email) <= 0) {
//         $isEmailError = true;
//     }
//     return $isValidForm;
// }

        
?>

 