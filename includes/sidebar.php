  
  <div class="col-md-4">

  
  

          <!-- Side Widget -->
          <div class="card my-4">
              <div class="card text-white bg-danger mb-3">
                   <h5 class="card-header">Recent News</h5>
              </div>
            <div class="card-body">
                      <ul class="mb-0">
<?php
$query=mysqli_query($con,"select * from news limit 10");
while ($row=mysqli_fetch_array($query)) {

?>

  <li>
                      <a href="news-details.php?nid=<?php echo htmlentities($row['news_id'])?>"><?php echo htmlentities($row['posttitle']);?></a>
                    </li>
            <?php } ?>
          </ul>
            </div>
          </div>

        </div>
