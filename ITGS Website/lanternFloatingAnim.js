(function() {
	"use strict";

	var canvas = document.getElementById('emblem');
	var ctx = canvas.getContext("2d");
	var startTime;
	window.onload = setup();

	function setup(){
		startTime = Date.now();
		setInterval(drawLantern, 25);
	}

	function drawLantern(){
		drawLanternBase();
		drawLanternBox();
	}

	function drawLanternBase(){
		
		ctx.save();
		ctx.translate(20,5);

		var gradient = ctx.createRadialGradient(40, 40, 5, 40, 40, 6);
		gradient.addColorStop(0, "#CE8D0F");
		gradient.addColorStop(1, "#333323");

		ctx.moveTo(-15, 50);
		ctx.lineTo(40, 68);
		ctx.lineTo(95, 50);
		ctx.lineTo(40, 32);
		ctx.closePath();
		ctx.lineTo(-15, 55);
		ctx.lineTo(40, 73);
		ctx.lineTo(95, 55);
		ctx.lineTo(95, 50);
		ctx.moveTo(40, 68);
		ctx.lineTo(40, 73);
		ctx.stroke();
		ctx.restore();
		ctx.fillStyle = gradient;
		ctx.fill();
		ctx.strokeStyle = "#222212";
		ctx.stroke();
		drawLanternBox();
	}

	function drawLanternBox(){
		
		var t = (Date.now() - startTime)/1000;
		var lightStopPoint = 0.1 + 0.1 * (1 + Math.sin(t*5));

		ctx.save();
		ctx.translate(20,5);

		var gradient = ctx.createRadialGradient(40, 40, 5, 40, 40, 20);
		gradient.addColorStop(0, "#FFDDBB");
		gradient.addColorStop(1 - lightStopPoint, "#CE8D0F");//"#CE8D0F");
		gradient.addColorStop(1, "#CE8D0F");//"#BE7D00")

		//draw the lantern cube
		ctx.beginPath();
		ctx.moveTo(10,50);
		ctx.lineTo(40,60);
		ctx.lineTo(70,50);
		ctx.lineTo(70,10);
		ctx.lineTo(40,20);
		ctx.lineTo(10,10);
		ctx.lineTo(10,50);
		ctx.moveTo(40,60);
		ctx.lineTo(40,20);
		ctx.moveTo(10,10);
		ctx.lineTo(40,0);
		ctx.lineTo(70,10);
		ctx.lineTo(40,20);
		ctx.lineTo(10,10);

		ctx.lineTo
		ctx.fillStyle = gradient;
		ctx.fill();
		ctx.lineWidth = 2;
		ctx.strokeStyle = "#A36C02";
		ctx.lineJoin = "round";
		ctx.stroke();

		ctx.restore();
	}
})()