<?php 

require_once ('circle.php');
require_once ('triangle.php');
require_once ('rectangle.php');

if ($_SERVER ['REQUEST_METHOD'] === 'POST'){

    $shape = $_POST ['shape'];
    $measurement = $_POST ['measurement'];

    switch ($shape){
        case 'circle':
            $circle = new Circle ('Circle', $measurement);
            $area   = $circle -> getArea();
            break;
         case 'triangle':
            $triangle = new Triangle ('Triangle', $measurement, $measurement);
            $area   = $triangle -> getArea();
            break;
         case 'rectangle':
            $rectangle = new Rectangle ('Rectangle', $measurement, $measurement);
            $area   = $rectangle -> getArea();
            break;
        default:
            $area  = "Invalid Shape Selected";
    }

}
?>
<!DOCTYPE html>
<html lang="zxx">
    <head>
        <title>Measurement Various Shape Area Calculation</title>
    </head>
    <body>
        <?php if(isset($area)): ?>
        <h1><?php echo "Total Area of {$shape} is: "; ?></h1>
        <h5><?php echo $area; ?></h5>
        <?php endif; ?>
    </body>
</html>