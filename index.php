<?php
    include 'Point.php';
    include 'MoveablePoint.php';

    $point = new Point(10,20);
    $move = new MoveablePoint(10,50,20,20);
    $move ->toString();
?>