function adToggle(element){
	var d = document.getElementById(element).style.display
	var de = document.getElementById('ad-expand').innerHTML
	if(d == 'undefined' || d == 'none'){
		document.getElementById(element).style.display = 'block';
		document.getElementById('ad-expand').innerHTML = "-";
	} else {
		document.getElementById(element).style.display = 'none';
		document.getElementById('ad-expand').innerHTML = "+";
	}
}