<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Blog Title</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<?php 
					foreach ($blogPosts as $blogPost){
						echo '<div class="blog-post">';
						echo '<h2>'.$blogPost['title'].'</h2>';
						echo '<p>March 21, 2018 by <a href="">Roger</a></p>';
						echo '<div class="blog-post-image">';
						echo '<img class="img-responsive" src="images/3.jpg" width="100%" height="100%">';
						echo '</div>';
						echo '<div class="blog-post-content">';
						echo $blogPost['content'];
						echo '</div>';
						echo '</div>';
					}
				?>
				
					
		</div>
		<div class="row">
			<div class="col-md-12">
				<footer>
					This is a footer <br>
					<a href="admin/index.php">Admin Panel</a>
				</footer>
			</div>
		</div>
	</div>
</body>
</html>