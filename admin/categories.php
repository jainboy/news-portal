<?php
include './sidebar2.php';  ?>

<div class="description">
                        <form method="post" action="categories.php" style="border:1px solid #ccc">
                            <div class="container">
                              <h1>Add Category</h1>
                              <p>Fill The Data Feilds..</p>
                              <hr>                         
                              <label><b>Category Name</b></label>
                              <input type="text" placeholder="Enter Title" name="catname" required>                                         
                              <label><b>Description</b></label>
                              <input type="text" placeholder="Enter Author Name" name="discrioption" required>
                         
                                <button type="submit" class="published" name="published">Add</button>
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

  $catname= $_POST['catname'];
  $description= $_POST['discrioption'];

  $query="INSERT INTO `category`(`cname`, `cdescription`) VALUES ('$catname','$description')";
  $run=mysqli_query($conn,$query);

  if($run==true)
  {
    ?>
      <script>
        alert('category insert successfully');
      </script>
      <?php
  }
  else
  {
    ?>
      <script>
        alert('category data error');
      </script>
      <?php
  }
}
?>