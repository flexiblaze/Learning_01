<!DOCTYPE HTML>
<html>
<head>
    <title>
        How to change the background color
        after clicking the button ?
    </title>
</head>

<body style = "text-align:center;">

<h1 style = "color:green;" >
    GeeksForGeeks
</h1>

<p id = "GFG_UP" style =
"font-size: 16px; font-weight: bold;">
</p>

<button onclick = "gfg_Run()">
    Click here
</button>

<p id = "GFG_DOWN" style =
"color:green; font-size: 20px; font-weight: bold;">
</p>

<script>
    var el_up = document.getElementById("GFG_UP");
    var el_down = document.getElementById("GFG_DOWN");
    var str = "Click on button to change the background color";

    el_up.innerHTML = str;

    function changeColor(color) {
        document.body.style.background = color;
    }

    function gfg_Run() {
        changeColor('yellow');
        el_down.innerHTML = "Background Color changed";
    }
</script>
</body>
</html>