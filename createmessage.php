<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="henrydev.org"/>
    <meta name="description" content="View Once Messages"/>
    <meta name="keywords" content="social media, annonymous, Online, Messages, henry dev"/>
    <meta name='copyright' content=''>
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="img/favico.png">

    <title>Vanish Text | Create A Message</title>
       <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-E8CK034656"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-E8CK034656');
    </script>
    
    

</head>
<body>
    <div class="container">


        <div class="main">
            <div class="logo">
            <center>
                <h3>Type Your Message</h2>
                <p style="color: #7d828f;font-size: 12px;">Once you hit Post a link to the message would be shown to you. <br>Note that you can only view the message just Once</p>
            
            </center>
            </div>
            <br><br><br>
            <form action="create.php" method="post">
                <label>Your Name:</label><br>
                <input  name="name"  type="text"placeholder="Name" autocomplete="off">
                    <br>
                <label>Message:</label>
                <textarea  name="message"  type="text"placeholder="Write Your Message" ></textarea><br>
                <button type="submit">Post Message</button>

            </form>
        </div>



    </div>
</body>
</html>