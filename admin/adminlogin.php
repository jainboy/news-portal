 <?php
 session_start();
 ?>
 <html>
<head>
<title>www.newsportal.com</title>
    <link rel="stylesheet" href="../css/style2.css">
</head>
<body>
    <div id="signup-box">        
        <div class="left-box">
            <form action="adminlogin.php" method="post">
            <h1 id="heading">Admin in</h1>

            <input type="text" placeholder="User Name" name="adminname" required>
            <input type="password" placeholder="Password" name="adminpassword" id="myInput" required>

            <input type="checkbox" onclick="myFunction()"><p  id="textline">Show Password</p> 
            <input type="submit" value="Ragister" name="apply" id="btn">
        </div>

        <div class="right-box">
            <img src="../images/admin.png" id="img">
            </form>
        </div>
    </div>
    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password")
            {
                x.type = "text";
            }
            else
            {
                x.type = "password";
            }
}
    </script>
</body>
</html>

<!-- ------------php start-------- -->

<?php
    include('../dbconnection/db.php');
    if(isset($_POST['apply'])) 
    {
      $username=$_POST['adminname'];
      $password=$_POST['adminpassword'];
 
         $query=mysqli_query($conn,"SELECT * FROM `admin` WHERE `name`='$username' AND `password`='$password' ");

        if($query)
        {
            if(mysqli_num_rows($query)>0)
            {        
                $_SESSION['name']=$username;
                header('location:admindashboard.php');
            }
            else
            {
            ?>
            <script>
                alert('username and password invalid !!');
                window.open('adminlogin.php','_self');
            </script>
            <?php        
            }
        }
      
    }  
   
?>