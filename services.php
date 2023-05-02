<?php


require_once "data.repo.php";

function DescSortDriver($driver1, $driver2)
{
    #check if both the values are equal
    if ($driver1['likeIts'] == $driver2['likeIts']) return 0;
    #check if not equal, then compare values
    return ($driver1['likeIts'] < $driver2['likeIts']) ? 1 : -1;
}
//Je fais une copie pour ne pas altérer
$driversTri = $drivers;
usort($driversTri, "DescSortDriver");

function DescSortCar($car1, $car2)
{
    #check if both the values are equal
    if ($car1['power'] == $car2['power']) return 0;
    #check if not equal, then compare values
    return ($car1['power'] < $car2['power']) ? 1 : -1;
}

$carsTri = $cars;
usort($carsTri, "DescSortCar");



function carPowerSwitch($power)
{

    switch ($power) {

        case $power < 1000:
            echo "<span class='badge badge-danger'>
                    $power  CH
                    </span>";
            break;

        case $power >= 1000 && $power <= 1200:
            echo "<span class='badge badge-warning'>
                    $power  CH
                    </span>";
            break;

        case  $power > 1200:
            echo "<span class='badge badge-success'>
                    $power  CH
                    </span>";
            break;

        default:
            echo "<span class='badge badge-primary'>
                    $power  CH
                    </span>";
            break;
    }
}


function driverCategorySwitch($category)
{
    switch ($category) {

        case $category == "formule 1":
            echo "
                    <span class='badge badge-success'>
                         $category 
                    </span>";
            break;

        case $category == "drag":
            echo "
                    <span class='badge badge-warning'>
                         $category 
                    </span>";
            break;

        case  $category == "gymkhana":
            echo " 
                    <span class='badge badge-info'>
                              $category
                    </span>";
            break;
        case  $category == "nascar":
            echo "  
                    <span class='badge badge-danger'>
                         $category 
                    </span>";
            break;
        case  $category  == "rallye":
            echo "  
                    <span class='badge badge-primary'>
                         $category 
                    </span>";
            break;

        default:
            echo " 
                    <span class='badge badge-secondary'>
                         $category
                    </span>";
            break;
    }
}
