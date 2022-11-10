<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/login.css" rel="stylesheet" />
    <title>Login</title>

</head>
<body>


<!------------------- ------------------- ------------------- ------------------- -->


<form class="login-form" action="" method="POST">
  <p class="login-text">
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-lock fa-stack-1x"></i>
    </span>
  </p>
  <input type="text" class="login-username" autofocus="true" required="true" name= "usuario" placeholder="Usuario" />
  <input type="password" class="login-password" required="true" name= "clave" placeholder="Clave" />
  <input type="submit" name="Login" value="Login" class="login-submit" />
</form>
<a href="#" class="login-forgot-pass">forgot password?</a>
<div class="underlay-photo"></div>
<div class="underlay-black"></div> 


  
</form>


</body>
</html>