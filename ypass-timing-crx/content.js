function onClick(e){
	e.preventDefault();
	e.stopPropagation();
	var pass = document.getElementById("passwd").value;
	document.getElementById("passwd").value = pass+timing;
	document.getElementById("login_form").submit();
}

document.getElementsByClassName("btnLogin yjM")[0].addEventListener('click', onClick, true);

var before = 0;
var timing = "";

document.onkeydown = function (e){
	if(document.activeElement.id=="passwd"){
		var key_code = e.keyCode;
		var now = new Date().getTime();
		if(before!=0){
			var diff = Math.round((now-before)/1000);
			timing += diff;
		}
		before = now;
	}
};
