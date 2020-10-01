<?php
include './sidebar2.php';  ?>


<?php
    include('../dbconnection/db.php');
    $id=$_GET['edit'];
    $query=mysqli_query($conn,"SELECT * FROM `category` WHERE `id`='$id'");
    while($row=mysqli_fetch_array($query)){
        $category=$row['cname'];
        $des=$row['cdescription'];
?>
<div class="description">
                        <form method="post" action="editcat.php" style="border:1px solid #ccc">
                            <div class="container">
                              <h1>Update Category</h1>
                              <p>Fill The Data Feilds..</p>
                              <hr>                         
                              <label><b>Category Name</b></label>
                              <input type="text" placeholder="Enter Title" name="catname" value="<?php echo $category; ?>" required> 

                              <label><b>Description</b></label>
                              <input type="text" placeholder="Enter Author Name" name="discrioption" value="<?php echo $des; ?>" required>
                         
                              <input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>">
                            <button type="submit" class="published" name="update">Update</button>
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

  $id=$_POST['id'];
  $catname= $_POST['catname'];
  $description= $_POST['discrioption'];

  $query="UPDATE `category` SET `cname`='$catname',`cdescription`='$description' WHERE `id`='$id'";
  $run=mysqli_query($conn,$query);

  if($run==true)
  {
    ?>
      <script>
        alert('category update successfully');
      </script>
      <?php
  }
  else
  {
    ?>
      <script>
        alert('category update  error');
      </script>
      <?php
  }
}
?>