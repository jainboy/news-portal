<html>
<head>
<title>www.newsportal.com</title>
    <link rel="stylesheet" href="./css/style2.css">
</head>
<body>
    <?php
    include 'navbar.php';
    ?>
 <div class="box">
    <div class="signin">
        <form action="#">
                <h1 id="heading">Sign in</h1>
                <input type="text" placeholder="E-mail" required>
                <!-- <i class="fas fa-user"id="icon"></i> -->
                <input type="password" placeholder="Password" id="myInput" required>

                <input type="checkbox" onclick="myFunction()"><p  id="textline">Show Password</p> 

                <input type="submit"value="Ragister" id="btn">
        </form>
    </div>
    <div class="imagelink">
        <img src="images/newspaper.png" id="img">
        <a href="costumersignup.php" id="link1"><u>I am new member<u></a>           
    </div>
</div>
<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
                            }
    }
    </script>
    <?php    include 'footer.php';    ?>
</body>
</html>