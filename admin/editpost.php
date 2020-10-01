<?php
include './sidebar2.php';  ?>
<?php
    include('../dbconnection/db.php');
    $id=$_GET['edit'];
    $query=mysqli_query($conn,"SELECT * FROM `newspost` WHERE `id`='$id'");

    while($row=mysqli_fetch_array($query))
    {
        $heading=$row['title'];
        $des=$row['Description'];
        $cat=$row['category'];
        $image=$row['newsimage'];
        $writer=$row['author'];
        $postdate=$row['date'];
?>
                    <div class="description">
                        <form method="post" enctype="multipart/form-data" action="post.php" style="border:1px solid #ccc">
                            <div class="container">
                              <h1>Update Post</h1>
                              <p>Fill The Data Feilds..</p>
                              <hr>                         
                              <label><b>Title</b></label>
                              <input type="text" placeholder="Enter Title" name="title" value="<?php echo $heading; ?>" required>
                          
                              <label><b>Description</b></label>
                              <textarea  name="description"  required>
<?php echo $des; ?>
                              </textarea>
                          
                              <label><b>Categries</b></label>
                                <select name="country">
                                    <?php
                                    include('../dbconnection/db.php');
                                        $query=mysqli_query($conn,"SELECT * FROM `category`");

                                        while($row=mysqli_fetch_array($query)){
                                            ?>                               
                                      <option value="<?php echo $row['cname']; ?>">
                                    <?php
                                      echo $row['cname'];
                                      ?>
                                      </option>
                                      <?php    } ?>
                                  </select>
                                
                                  <input type="text" value="<?php echo $cat; ?>">

                              <label><b>Post Image</b></label>
                              <input type="file" name="img" required>
                              <img src="postimage/<?php echo $image; ?>" width="100px" height="100px">
                              <br/>

                              <label><b>Author</b></label>
                              <input type="text" placeholder="Enter Author Name" name="author" value="<?php echo $writer; ?>" required>

                              <label><b>Date</b></label>
                              <input type="date" name="postdate" required>
                              <input type="text" value="<?php echo $postdate; ?>">
                              <input type="hidden" name="id">

                                <button type="submit" class="published" name="published">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
        </main>
         <?php  } ?>
    </body>
</html>

<?php

if(isset($_POST['published']))
{

  include('../dbconnection/db.php');
  $id=$_POST['id'];
  $title= $_POST['title'];
  $description= $_POST['description'];
  $category= $_POST['country'];
  $pimage= $_FILES['img']['name'];
  $tempimage= $_FILES['img']['tmp_name'];
  $author= $_POST['author'];
  $postdate= $_POST['postdate'];
 

  move_uploaded_file($tempimage,"./postimage/$pimage");

  $query="UPDATE `newspost` SET `title`='$title',`Description`='$description',`category`='$category',`newsimage`='$pimage',`author`='$author',`date`='$postdate' WHERE `id`='$id'";
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