<html lang="en">
<head>
    <title>محاسبه معادله درجه دوم</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>محاسبه ریشه های معادله درجه دوم</h1>
        <form action="index.php" method="POST">

            <input type="text" name="a" required>
            <label for="a"> x<sup>2</sup> + </label>

            <input type="text" name="b" required>
            <label for="b"> x + </label>

            <input type="text" name="c" required>
            <label for="c"> = 0</label><br>

            <input type="submit" name="submit" value="محاسبه">
        </form>
    </div>
</body>
</html>

<?php 

if (isset($_POST['submit'])){

    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    $discriminant = ($b**2) - (4*$a*$c); // b^2-4ac
    $first_root = (-$b + (sqrt($discriminant))) / (2*$a); //First Root
    $second_root = (-$b - (sqrt($discriminant))) / (2*$a); // Second Root

    if ($discriminant < 0) {
        echo '<div class="result"><h3>'.$discriminant.' = دلتای معادله &Delta; </h3><div class="delta">&Delta; = '. $b . '<sup>2</sup> -(4 * '. $a ." * " . $c . ") = " . $discriminant . "</div>";
        echo '<h2>دلتای این معادله منفی است و فاقد ریشه می باشد</h2>';
        echo '</div>';

    }
else {
    echo '<div class="result"><h3>'.$discriminant.' = دلتای معادله &Delta; </h3><div class="delta">&Delta; = '. $b . '<sup>2</sup> -(4 * '. $a ." * " . $c . ") = " . $discriminant . "</div>";
    echo '<div class="first_root"><h3>'. $first_root .' = ریشه ی اول </h3><div class="top"> '.$b.'<sup>2</sup> - &radic; ' . $discriminant . '</div><div class="bottom">2 *' .$a .  '</div></div>'  ;
    echo '<h3>'. $second_root .' = ریشه ی دوم </h3><div class="top"> '.$b.'<sup>2</sup> + &radic; ' . $discriminant . '</div><div class="bottom">2 *' .$a . '</div>'  ;
    echo '</div>';
}}
?>
<a class="github-button" href="https://github.com/amirmalek0">Follow amirmalek0</a>
<script async defer src="https://buttons.github.io/buttons.js"></script>
