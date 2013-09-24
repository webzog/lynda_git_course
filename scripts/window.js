function open_window(file, name){
	window = window.open(file, name, 'resizable=0, toolbar=0, location=0, directories=0, status=0, menubar=0, scrollbars=0, width=500, height=300');
}
function open_window(file, name, width, height) {
	window = window.open(file, name, 'resizable=0, toolbar=0, location=0, directories=0, status=0, menubar=0, scrollbars=0, width=' + width + ', height=' + height);	
}