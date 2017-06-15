
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>
<meta name="generator" content="WYSIWYG Web Builder 12 - http://www.wysiwygwebbuilder.com">
<link href="CP_Home.css" rel="stylesheet">
<link href="Login.css" rel="stylesheet">
</head>
<body>
<div id="PageHeader1" style="position:absolute;text-align:left;left:0px;top:0px;width:100%;height:167px;z-index:8;">
<div id="NavigationBar2" style="position:absolute;left:834px;top:0px;width:416px;height:30px;z-index:0;">
<ul class="navbar">
<li><a href="./Login.html"><img alt="" src="images/img0006_over.png" class="hover"><span><img alt="" src="images/img0006.png"></span></a></li>
</ul>
</div>
<div id="wb_Image1" style="position:absolute;left:14px;top:0px;width:220px;height:167px;z-index:1;">
<img src="images/asd.PNG" id="Image1" alt=""></div>
<div id="wb_Text2" style="position:absolute;left:947px;top:44px;width:389px;height:16px;z-index:2;">
<span style="background-color:#FFFFFF;color:#000000;font-family:Arial;font-size:13px;">Not Signed Up? <u><a href="./Signup.html">Sign Up here</a></u></span></div>
</div>
<div id="NavigationBar1" style="position:absolute;left:1009px;top:2px;width:416px;height:30px;z-index:4;">
<ul class="navbar">
<li><a href=""><img alt="" src="images/img0004_over.png" class="hover"><span><img alt="" src="images/img0004.png"></span></a></li>
</ul>
</div>
<div id="wb_Text1" style="position:absolute;left:1030px;top:60px;width:389px;height:16px;z-index:5;">
<span style="background-color:#FFFFFF;color:#000000;font-family:Arial;font-size:13px;">Not Signed Up?<a href="./Signup.html"> <u>Sign Up here</a></u></span></div>
<div id="wb_Login1" style="position:absolute;left:288px;top:320px;width:681px;height:428px;z-index:6;">
<form name="loginform" method="post" accept-charset="UTF-8" action="<?php echo basename(__FILE__); ?>" id="loginform">
<input type="hidden" name="form_name" value="loginform">
<table id="Login1">
<tr>
   <td class="header">Log In</td>
</tr>
<tr>
   <td class="label"><label for="username">User Name</label></td>
</tr>
<tr>
   <td class="row"><input class="input" name="username" type="text" id="username" value="<?php echo $username; ?>"></td>
</tr>
<tr>
   <td class="label"><label for="password">Password</label></td>
</tr>
<tr>
   <td class="row"><input class="input" name="password" type="password" id="password" value="<?php echo $password; ?>"></td>
</tr>
<tr>
   <td class="row"><input id="rememberme" type="checkbox" name="rememberme"><label for="rememberme">Remember me</label></td>
</tr>
<tr>
   <td style="text-align:center;vertical-align:bottom"><input class="button" type="submit" name="login" value="Log In" id="login"></td>
</tr>
</table>
</form>
</div>
<div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:left;left:0px;top:2243px;width:100%;height:2px;z-index:7;">
</div>
</body>
</html>



<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_name']) && $_POST['form_name'] == 'loginform')
{
   $success_page = '';
   $error_page = basename(__FILE__);
   $database = './usersdb.php';
   $crypt_pass = md5($_POST['password']);
   $found = false;
   $fullname = '';
   $session_timeout = 600;
   if(filesize($database) > 0)
   {
      $items = file($database, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
      foreach($items as $line)
      {
         list($username, $password, $email, $name, $active) = explode('|', trim($line));
         if ($username == $_POST['username'] && $active != "0" && $password == $crypt_pass)
         {
            $found = true;
            $fullname = $name;
         }
      }
   }
   if($found == false)
   {
      header('Location: '.$error_page);
      exit;
   }
   else
   {
      if (session_id() == "")
      {
         session_start();
      }
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['fullname'] = $fullname;
      $_SESSION['expires_by'] = time() + $session_timeout;
      $_SESSION['expires_timeout'] = $session_timeout;
      $rememberme = isset($_POST['rememberme']) ? true : false;
      if ($rememberme)
      {
         setcookie('username', $_POST['username'], time() + 3600*24*30);
         setcookie('password', $_POST['password'], time() + 3600*24*30);
      }
      header('Location: '.$success_page);
      exit;
   }
}
$username = isset($_COOKIE['username']) ? $_COOKIE['username'] : '';
$password = isset($_COOKIE['password']) ? $_COOKIE['password'] : '';
?>
