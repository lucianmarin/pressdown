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
		<?php
		// Group posts by year
		$posts_by_year = array();
		foreach ($keypaths as $path => $id) {
			$post = parse_file($path);
			$year = date('Y', strtotime($post['date']));
			if (!isset($posts_by_year[$year])) {
				$posts_by_year[$year] = array();
			}
			$posts_by_year[$year][] = array('id' => $id, 'post' => $post);
		}
		krsort($posts_by_year); // Sort years descending
		?>
		<?php foreach ($posts_by_year as $year => $posts): ?>
			<h3><?= $year ?></h3>
			<ul>
				<?php foreach ($posts as $item): ?>
					<li>
						<a href="/post.php?id=<?= $item['id'] ?>">
							<?= $item['post']['title'] ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endforeach; ?>
	</aside>
</section>

<?php include 'include/footer.php'; ?>
