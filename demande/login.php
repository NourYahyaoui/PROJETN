<form action="" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
     <div class="login-box">
  <h2>connectez-vous !</h2>
    </tr>
	<form>
	
    <tr>
	<div class="user-box">
      <td >Username</td>
      <td><input name="Username" type="text" class="Input" required=""></td>
    </div>
	</tr>
	
    <tr>
	<div class="user-box">
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input" required=""></td>
	  </div>
    </tr>
	
	
    <tr>
      <td> </td>
      <td><input name="CONNEXION" type="submit" value="CONNEXION" class="Button3"></td>
    </tr>
	
	<a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      CONNEXION
    </a>
	
	
	</form>
  </table>
  </div>
</form>




<?php session_start(); /* Starts the session */
        
        /* Check Login form submitted */        
        if(isset($_POST['CONNEXION'])){
                /* Define username and associated password array */
                $logins = array('Nour' => '123456','username1' => 'password1','username2' => 'password2');
                
                /* Check and assign submitted Username and Password to new variable */
                $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
                $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
                
                /* Check Username and Password existence in defined array */            
                if (isset($logins[$Username]) && $logins[$Username] == $Password){
                        /* Success: Set session variables and redirect to Protected page  */
                        $_SESSION['UserData']['Username']=$logins[$Username];
                        header("location:index.php");
                        exit;
                } else {
                        /*Unsuccessful attempt: Set error message */
                        $msg="<span style='color:red'>Invalid Login Details</span>";
                }
        }
?>



<html>
<head>
<title>login</title>
<link rel="stylesheet" href="css/loginStyle.php">
</head>

<body>
<br>
<img src=".\img\photo.png" alt="">



<div class="login-box">
  <h2>connectez-vous !</h2>
   <form>
    <div class="user-box">
      <input type="text" name="" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="" required="">
      <label>Password</label>
    </div>
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      CONNEXION
    </a>
  </form>
</div>
</body>
</html>