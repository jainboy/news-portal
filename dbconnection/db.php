<?php
$conn = mysqli_connect('localhost', 'root','','newsportal');
if($conn==false)
{
    ?>
    <script>
        alert('connection error');
    </script>
    <?php
}
?>