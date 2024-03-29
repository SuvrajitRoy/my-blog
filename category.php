<?php 
include_once('resources/init.php');

$posts = get_posts(((isset($_GET['id'])) ? $_GET['id'] : null));


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Go to Green,Open Your Talent</title>
        <?php include "include/style.php" ?>
	
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="span6 offset3">
				<h1>Categories</h1>
				<br>
				<?php include "include/link.php" ?>
				<hr>
				<br>

				<?php
				foreach ( $posts as $post ) {
					if ( ! category_exists('name', $post ['name'] ) ){
						$post['name'] = 'Uncategorised';
					}
					?>
					<div class="post">
						<h2><i class="icon-quote-left">&nbsp;&nbsp;</i><a href="index.php?id=<?php echo $post['post_id']; ?>"><?php echo $post['title']; ?></a></h2>
						<small> Posted on <?php echo date('d-m-Y h:i:s', strtotime($post['date_posted'])); ?>
							in <a href="category.php?id=<?php echo $post['category_id']; ?>"><?php echo $post['name'];?></a>
						</small>
						<p class="post-content"><?php echo nl2br($post['contents']);?></p>

						<div class="post-functions">
							<ul>
								<li><a href="delete_post.php?id=<?php echo $post["post_id"]; ?>"> Delete this post</a></li>
								<li><a href="edit_post.php?id=<?php echo $post['post_id']; ?>"> Edit post</a></li>
							</ul>
						</div>
						<br />
					</div>


					<?php
				}
				?>
			</div>
		</div>
            </div>
	</body>
	</html>