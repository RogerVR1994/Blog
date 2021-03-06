<?php
	$result = false;

	if(!empty($_POST)){
		$sql = 'INSERT INTO blog_posts (title, content) VALUES(:title, :content)';
		$query = $pdo->prepare($sql);
		$query->execute([
			'title'=>$_POST['title'],
			'content'=> $_POST['content']
		]);
		$result = true;
	}
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
				<h2>New Posts</h2>
				<p>
					<a class="btn btn-default" href="posts.php">Back</a>
				</p>
				<?php 
					if($result){
						echo '<div class="alert alert-success">Saved Post</div>';
					}
				?>
				<form action="insert_post.php" method="post">
					<div class="form-group">
						<label for="inputTitle">Title</label>
						<input class="form-control" type="text" name="title" id="inputTitle">
					</div>	
					<textarea class="form-control" name="content" id="inputContent" rows="5"></textarea>
					<br>
					<input class="btn btn-primary" type="submit" value="Enviar">
				</form>
			</div>
			<div class="col-md-4">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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