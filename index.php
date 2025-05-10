<!DOCTYPE html>
<html>
<head>
    <title>Car List</title>
    <link href="assets/css/styles.css">
</head>
<body>
    <h1>Available Cars</h1>
    
    <div class ="car-container">
    <?php
    $cars = [
        1 => ["Toyota", "Camry", 2020],
        2 => ["Honda", "Civic", 2021],
        3 => ["Ford", "Focus", 2019]
    ];
    
    foreach ($cars as $id => $car) {
        echo '<div class="car">';
        echo '<h3>' . $car[0] . ' ' . $car[1] . '</h3>';
        echo '<p>Year: ' . $car[2] . '</p>';
        echo '<a href="assets/page/cardetails.php?id=' . $id . '">View Details</a>';
        echo '</div>';
    }
    ?>
    </div>
</body>
</html>