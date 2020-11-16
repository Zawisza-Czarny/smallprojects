<!DOCTYPE html>
<html>
<body>

<canvas id="linia" width="1000" height="500" style="border:1px solid #d3d3d3;"></canvas>

<script>

    var canvas= document.getElementById('linia');
    var context= canvas.getContext('2d');
    function choinka(a,b) {

// Główna część choinki

        context.beginPath();
        context.moveTo(125 + a, 150 + b);
        context.lineTo(140 + a, 120 + b);
        context.lineTo(130 + a, 120 + b);
        context.lineTo(145 + a, 90 + b);
        context.lineTo(135 + a, 90 + b);
        // Góra choinki
        context.lineTo(150 + a, 60 + b);
        context.lineTo(165 + a, 90 + b);
        context.lineTo(155 + a, 90 + b);
        context.lineTo(170 + a, 120 + b);
        context.lineTo(160 + a, 120 + b);
        context.lineTo(175 + a, 150 + b);
        context.strokeStyle = '#663300';
        context.fillStyle = '#336600';
        context.fill();
        context.closePath();
        context.beginPath();
        context.moveTo(150 + a, 150 + b);
        context.lineTo(150 + a, 175 + b);
        context.lineWidth = 4;
        context.closePath();
        context.stroke();
        context.restore();
    }
    function domek()
    {
        context.beginPath();
        context.strokeStyle ='#000000';
        context.moveTo(600,450);
        context.lineTo(900,450);
        context.lineTo(900,350);
        context.lineTo(600,350);
        context.fillStyle='#9f00b0';
        context.fill();
        context.closePath();
        context.beginPath();
        context.strokeStyle ='#692900';
        context.moveTo(590,349);
        context.lineTo(750,300);
        context.lineTo(910,349);
        context.fillStyle='#692900';
        context.closePath();
        context.fill();
        context.moveTo(850,350);
        context.lineTo(880,350);
        context.lineTo(880,300);
        context.lineTo(850,300);
        context.closePath();
        context.fill();
        context.stroke();
        context.fillStyle='#692900';
        context.closePath();
        context.fill();
        context.moveTo(725,450);
        context.lineTo(755,450);
        context.lineTo(755,400);
        context.lineTo(725,400);
        context.closePath();
        context.fill();
        context.stroke();
    }
    function slonce() {
        context.beginPath();
        context.strokeStyle = '#ffbd00';
        context.fillStyle = '#ffbd00';
        context.beginPath();
        context.arc(220, 55, 50, 0, 2 * Math.PI);
        context.fill();
        context.stroke();

    }
    function droga() {
        context.beginPath();
        context.lineWidth=8;
        context.strokeStyle = '#0041ff';
        context.fillStyle = '#0041ff';
        context.moveTo(86,59);
        context.lineTo(73,41);
        context.lineTo(62,47);
        context.lineTo(45,58);
        context.lineTo(44,59);
        context.lineTo(40,70);
        context.lineTo(80,84);
        context.lineTo(82,84);
        context.lineTo(142,84);
        context.lineTo(149,80);
        context.lineTo(154,73);
        context.lineTo(149,46);
        context.lineTo(138,46);
        context.lineTo(137,46);
        context.lineTo(131,55);
        context.lineTo(129,50);
        context.lineTo(124,40);
        context.lineTo(119,38);
        context.lineTo(107,53);
        context.lineTo(99,42);
        context.lineTo(95,45);
        context.lineTo(90,53);
        context.lineTo(86,59);
        context.fill();
        context.stroke();

    }
    function chmura(){
        context.strokeStyle ='#793d01';
        context.fillStyle = '#793d01';
        context.beginPath();
        context.moveTo(200,300);
        context.quadraticCurveTo(500, 400 ,500, 500);
        context.lineTo(430,500);
        context.quadraticCurveTo(400, 400 ,150, 350);
        context.closePath();
        context.fill();
        context.stroke();

    }




    window.addEventListener("load", choinka(-110,300), true);
    window.addEventListener("load", choinka(-70,300), true);
    window.addEventListener("load", choinka(-40,300), true);
    window.addEventListener("load", choinka(-10,300), true);
    window.addEventListener("load", choinka(-110,180), true);
    window.addEventListener("load", choinka(-70,180), true);
    window.addEventListener("load", choinka(-40,180), true);
    window.addEventListener("load", choinka(-10,180), true);
    window.addEventListener("load", choinka(-110,60), true);
    window.addEventListener("load", choinka(-70,60), true);
    window.addEventListener("load", choinka(-40,60), true);
    window.addEventListener("load", choinka(-10,60), true);



    window.addEventListener("load", domek, true);
    window.addEventListener("load", slonce, true);
    window.addEventListener("load", droga, true);
    window.addEventListener("load", chmura, true);




</script>

</body>
</html>
