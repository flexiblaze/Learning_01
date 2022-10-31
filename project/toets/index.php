<!DOCTYPE HTML>

<head>
    <title>
        Toets
    </title>
</head>
<style>
    button{
        width: auto;
        height: auto;

    }</style>
<?php


$name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name"  value="<?php echo $name; ?>">
    <input type="Submit" name="" value="Submit">
</form>


<body style="text-align:center;">

<p id="GFG_UP" style=
"font-size: 16px; font-weight: bold;">
</p>
<footer>
    <input type="checkbox" onclick="lightblue()" value="Light Blue">
    <input type="checkbox" onclick="light()" value="Light Coral">
    <input type="checkbox" onclick="lightyellow()" value="Light Yellow">
    <input type="checkbox" onclick="lightgrey()" value="Light Grey">
</footer>

<script>
    function lightblue() {
        document.body.style.backgroundColor = "lightblue";
    }

    function light() {
        document.body.style.backgroundColor = "lightcoral";
    }

    function lightyellow() {
        document.body.style.backgroundColor = "lightyellow";
    }

    function lightgrey() {
        document.body.style.backgroundColor = "lightgrey";
    }

</script>


</body>
</html>