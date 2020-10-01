<?php
include './sidebar2.php';  ?>

                    <div class="description">
                        <form method="post" enctype="multipart/form-data" action="adminadd.php" style="border:1px solid #ccc">
                            <div class="container">
                              <h1>Sign Up</h1>
                              <p>Please fill in this form to create an account.</p>
                              <hr>
                              <label><b>Name</b></label>
                              <input type="text" placeholder="Enter Name" name="aname" required> 
                              
                              <label for="email"><b>Email</b></label>
                              <input type="text" placeholder="Enter Email" name="aemail" required>
                          
                              <label for="psw"><b>Password</b></label>
                              <input type="password" placeholder="Enter Password" name="apsw" required>
                          
                              <label><b>Admin Image</b></label>
                              <input type="file" name="aimg" required>
                            
                                <button type="submit" name="signup" class="published">Sign Up</button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
        </main>
    </body>
</html>
<?php

if(isset($_POST['signup']))
{

  include('../dbconnection/db.php');
  $username= $_POST['aname'];
  $userid= $_POST['aemail'];
  $userpass= $_POST['apsw'];
  $uimage= $_FILES['aimg']['name'];
  $tempimage= $_FILES['aimg']['tmp_name'];

  move_uploaded_file($tempimage,"./adminimage/$uimage");

  $query="INSERT INTO `admin`(`name`, `email`, `password`, `adimage`) VALUES ('$username','$userid','$userpass','$uimage')";
  $run=mysqli_query($conn,$query);

  if($run==true)
  {
    ?>
      <script>
        alert('admin data insert successfully');
      </script>
      <?php
  }
  else
  {
    ?>
      <script>
        alert('admin data error');
      </script>
      <?php
  }
}
?>