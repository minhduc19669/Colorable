<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:17
 */
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');
use to\Circle;
use to\Cylinder;
use to\Rectangle;
use to\Square;
$shapes=[];
$shapes[0] = new Circle('Circle 01', 3);


$shapes[1] = new Cylinder('Cylinder 01', 3 , 4);


$shapes[2] = new Rectangle('Rectangle 01', 3 , 4);


$shapes[3] = new Square('Square 01', 4);
foreach ($shapes as $shape){
    echo $shape->show()."<br>";
    if ($shape instanceof Colorable){
        echo $shape->show().$shape->howToColor();
    }
}
