<!-- HEADER -->
<?php include 'header.php' ?>
	
	<!-- CONTENT -->
    <!-- container -->
    <div class="main-body" style="min-height:500px;">
			<div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">Create a new post</div>
                </div>         
                <div class="panel-body">
                    <form action="" class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="postTitle" class="col-lg-2 control-label">Title</label>
                            <div class="col-md-10">
                                <input type="text" id="postTitle" name="postTitle" class="form-control" placeholder="Post Title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="postContent" class="col-lg-2 control-label">Content</label>
                            <div class="col-md-10">
                                <textarea name="postContent" id="postContent" class="summernote"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="postTags" class="col-lg-2 control-label">Tags / Categories</label>
                            <div class="col-md-10">
                                <span><input type="checkbox"> Trending</span>                                          
                                <span><input type="checkbox"> News</span>                                         
                                <span><input type="checkbox"> Sport</span>                                         
                                <span><input type="checkbox"> Politics</span>                                          
                                <span><input type="checkbox"> Jobs</span>                                       
                                <span><input type="checkbox"> Gossip</span>                                        
                                <span><input type="checkbox"> Entertainment</span> 
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <a href="" type="submit" class="btn btn-default text-right">Publish</a>
                </div>
            </div>
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

    <script src="js/summernote/summernote.js"></script>
    <script src="js/plugins.js"></script>

    <!-- CUSTOM JAVASCRIPT CALLS -->
    <script type="text/javascript">
        
    </script>

</body></html>