    <!-- HEADER -->
    <?php include 'header.php' ?>

    <!-- CONTENT -->
    <!-- container -->
    <div class="main-body" style="min-height:500px;">
      <!-- breadcrumbs -->
      <div class="page-title">
        <ul class="breadcrumb">
        	<li><a href="index.php">Home</a></li>
        	<li><a href="#">News</a></li>
			<li class="active">Blog Post 1</li>
        </ul>               
	  </div>
      <!-- ./breadcrumbs -->
      <div class="row">
        <!-- MAIN CONTENT -->
        <div class="col-sm-8 blog-main">
			<div class="blog-content">
				<h2 class="post-title">1st Blog Post</h2>
				<div class="post-header">
	                <span><i class="fa fa-comments"></i> Comments</span> |
	                <span><i class="fa fa-clock-o"></i> Time</span> |
	                <span><i class="fa fa-user"></i> Author</span> |
	                <span><i class="fa fa-tags"></i> Tags</span>
	            </div>                          
                <p><strong style="font-size:30px">D</strong>onec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                	&nbsp;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                	Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                </p>                                
                <blockquote><p>Donec pede justo, fringilla vel, nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, 
                	venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</p>
                </blockquote>
                <figure>
                	<img src="img/busparty.jpg" class="img-responsive"/>    
                	<p cl>image credits: </p>
                </figure>   
                <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. <a href="#">Aenean imperdiet</a>. Etiam ultricies nisi vel augue. 
                	Curabitur ullamcorper ultricies nisi. Nam eget dui.</p>
                <!-- ADVERT 2 -->
		          <div class="advert ad3" style="min-height: 150px;">
		          	<h5>Advertisement</h5>
		            <img class="img-responsive center-block" src="img/ad-inline.gif" alt="AD Space">
		          </div>
                <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. 
                	Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae 
                	<strong>sapien</strong> ut libero venenatis faucibus.</p>
                <div class="post-footer">
                  <div class="post-tags">
                	<span>Tags: </span>
                	<span class="tag"><a href="" class="btn btn-round btn-xs btn-primary"><i class="fa fa-close"></i> news</a></span>
                	<span class="tag"><a href="" class="btn btn-round btn-xs btn-primary"><i class="fa fa-close"></i> latest</a></span>
                	<span class="tag"><a href="" class="btn btn-round btn-xs btn-primary"><i class="fa fa-close"></i> trending</a></span>
                  </div>
                  <div id="sharethis" class="" style="min-height:40px; max-height: 40px; margin-top:-10px;">
                    <!-- <span class='st_sharethis_hcount' displayText='ShareThis'></span> -->
                    <span class='st_facebook_hcount' displayText='Facebook'></span>
                    <span class='st_twitter_hcount' displayText='Tweet'></span>
                    <span class='st_fblike_hcount' displayText='Facebook Like'></span>
                  </div>   
                </div>
           	</div>
            
            <div class="panel panel-default">
            	<div class="panel-heading">
            		<div class="panel-title"><h3>Comments</h3></div>
            	</div>
            	<div class="panel-body"></div>
            	<div class="panel-footer"></div>
            </div>

        </div><!-- /.blog-main -->
        <!-- SIDEBAR -->
        <?php include 'sidebar.php'; ?>
        <!-- ./ SIDEBAR -->
      </div><!-- /.row -->
    </div>
	
    <!-- FOOTER -->
    <?php include 'footer.php' ?>

    </div> <!-- ./ body-contianer -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery-migrate.min.js"></script>
    <script src="js/jquery/jquery-ui.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    
    <!-- PLUGINS -->
    

    <!-- CUSTOM JAVASCRIPT CALLS -->
    <script type="text/javascript">
        
    </script>

</body></html>