<?php
include './sidebar2.php';  ?>

                    <div class="description">
                        <form method="post" enctype="multipart/form-data" action="post.php" style="border:1px solid #ccc">
                            <div class="container">
                              <h1>Add Post</h1>
                              <p>Fill The Data Feilds..</p>
                              <hr>                         
                              <label><b>Title</b></label>
                              <input type="text" placeholder="Enter Title" name="title" required>
                          
                              <label><b>Description</b></label>
                              <textarea  id="textarea" name="description" required></textarea>
                          
                              <label><b>Categries</b></label>
                                <select name="country">
                                <option>select</option>
                                    <?php
                                    include('../dbconnection/db.php');
                                        $query=mysqli_query($conn,"SELECT * FROM `category`");

                                        while($row=mysqli_fetch_array($query)){
                                            ?>                               
                                      <option value="<?php echo $row['cname']; ?>"><?php
                                      echo $row['cname'];
                                      ?>
                                      </option>
                                      <?php    } ?>
                                  </select>
                                
                              <label><b>Post Image</b></label>
                              <input type="file" name="img" required>

                              <label><b>Author</b></label>
                              <input type="text" placeholder="Enter Author Name" name="author" required>

                              <label><b>Date</b></label>
                              <input type="date" name="postdate" required>

                                <button type="submit" class="published" name="published">Published</button>
                            </div>
                        </form>
                    </div>
                </div>
        </main>
    </body>
</html>

<?php

if(isset($_POST['published']))
{

  include('../dbconnection/db.php');
  $title= $_POST['title'];
  $description= $_POST['description'];
  $category= $_POST['country'];
  $pimage= $_FILES['img']['name'];
  $tempimage= $_FILES['img']['tmp_name'];
  $author= $_POST['author'];
  $postdate= $_POST['postdate'];
 

  move_uploaded_file($tempimage,"./postimage/$pimage");

  $query="INSERT INTO `newspost`(`title`, `Description`, `category`, `newsimage`, `author`, `date`) VALUES ('$title','$description','$category','$pimage','$author','$postdate')";
  $run=mysqli_query($conn,$query);

  if($run==true)
  {
    ?>
      <script>
        alert('post insert successfully');
      </script>
      <?php
  }
  else
  {
    ?>
      <script>
        alert('POST UNSUCCESSFUL');
      </script>
      <?php
  }
}
?>