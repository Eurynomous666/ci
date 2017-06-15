
<!doctype html>

<html>
<head>
<meta charset="utf-8">
<title>Welcome to Online Music Library</title>
<script>
$(document).ready(function()
{
   $("#SlideShow1").slideshow(
   {
      interval: 3000,
      type: 'sequence',
      effect: 'none',
      direction: '',
      pagination: false,
      effectlength: 2000
   });
});
</script>

<!-- Links -->

	<link rel="stylesheet" type ="text/css" href="<?php echo base_url();?>../Assets/CSS/Home.css">
	<script type='text/javascript' src="<?php echo base_url();?>../Assets/JS/wb.slideshow.min.js.js"></script>
	<script type='text/javascript' src="<?php echo base_url();?>../Assets/JS/jquery-ul.min.js"></script>
	<script type='text/javascript' src="<?php echo base_url();?>../Assets/JS/jquery-1.12.4.min.min.js"></script>

</head>
<body>
<div id="PageHeader1" style="position:absolute;text-align:left;left:0px;top:0px;width:100%;height:167px;z-index:8;">

<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:220px;height:167px;z-index:0;">

<img src="../Assets/images/asd.PNG" id="Image1" alt=""></div>

<div id="wb_Text2" style="position:absolute;left:926px;top:54px;width:389px;height:16px;z-index:1;">

<span style="background-color:#FFFFFF;color:#000000;font-family:Arial;font-size:13px;">Not Signed Up? <u><a href="<?php echo site_url('Signup.php')?>" Sign Up here</a></u></span></div>

<div id="NavigationBar2" style="position:absolute;left:885px;top:10px;width:416px;height:30px;z-index:2;">

<ul class="navbar">

<li><a href="<?php echo site_url('Login.php')?>"> <img alt="" src="../Assets/images/img0001_over.png" class="hover"><span><img alt="" src="../Assets/images/img0001.png"></span></a></li>

</ul>

</div>

</div>

<div id="wb_TextArt1" style="position:absolute;left:334px;top:641px;width:660px;height:229px;z-index:4;">

<img src="../Assets/images/img0002.png" id="TextArt1" alt="Welcome to online Online Music Library" title="Welcome to online Online Music Library" style="width:660px;height:229px;"></div>

<div id="wb_TextArt2" style="position:absolute;left:334px;top:387px;width:660px;height:229px;z-index:5;">
<img src="../Assets/images/img0003.png" id="TextArt2" alt="Welcome to online Online Music Library" title="Welcome to online Online Music Library" style="width:660px;height:229px;"></div>

<div id="SlideShow1" style="position:absolute;left:236px;top:930px;width:816px;height:493px;z-index:6;">
<img class="image" src="../Assets/images/MANAGE-THE-MADNESS.jpg" alt="" title="">

<img class="image" src="../Assets/images/Save-Time-and-Money.jpg" style="display:none;" alt="" title="">

<img class="image" src="../Assets/images/How-to-upload-music-to-Facebook-page-image3.jpg" style="display:none;" alt="" title="">

<img class="image" src="../Assets/D38lNlFr.jpeg" style="display:none;" alt="" title="">

</div>

<div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:left;left:0px;top:2243px;width:100%;height:2px;z-index:7;">

</div>
</body>
</html>