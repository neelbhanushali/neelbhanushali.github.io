function _id(x) { return document.getElementById(x); }
function _name(x) { return document.getElementsByName(x); }
function _class(x) { return document.getElementsByClassName(x); }
function _tag(x) { return document.getElementsByTagName(x); }
function _qs(x) { return document.querySelector(x); }
function _qsa(x) { return document.querySelectorAll(x); }



function ajaxObj( method, url, data ) {
	var x = new XMLHttpRequest();
	if(method.toLowerCase() == 'get' && data.length > 0)
		x.open( method, url+'?'+data , true );
	else
		x.open( method, url , true );
	x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	return x;	
}
function ajaxReturn(x){
	if(x.readyState == 4 && x.status == 200){
	    return true;	
	}
}


		

function js_serialize(el) {
	var elem = el.elements;
	var name_value = [];
	for(var i = 0; i < elem.length; i++) {
		//textarea
		if(elem[i].nodeName.toLowerCase() == 'textarea') {
			if(elem[i].name)
				name_value.push(elem[i].name+'='+encodeURI(elem[i].value));
		}
		//input except type radio checkbox
		if(elem[i].nodeName.toLowerCase() == 'input' && elem[i].type.toLowerCase() != 'checkbox' && elem[i].type.toLowerCase() != 'radio') {
			if(elem[i].name)	
				name_value.push(elem[i].name+'='+encodeURI(elem[i].value));
		}
		//input type checkbox radio
		if(elem[i].nodeName.toLowerCase() == 'input' && (elem[i].type.toLowerCase() == 'checkbox' || elem[i].type.toLowerCase() == 'radio')) {
			if(elem[i].name) {
				if(elem[i].checked)
					name_value.push(elem[i].name+'='+encodeURI(elem[i].value));
			}
		}
	}
	name_value = Array.from(new Set(name_value))
	
	return name_value.join('&');
}

/*
	running for ajax
		var xhr = ajaxObj('post','b.php',data);
		xhr.onreadystatechange = function() {
		    if(ajaxReturn(xhr)) {
		        _id('output').innerHTML = xhr.response;
		    }
		}
		xhr.send(data);
*/


function get_webpage(link,el) {
	var data = "get_webpage="+link;
	console.log(data);
	var xhr = ajaxObj('post','b.php',data);
    xhr.onreadystatechange = function() {
        if(ajaxReturn(xhr)) {
            el.innerHTML = xhr.response;
        }
    }
    xhr.send(data);
}

//visit link
//	https://kbdb.000webhostapp.com/code/animate-css/
function cssanimate(el,fn) {
	el.removeAttribute('class');
	el.classList.add('animated');
	el.classList.add(fn);
	_id('copyfn').setAttribute('data-clipboard-text','cssanimate(element,"'+fn+'")');
}