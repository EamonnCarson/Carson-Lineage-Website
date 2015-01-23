	/*Yellow = #FFC75A
	Dark Yellow gold = #CE8D0F
	Darkest Yellow Gold = #A36C02*/

(function() {
	"use strict";

	var canvas = document.getElementById('emblem');
	var ctx = canvas.getContext("2d");
	window.onload = drawLantern();

	function drawLantern(){
		
		var gradient = ctx.createRadialGradient(40, 40, 5, 40, 40, 20);
		gradient.addColorStop(0, "#FFC75A");
		gradient.addColorStop(1, "#CE8D0F");

		ctx.save();
		ctx.translate(5,5);

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
		ctx.lineWidth = 3;
		ctx.strokeStyle = "#A36C02";
		ctx.lineJoin = "round";
		ctx.stroke();

		ctx.restore();
	}
})()