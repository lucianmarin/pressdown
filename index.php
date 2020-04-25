<?php
	include('libs/Pressdown.php');
	$keypaths = get_paths();
	$title = $site_title;
	$date = "today";
?>

<?php include 'include/header.php'; ?>
<?php include 'include/menu.php'; ?>

<section>
	<aside>
		<ul>
		<?php foreach ($keypaths as $path => $id): ?>
			<?php $post = parse_file($path); ?>
			<li>
				<a href="/post.php?id=<?= $id ?>">
					<?= $post['title'] ?>
				</a>
			</li>
		<?php endforeach; ?>
		</ul>
	</aside>
</section>

<?php include 'include/footer.php'; ?>
