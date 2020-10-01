<?php
    include('../dbconnection/db.php');
    $id=$_GET['delete'];
    $query=mysqli_query($conn,"DELETE FROM `category` WHERE `id`='$id'");
    if($query==true)
    {
        ?>
        <script>
            alert('category delete successfully');
            
        </script>
        <?php
        header('location:./allcat.php');
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