<style type="text/css">
	.code {
		border: 1px dashed black; 
		padding: 5px;
		overflow-x: scroll;
	}
	#target { text-align: center; }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.6.1/clipboard.min.js"></script>
<script src="/assets/js/alpha.js"></script>
<h1><a href="/code">go back</a></h1><hr>
<h1>add this css file</h1>
<p id="csslink" class="code"><?php echo htmlentities('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />'); ?></p>
<button class="clipboardbtn" data-clipboard-target="#csslink">copy this</button>
<hr>
<h1>add this js file</h1>
<a href="/assets/js/alpha.js" download>download alpha.js</a>
<hr>
<p>
	<select id="theselect" onchange="cssanimate(_id('target'),this.value)">
		<option>animate</option>
		<option value="bounce">bounce</option>
		<option value="flash">flash</option>
		<option value="pulse">pulse</option>
		<option value="rubberBand">rubberBand</option>
		<option value="shake">shake</option>
		<option value="swing">swing</option>
		<option value="tada">tada</option>
		<option value="wobble">wobble</option>
		<option value="jello">jello</option>
		<option value="bounceIn">bounceIn</option>
		<option value="bounceInDown">bounceInDown</option>
		<option value="bounceInLeft">bounceInLeft</option>
		<option value="bounceInRight">bounceInRight</option>
		<option value="bounceInUp">bounceInUp</option>
		<option value="bounceOut">bounceOut</option>
		<option value="bounceOutDown">bounceOutDown</option>
		<option value="bounceOutLeft">bounceOutLeft</option>
		<option value="bounceOutRight">bounceOutRight</option>
		<option value="bounceOutUp">bounceOutUp</option>
		<option value="fadeIn">fadeIn</option>
		<option value="fadeInDown">fadeInDown</option>
		<option value="fadeInDownBig">fadeInDownBig</option>
		<option value="fadeInLeft">fadeInLeft</option>
		<option value="fadeInLeftBig">fadeInLeftBig</option>
		<option value="fadeInRight">fadeInRight</option>
		<option value="fadeInRightBig">fadeInRightBig</option>
		<option value="fadeInUp">fadeInUp</option>
		<option value="fadeInUpBig">fadeInUpBig</option>
		<option value="fadeOut">fadeOut</option>
		<option value="fadeOutDown">fadeOutDown</option>
		<option value="fadeOutDownBig">fadeOutDownBig</option>
		<option value="fadeOutLeft">fadeOutLeft</option>
		<option value="fadeOutLeftBig">fadeOutLeftBig</option>
		<option value="fadeOutRight">fadeOutRight</option>
		<option value="fadeOutRightBig">fadeOutRightBig</option>
		<option value="fadeOutUp">fadeOutUp</option>
		<option value="fadeOutUpBig">fadeOutUpBig</option>
		<option value="flip">flip</option>
		<option value="flipInX">flipInX</option>
		<option value="flipInY">flipInY</option>
		<option value="flipOutX">flipOutX</option>
		<option value="flipOutY">flipOutY</option>
		<option value="lightSpeedIn">lightSpeedIn</option>
		<option value="lightSpeedOut">lightSpeedOut</option>
		<option value="rotateIn">rotateIn</option>
		<option value="rotateInDownLeft">rotateInDownLeft</option>
		<option value="rotateInDownRight">rotateInDownRight</option>
		<option value="rotateInUpLeft">rotateInUpLeft</option>
		<option value="rotateInUpRight">rotateInUpRight</option>
		<option value="rotateOut">rotateOut</option>
		<option value="rotateOutDownLeft">rotateOutDownLeft</option>
		<option value="rotateOutDownRight">rotateOutDownRight</option>
		<option value="rotateOutUpLeft">rotateOutUpLeft</option>
		<option value="rotateOutUpRight">rotateOutUpRight</option>
		<option value="slideInUp">slideInUp</option>
		<option value="slideInDown">slideInDown</option>
		<option value="slideInLeft">slideInLeft</option>
		<option value="slideInRight">slideInRight</option>
		<option value="slideOutUp">slideOutUp</option>
		<option value="slideOutDown">slideOutDown</option>
		<option value="slideOutLeft">slideOutLeft</option>
		<option value="slideOutRight">slideOutRight</option>
		<option value="zoomIn">zoomIn</option>
		<option value="zoomInDown">zoomInDown</option>
		<option value="zoomInLeft">zoomInLeft</option>
		<option value="zoomInRight">zoomInRight</option>
		<option value="zoomInUp">zoomInUp</option>
		<option value="zoomOut">zoomOut</option>
		<option value="zoomOutDown">zoomOutDown</option>
		<option value="zoomOutLeft">zoomOutLeft</option>
		<option value="zoomOutRight">zoomOutRight</option>
		<option value="zoomOutUp">zoomOutUp</option>
		<option value="hinge">hinge</option>
		<option value="rollIn">rollIn</option>
		<option value="rollOut">rollOut</option>
	</select>
	<button class="clipboardbtn" id="copyfn" data-clipboard-text="">copy fn</button>
	<button onclick="if(_id('target').style.display == '') _id('target').style.display = 'none'; else _id('target').style.display = ''; ">display toggle</button>
	<button onclick="_id('target').removeAttribute('class')">Remove animation</button>
</p>
<hr>
<div id="target">this is the div that will be animated<br>look, magixx</div>
<hr>
<h1>If your element is hidden and you are using some sort of animation to bring it to view, always make it (display:block) before doing the animation. Anyways, if due to some animation your element goes off screen, there is no need to (display:none) it because it is going to stay that way till you use some animation to bring it back on the screen</h1>
<h2>use copy fn button to copy the function that is triggering the animation and use it to trigger the animation on any event you want.</h2>
<hr>
<h1><a href="/code">go back</a></h1><hr>
<script type='text/javascript'> var clipboard = new Clipboard('.clipboardbtn'); </script>