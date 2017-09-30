var song;
var volsliderspan, volumeslider, volvaluespan, volfullspan;
var playpausebtn, stopbtn;
var fft;
var seekerspan, seeker, seekvalue, seekfull;
var playbackratespan, playbackrateslider, playbackratenow, playbackratefull;
var favpartspan, favpartbtn;


function preload() {
	song = loadSound('song.mp3');
}

function setup() {
	createCanvas(710,400);
	noFill();

	createElement('br');

	playpausebtn = createButton('play');
	playpausebtn.mousePressed(playpausefn);
	stopbtn = createButton('stop');
	stopbtn.mousePressed(stopfn);
	createElement('br');
	
	volsliderspan = createElement('span');
	volsliderspan.html('volume slider');
	volvaluespan = createElement('span');
	volvaluespan.html('50');
	volumeslider = createSlider(0, 1, 0.5, 0.1);
	volfullspan = createElement('span');
	volfullspan.html('100');
	createElement('br');
	
	seekerspan = createElement('span');
	seekerspan.html('seeker');
	seekvalue = createElement('span');
	seekvalue.html('0');
	seeker = createSlider(0, song.duration(), 0, 1);
	seekfull = createElement('span');
	seekfull.html(parseInt(song.duration()));
	seeker.changed(seekthesong);
	createElement('br');

	playbackratespan = createElement('span');
	playbackratespan.html('play back rate');
	playbackratenow = createElement('span');
	playbackratenow.html('1');
	playbackrateslider = createSlider(0.5, 1.5, 1, 0.1);
	playbackratefull = createElement('span');
	playbackratefull.html('1.5');
	createElement('br');

	favpartspan = createElement('span');
	favpartspan.html('listen to my favorite part');
	favpartbtn = createButton('click here');
	favpartbtn.mousePressed(favpartseek);

	fft = new p5.FFT();
	fft.setInput(song);
	
}

function draw() {

	song.setVolume(volumeslider.value());
	song.rate(playbackrateslider.value());
	seeker.value(song.currentTime());
	volvaluespan.html(volumeslider.value() * 100);
	seekvalue.html(parseInt(song.currentTime()));
	playbackratenow.html(song.rate());



	background(200);

	var spectrum = fft.analyze();

	beginShape();
	for (i = 0; i < spectrum.length; i++) {
		vertex(i, map(spectrum[i], 0, 255, height, 0) );
	}
	endShape();
}

function seekthesong() { song.jump(seeker.value()); }
function changeplaybackrate() { song.rate(playbackrateslider.value()); }
function favpartseek() { var favpartsecond = 85; seeker.value(favpartsecond); song.jump(favpartsecond); }

function playpausefn() {
	if(!song.isPlaying()) {
		song.play();
		playpausebtn.html('pause');
	}
	else {
		song.pause();
		playpausebtn.html('play');
	}
}

function stopfn() { 
	playpausebtn.html('play');
	seeker.value(0);
	song.stop();
}