var count = 0;
document.getElementById("myButton").onclick = function () {
	count++;
	if(count%2==0){
		document.getElementById("demo").innerHTML = "";
	} else {
		var img = document.createElement("img");
		img.src = "https://i.postimg.cc/5tPTKznW/roll-frog.gif";
		document.getElementById("demo").appendChild(img);
	}

}

