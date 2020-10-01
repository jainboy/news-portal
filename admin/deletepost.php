<?php
    include('../dbconnection/db.php');
    $id=$_GET['delete'];
    $query=mysqli_query($conn,"DELETE FROM `newspost` WHERE `id`='$id'");
    if($query==true)
    {
        ?>
        <script>
            alert('category delete successfully');
            
        </script>
        <?php
        header('location:./all_post.php');
    }
    else
    {
        ?>
        <script>
            alert('error');
        </script>
        <?php
    }
?>