<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:16
 */
namespace to;
use Colorable;

include_once ('Rectangle.php');

class Square extends Rectangle implements Colorable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }

    function howToColor()
    {
        return 'Color all four sides.';
        // TODO: Implement howToColor() method.
    }
}