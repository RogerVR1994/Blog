<?php
	$query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id DESC');
	$query->execute();
	$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);
?>

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
				<h2>Posts</h2>
			<a class="btn btn-primary" href="insert_post.php">New Post</a>
				<table class="table">
					<tr>
						<th>Title</th>	
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					<?php
						foreach ($blogPosts as $blogPost) {
							echo '<tr>';
							echo '<td>'.$blogPost['title'].'</td>';
							echo '<td>Edit</td>';
							echo '<td>Delete<td>';
							echo '</tr>';
						}
					?>
				</table>		
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<footer>
					This is a footer <br>
					<a href="index.php">Admin Panel</a>
				</footer>
			</div>
		</div>
	</div>
</body>
</html>