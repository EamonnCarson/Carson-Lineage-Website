(function() {
	"use strict";

	var canvas = document.getElementById('emblem');
	var ctx = canvas.getContext("2d");
	window.onload = drawLantern();

	function drawLantern(){
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
		ctx.stroke();
		ctx.fill();
	}
})()