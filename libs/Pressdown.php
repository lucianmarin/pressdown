<?php
	include('include/config.php');
	include('Parsedown.php');

	function get_paths($dir='_posts') {
		$paths = glob($dir."/*.md") + glob($dir."/*/*.md");
		$keypaths = array_flip($paths);
		krsort($keypaths);
		return $keypaths;
	}

	function parse_file($fpath) {
		$post = array();
		$body = "";
		$file = fopen($fpath, 'r');
		$delimitators = 0;
		while (!feof($file)) {
			$line = fgets($file);
			if ($delimitators != 2) {
				if ($line === "---\n") {
					$delimitators += 1;
				} else {
					$d = explode(":", $line, 2);
					$post[trim($d[0])] = trim(trim($d[1]), '"');
				}
			} else {
				$body .= $line;
			}
		}
		fclose($file);

		// adds img_root to images
		$bodytag = str_replace(
			"(/images/", "(".$GLOBALS['img_root']."images/", $body
		);

		// parse Markdown
		$Parsedown = new Parsedown();
		$post['body'] = $Parsedown -> text($bodytag);

		return $post;
	}
?>
