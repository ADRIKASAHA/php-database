<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
.error {color: red;}
.success {color: green;}
</style>
    <title>Signin</title>
</head>
<body>


   <?php

$error = $success =  "";
$username = $password = $name="";

session_start();

if (isset($_POST['submit']))
{
    if (empty($_POST["username"]) && empty($_POST["password"])) 
    {
        $error = "Both username and password required";
    } 
    else 
    {
        session_start();

$con = mysql_connect('localhost','root','Adrika18373591SAHA');
mysql_select_db($con,'wtm');

$name=$_POST['username'];
$password = $_POST['password'];
$s ="select * from usertable where name ='$name' &&  password ='$password'";
$result =mysql_query($con, $s);

$num= mysql_num_rows($result);
if($num == 1){
    header('location:welcome.php');
}
else{
   header('location: login.php');
}

    
    }

   
}
?>
  
       

    <fieldset>
    <legend><h2>Log-in</h2></legend>
    <form method="post" >
        <br>
        User Name: <input type="text" name="username" value="">

        <br><br>
        Password:<input type="password" name="password" value="">
            <br><br>
             <button type="submit"name="submit" value="">SIGN-UP</button></div>
              
     

    </fieldset>
    </form>



   

</body>
</html>