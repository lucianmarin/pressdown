<?php
	include('libs/Pressdown.php');
	$keypaths = get_paths();
	$paths = array_flip($keypaths);
	$id = isset($_GET['id']) ? $_GET['id'] : 0;
	$post = parse_file($paths[$id]);
	$title = $post['title'];
	$date = $post['date'];
?>

<?php include 'include/header.php'; ?>
<?php include 'include/menu.php'; ?>

<section>
	<article>
		<?= $post['body'] ?>
	</article>
</section>

<?php include 'include/footer.php'; ?>
