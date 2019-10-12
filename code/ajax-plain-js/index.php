<?php
	include($_SERVER['DOCUMENT_ROOT'] . '/code/output-the-way-it-was-input-php/a.php')
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.6.1/clipboard.min.js"></script>
<script src="/assets/js/alpha.js"></script>
<style type="text/css">
	.code {
		border: 1px dashed black; 
		padding: 5px;
		overflow-x: scroll;
	}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AJAX PLAIN JS</title>
<h1><a href="/code">go back</a></h1><hr>
<h1>file to download (alpha.js)</h1>
<p><a href="/assets/js/alpha.js">alpha.js</a></p>
<hr>
<h1>1. serializing the form using plain js</h1>
<p id="step1" class="code"><?php echo output_the_way_it_is_input('var data = js_serialize(form_obj);'); ?></p>
<button class="clipboardbtn" data-clipboard-target="#step1">copy this</button>
<p>get your form_obj variable using any of the methods in the same js file</p>
<ul>
	<li>_id()</li>
	<li>_name()</li>
	<li>_class()</li>
	<li>_tag()</li>
</ul>
<hr>
<h1>2. add ajax code</h1>
<p id="step2" class="code"><?php echo output_the_way_it_is_input("var xhr = ajaxObj(method,url,data);
		xhr.onreadystatechange = function() {
		    if(ajaxReturn(xhr)) {
		        //code for what to do on ajax return goes here
		        //variable for ajax response is xhr.response or xhr.responseText
		    }
		}
		xhr.send(data);"); ?></p>
<button class="clipboardbtn" data-clipboard-target="#step2">copy this</button>
<hr>
<h1>copy whole code</h1>
<p class="code" id="whole"></p>
<script type="text/javascript">
	_id('whole').innerHTML += _id('step1').innerHTML;
	_id('whole').innerHTML += '<br>';
	_id('whole').innerHTML += _id('step2').innerHTML;
</script>
<button class="clipboardbtn" data-clipboard-target="#whole">copy whole</button>
<hr>
<h1><a href="/code">go back</a></h1><hr>
<script type='text/javascript'> var clipboard = new Clipboard('.clipboardbtn'); </script>