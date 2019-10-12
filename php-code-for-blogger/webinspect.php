<?php
	
	header('Access-Control-Allow-Origin: https://webinspect.blogspot.in');

	//post links
	$posts = 
	[
		"html" => 
		[
			[
				"title" => "Basic HTML Document",
				"link" => "https://webinspect.blogspot.in/2016/11/a-basic-html-document.html"
			],
			[
				"title" => "Basic HTML Tags",
				"link" => "https://webinspect.blogspot.in/2016/11/basic-html-tags.html"
			],
			[
				"title" => "Implementing a cover letter using html",
				"link" => "https://webinspect.blogspot.in/2016/11/implementing-cover-letter-using-html.html"
			]
		]
	];
	
	//scooping up variables
	$topic = $_GET["topic"];
	$post = $_GET["post"] - 1;
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div id="pager">
	<?php
		if($post > 0) {
			$previous = $post - 1;
			echo "<a href=\"{$posts[$topic][$previous]["link"]}\">Previous</a>";
		}
	?>
	<select onchange="window.location = this.value" style="width: 50%">
		<?php
			for($i = 0; $i < count($posts[$topic]); $i++) {
				if($i == $post)
					$var = "<option value=\"{$posts[$topic][$i]["link"]}\" selected>{$posts[$topic][$i]["title"]}</option>";
				else
					$var = "<option value=\"{$posts[$topic][$i]["link"]}\">{$posts[$topic][$i]["title"]}</option>";
				echo $var;
			}
		?>
	</select>
	<?php
		$next = $post + 1;
		if($next < count($posts[$topic])) {
			echo "<a href=\"{$posts[$topic][$next]["link"]}\">Next</a>";
		}
	?>
</div>