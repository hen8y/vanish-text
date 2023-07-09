<?php
session_start ();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="henrydev.org"/>
    <meta name="description" content="View Once Messages"/>
    <meta name="keywords" content="social media, annonymous, Online, Messages, henry dev"/>
    <meta name='copyright' content=''>
    <link rel="stylesheet" href="css/main.css">
    <title>Vanish Text | Messages</title>
    <link rel="shortcut icon" href="img/favico.png">

   <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-E8CK034656"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-E8CK034656');
    </script>
    
    
    <script>
        
        function copyDivToClipboard() {
            var range = document.createRange();
            range.selectNode(document.getElementById("a"));
            window.getSelection().removeAllRanges(); 
            window.getSelection().addRange(range); 
            document.execCommand("copy");
            window.getSelection().removeAllRanges();
            alert("Link Copied");
        }
    </script>
</head>
<body>
    <div class="container">


        <div class="main">
            </p>
            <div class="logo">
            <center>
                <h3> Your Message has been posted</h3>
                <p class="success">Please Note that Message can only be viewed once</p>
                <br>
                <a href="createmessage">
                    <div type="submit" class="button">Create New Message</div>
                </a>
                <h4>Your Link:</h4>
            </center>
            </div>
            <div class="link">
                 <span id="a" >
                    <?php 
            
                    $host='https://' .$_SERVER['SERVER_NAME'];
                    $extra=$_SESSION['link'];
                    
                    echo $host .'/Message/' .$extra;
                    ?>
                </span>
                <span class="copy" onclick="copyDivToClipboard()">
                    click to copy
                </span>
             </div>
             
             <br><br>
           <div>

            <br>
            <div class="messages">
                <h3>Message:</h3>
                <p>
                    <?php echo $_SESSION['message']; ?>
                </p>
            </div>
            <br>

           


           </div>
        </div>



    </div>
</body>
</html>
