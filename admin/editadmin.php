<?php
include './sidebar2.php';  ?>
<?php
    include('../dbconnection/db.php');
    $id=$_GET['edit'];
    $query=mysqli_query($conn,"SELECT * FROM `admin` WHERE `id`='$id'");

        while($row=mysqli_fetch_array($query))
        {
            $name=$row['name'];
            $email=$row['email'];
            $password=$row['password'];
            $uadimage=$row['adimage'];
?>
                    <div class="description">
                        <form method="post" enctype="multipart/form-data" action="adminadd.php" style="border:1px solid #ccc">
                            <div class="container">
                              <h1>Update Admin Data</h1>
                              <p>Please fill in this form to create an account.</p>
                              <hr>
                              <label><b>Name</b></label>
                              <input type="text" placeholder="Enter Name" name="aname" value="<?php echo $name; ?>" required> 
                              
                              <label for="email"><b>Email</b></label>
                              <input type="text" placeholder="Enter Email" name="aemail" value="<?php echo $email; ?>" required>
                          
                              <label for="psw"><b>Password</b></label>
                              <input type="password" placeholder="Enter Password" name="apsw" value="<?php echo $password; ?>" required>
                          
                              <label><b>Admin Image</b></label>
                              <input type="file" name="aimg" required>
                              <img src="adminimage/<?php echo $uadimage; ?>" width="100px" height="100px">
                              <input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>">
                            
                                <button type="submit" name="update" class="published">Update Details</button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
    <?php } ?>
        </main>
    </body>
</html>
<?php

if(isset($_POST['update']))
{

  include('../dbconnection/db.php');
  $id= $_POST['id'];
  $username= $_POST['aname'];
  $userid= $_POST['aemail'];
  $userpass= $_POST['apsw'];
  $uimage= $_FILES['aimg']['name'];
  $tempimage= $_FILES['aimg']['tmp_name'];

  move_uploaded_file($tempimage,"./adminimage/$uimage");

  $query="UPDATE `admin` SET `name`='$username',`email`='$userid',`password`='$userpass',`adimage`='$uimage' WHERE `id`='$id'";
  $run=mysqli_query($conn,$query);

  if($run==true)
  {
    ?>
      <script>
        alert('admin data update successfully');
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