let headt = document.getElementById("title_id");
let wolfImage = document.getElementById("wolf_img");
let nadaButton = document.getElementById("btn1");
let zoomButton = document.getElementById("zoom");

let color1 = "#8e44ad";
let color2 = "#1abc9c";
let color = color1;

let toggleColor = () => {
	if (color === color1){
		color = color2;
		return color;
	}
	else{
		color = color1;
		return color;
	}
}
headt.addEventListener("click", () => {
	headt.style.color = toggleColor();
});

let wolfheight = wolfImage.height;
let wolfWidth = wolfImage.width;

let toggleDimension = (original, current) =>{
	if (original == current){
		current = original * 1.5;
		zoomButton.textContent = "Zoom Out";
	}
	else{
		current = original;
		zoomButton.textContent = "Zoom In";
	}
	return current;
}

zoomButton.addEventListener("click", () => {
	wolfImage.height = toggleDimension(wolfheight, wolfImage.height);
	wolfImage.width = toggleDimension(wolfWidth, wolfImage.width);
});

nadaButton.addEventListener("click", () => {
	alert("I lied");
});