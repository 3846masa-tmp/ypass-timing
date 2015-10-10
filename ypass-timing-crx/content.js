function onSubmit(e) {
	var pass = document.querySelector("input[type=password]").value;
	document.querySelector("input[type=password]").value = pass+timing;
}

Array.from(document.querySelectorAll("form")).forEach((form) => {
	form.addEventListener('submit', onSubmit, true);
});

var before = 0;
var timing = "";

document.onkeydown = function (e){
	if (document.activeElement === document.querySelector("input[type=password]")) {
		console.log(e);
		var key_code = e.keyCode;
		var now = new Date().getTime();
		if(before!=0){
			var diff = Math.round((now-before)/1000);
			timing += diff;
		}
		before = now;
	}
};
