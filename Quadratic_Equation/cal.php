<?php
include "QuadraticEquation.php";
$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];
$quadratic = new QuadraticEquation($a, $b, $c);

echo "a: " . $quadratic->get_a();
echo "<br>";
echo "b: " . $quadratic->get_b();
echo "<br>";
echo "c: " . $quadratic->get_c();
echo "<br>";
if ($quadratic->getDiscriminant() > 0) {
    echo "x1 = " . $quadratic->getRoot1();
    echo "<br>";
    echo "x2 = " . $quadratic->getRoot2();
} elseif ($quadratic->getDiscriminant() === 0) {
    echo "x1 = x2 = " . $quadratic->getRoot();
} else
    echo "The equation has no roots";