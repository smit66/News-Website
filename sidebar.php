


<div id="sidebar" class="col-md-4">
<!-- Cards Start -->
<div class="wrapper1">
    <input type="radio" name="slider" id="tab-1">
    <input type="radio" name="slider" id="tab-2" checked>
    
    <header class="header3">
      <label for="tab-1" class="tab-1">Basic</label>
      <label for="tab-2" class="tab-2">Standard</label>
      
      <div class="slider"></div>
    </header>
    <div class="card-area">
      <div class="cards">
        <div class="row row-1">
          <div class="price-details">
            <span class="price">5</span>
            
          </div>
          <ul class="features">
            <li><i class="fas fa-check"></i><span>API Through News</span></li>
            <li><i class="fas fa-check"></i><span>Bookmark Available</span></li>
            <li><i class="fas fa-check"></i><span>Share News</span></li>
          </ul>
        </div>
        <div class="row">
          <div class="price-details">
            <span class="price">6</span>
            
          </div>
          <ul class="features">
          <li><i class="fas fa-check"></i><span>API Through News</span></li>
            <li><i class="fas fa-check"></i><span>Bookmark Available</span></li>
            <li><i class="fas fa-check"></i><span>Share News</span></li>
          </ul>
        </div>
       </div>
    </div>
    <button><a href="premium.php"> plan</a></button>
  </div>


<!-- Card End -->



    <!-- recent posts box -->
    <div class="recent-post-container">
        <h4>Recent Posts</h4>

        <?php


        include "config.php";
        $limit = 3;



        $sql = "SELECT post.post_id,post.title,post.post_date,category.category_name,post.category,post.post_img FROM  post
LEFT JOIN category ON post.category=category.category_id
ORDER BY post.post_id DESC LIMIT {$limit}";


        $result = mysqli_query($conn, $sql) or die("Recent Post Error");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {






        ?>


                <div class="recent-post">
                    <a class="post-img" href="single.php?id=<?php echo $row['post_id']; ?>">
                        <img src="admin/upload/<?php echo $row['post_img']; ?>" alt="" />
                    </a>
                    <div class="post-content">
                        <h5><a href="single.php?id=<?php echo $row['post_id']; ?>"><?php echo $row['title']; ?></a></h5>
                        <span>
                            <i class="fa fa-tags" aria-hidden="true"></i>
                            <a href='category.php?cid=<?php echo $row['category']; ?>'><?php echo $row['category_name']; ?></a>
                        </span>
                        <span>
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <?php echo $row['post_date']; ?>
                        </span>
                        <a class="read-more" href="single.php?id=<?php echo $row['post_id']; ?>">read more</a>
                    </div>
                
    </div>
<?php
            }
        }
?>
<!-- /recent posts box -->
</div>