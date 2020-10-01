<?php
include './sidebar2.php';  ?>

<div class="description">
                        <h2>All Categories</h2>
                        <table  id="table_design">
                           <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                            include('../dbconnection/db.php');
                            $query=mysqli_query($conn,"SELECT * FROM `newspost`");
                            while($row=mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td>    <?php   echo $row['id'];    ?>  </td>
                                <td>    <?php   echo $row['title'];    ?>  </td>
                                <td>    <?php   echo $row['category'];    ?>  </td>
                                <td>   <img src="postimage/<?php   echo $row['newsimage'];    ?>" width="100px" height="100px">  </td>
                                <td>
                                    <button class="btn"> <a href="editpost.php?edit=<?php echo $row['id']; ?>">Edit</a></button>
                                </td>
                                <td>
                                <button class="btn"> <a href="deletepost.php?delete=<?php echo $row['id']; ?>">Delete</a></button>
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
        </main>
    </body>
</html>