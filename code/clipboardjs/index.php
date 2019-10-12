<?php
	include($_SERVER['DOCUMENT_ROOT'] . '/code/output-the-way-it-was-input-php/a.php')
?>
<style type="text/css">
	.code {
		border: 1px dashed black; 
		padding: 5px;
		overflow-x: scroll;
	}
</style>
<title>clipboardjs</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.6.1/clipboard.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<h1><a href="/code">go back</a></h1><hr>
<h1>file to download</h1>
<a href="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.6.1/clipboard.min.js">clipboard.js</a>
<hr>
<h1>or include this in your document</h1>
<p class="code" id="target1"><?php echo output_the_way_it_is_input('<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.6.1/clipboard.min.js"></script>'); ?></p>
<button class="clipboardbtn" data-clipboard-target="#target1">copy this</button>
<hr>

<h1>1. add script to page</h1>
<hr>
<h1>2. make clipboard btn at the end of the page</h1>
<p class="code" id="step2"><?php echo output_the_way_it_is_input("<script type='text/javascript'> var clipboard = new Clipboard('.clipboardbtn'); </script>"); ?></p>
<button class="clipboardbtn" data-clipboard-target="#step2">copy this</button>
<p>Now every html element you give the class 'clipboardbtn' will copy the 'targeted' text for you in your clipboard when you click it</p>
<hr>
<h1>Targetting text to copy</h1>
<hr>
<h1>1. targetting text using id</h1>
<p class="code" id="target2"><?php echo output_the_way_it_is_input('<button class="clipboardbtn" data-clipboard-target="#theID">copy this</button>'); ?></p>
<button class="clipboardbtn" data-clipboard-target="#target2">copy this</button>
<p>This button when clicked will copy text from elements that have an 'id="theID"'</p>
<h2>DEMO</h2>
<p id="theID">
	this has 'id="theID"'
</p>
<button class="clipboardbtn" data-clipboard-target="#theID">click to copy</button>
<hr>
<h1>2. targetting self</h1>
<p class="code" id="target3"><?php echo output_the_way_it_is_input('<button class="clipboardbtn" data-clipboard-text="this text will be copied">copy this</button>'); ?></p>
<button class="clipboardbtn" data-clipboard-target="#target3">copy this</button>
<p>when this button is clicked the value of its 'data-clipboard-text' attribute will be copied to clipboard. In this case, the text 'the text will be copied' will be copied to the clipboard</p>
<h2>DEMO</h2>
<button class="clipboardbtn" data-clipboard-text="this text will be copied">copy this</button>
<hr>
<h1><a href="/code">go back</a></h1><hr>
<script type="text/javascript">
	var clipboard = new Clipboard('.clipboardbtn');
</script>