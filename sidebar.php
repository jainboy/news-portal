<div class="sidebar">
                    <div class="categries">
                            <h2>Categries</h2>
                            <?php
                                include('dbconnection/db.php');
                                $query=mysqli_query($conn,"SELECT * FROM `category`");
                                while($row=mysqli_fetch_array($query))
                                {
                                    $name=$row['cname'];
                            ?>
                            <ul class="category-list">
                                <li class="list-items"  data-aos="fade-left" data-aos-delay="100">
                                    <a href="#"><?php echo $name; ?></a>
                                    <!-- <span>(05)</span> -->
                                </li>
                            </ul> <?php } ?>
                        </div>
    
                        <div class="search" data-aos="fade-right" data-aos-delay="100">
                            <h2>Search</h2>
                            <div class="form-element">
                                <input type="text" placeholder="Search" class="input-element">
                                <span><i class="fas fa-search"></i></span>
                            </div>                           
                        </div>
                        <div class="populer-post">
                            <h2>Populer Post</h2>
                            <div class="post-content" data-aos="flip-up" data-aos-delay="100">
                                    <div class="post-image">
                                        <div>
                                                <img src="./images/Blog-post/blog1.png" class="img" alt="post1">
                                        </div>
                                    <div class="post-info flex-row">
                                        <span><i class="fas fa-calendar-alt text-grey"></i>&nbsp;&nbsp;3 October,2019</span>
                                        <span>2 Comment</span>
                                    </div>
                                    </div>
                                    <div class="post-title">
                                        <a href="#">
                                            Learn ne wtech related toic easyly.
                                        </a>
                                    </div>
                            </div>
                            <div class="post-content" data-aos="flip-up" data-aos-delay="200">
                                    <div class="post-image">
                                        <div>
                                                <img src="./images/Blog-post/blog2.png" class="img" alt="post1">
                                        </div>
                                    <div class="post-info flex-row">
                                        <span><i class="fas fa-calendar-alt text-grey"></i>&nbsp;&nbsp;3 October,2019</span>
                                        <span>2 Comment</span>
                                    </div>
                                    </div>
                                    <div class="post-title">
                                        <a href="#">
                                            Learn ne wtech related toic easyly.
                                        </a>
                                    </div>
                            </div>
                            <div class="post-content" data-aos="flip-up" data-aos-delay="300">
                                    <div class="post-image">
                                        <div>
                                                <img src="./images/Blog-post/blog3.png" class="img" alt="post1">
                                        </div>
                                    <div class="post-info flex-row">
                                        <span><i class="fas fa-calendar-alt text-grey"></i>&nbsp;&nbsp;3 October,2019</span>
                                        <span>2 Comment</span>
                                    </div>
                                    </div>
                                    <div class="post-title">
                                        <a href="#">
                                            Learn ne wtech related toic easyly.
                                        </a>
                                    </div>
                            </div>
                            <div class="post-content" data-aos="flip-up" data-aos-delay="400">
                                    <div class="post-image">
                                        <div>
                                                <img src="./images/Blog-post/blog4.png" class="img" alt="post1">
                                        </div>
                                    <div class="post-info flex-row">
                                        <span><i class="fas fa-calendar-alt text-grey"></i>&nbsp;&nbsp;3 October,2019</span>
                                        <span>2 Comment</span>
                                    </div>
                                    </div>
                                    <div class="post-title">
                                        <a href="#">
                                            Learn ne wtech related toic easyly.
                                        </a>
                                    </div>
                            </div>
                         