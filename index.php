<?php
	include('libs/Pressdown.php');
	$keypaths = get_paths();
	$title = $site_title;
	$date = "today";
?>

<? include 'include/header.php'; ?>
<? include 'include/menu.php'; ?>

<section>
	<aside>
		<ul>
		<? foreach ($keypaths as $path => $id): ?>
			<? $post = parse_file($path); ?>
			<li>
				<a href="/post.php?id=<?= $id ?>">
					<?= $post['title'] ?>
				</a>
			</li>
		<? endforeach; ?>
		</ul>
	</aside>
</section>

<? include 'include/footer.php'; ?>
