<?php
session_start ();
$_SESSION['link'] = substr(str_shuffle("BCDEFxruGHgMNO0123456789aelzodAkPpRSTUW"), 0, 4);
;
$page_link= $_SESSION['link'];
$message = $_SESSION['message']= $_POST['message'];
$name=$_SESSION['name'] = $_POST['name'];

$myfile = fopen("Message/$page_link.php", "w") or die("Unable to open file!");
$txt = "<!DOCTYPE html>
<html >
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='author' content='henrydev.org'/>
    <meta name='description' content='View Once Messages'/>
    <meta name='keywords' content='social media, annonymous, Online, Messages, henry dev'/>
    <meta name='copyright' content=''>
    <link rel='stylesheet' href='../css/main.css'>
    <link rel='shortcut icon' href='img/favico.png'>

    <title>Vanish Text | Message</title>
       <!-- Google tag (gtag.js) -->
    <script async src='https://www.googletagmanager.com/gtag/js?id=G-E8CK034656'></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-E8CK034656');
    </script>

</head>
<body>
  <div class='container'>
      <div class='main'>
          <center>
              <h1 style='clear: both;'> View Message</h1>
              <p class='success' style='font-size: 15px;'>Please Note that Message can only be viewed once</p>
              <br>
          </center>
          <div class='message' >
              <p class='pp'>New Message from $name</p>
              <p>$message</p>
            <div class='msglogo'>
                <span>Vanishtext.me</span>
                <div style='border-bottom: #51eb32 3px solid;margin-top: 10px;width:100px;margin-left: auto;margin-right: auto;'></div>
            </div>
          </div>
          <br>
          <center><a href='../createmessage'>
                              <div type='submit' class='button'>Create A VT Message</div>
                          </a>
                          <br>
          </center>
      </div>
  </div>
  <?php
  unlink('$page_link.php');
  ?>
</body>
</html>

";


fwrite($myfile, $txt);
fclose($myfile);

if (fwrite==0){
    header('location:messages');
}
else{
 echo'failed';   
}
?>