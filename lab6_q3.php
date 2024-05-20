<!DOCTYPE html>
<html lang="en">

<?php 
function area_calculation($length = 2, $width = 4)
{
    $area = $length * $width;
    echo "The area of a rectangle with a width of $width and $length is: $area";
}

area_calculation();
?>
</html>