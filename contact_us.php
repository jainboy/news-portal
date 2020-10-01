<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style1.css">
</head>
<body>
    <?php
    include 'navbar.php';
    ?>
<div class="box">
    <div class="images">
        <img src="./images/gymbanner.jpg"  width="95%" height="40%" alt="Contact" class="img">
    </div>
    <div class="detail">
        <h1>Connect with us: </h1>
        <h3>For support or any questions:<br/>
            Email us at <a href="#">support@newsera.com</a> </h3>
        <h1>Place Of Business: </h1>
        <h3>XYZ Complex,<br/>
            Nehru Place <b>New Delhi, 200001</b> </h3>
        <h1>News Partner: </h1>
        <h3><B>TV18,<br/>
            AAJTAK<BR/>
            ZEENEWS<BR/>
            BUSINESS NEWS<BR/>
            BBC NEWS<B><BR/>
        </h3>
    </div>
    <div class="getintouch">
        <h1>Get In Touch</h1>
        <h2>Please fill out the quick form and we will be in touch with lightning speed.</h2>
        <div class="container1">
            <form action="action_page.php">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                <label for="lname">E-mail</label>
                <input type="email" pattern=".+@globex.com" id="email" name="email" placeholder="Your Mail Id...">

                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>
  
</body>
</html>