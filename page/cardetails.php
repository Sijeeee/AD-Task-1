<!DOCTYPE html>
<html>
<head>
    <title>Car Details</title>
    <link href="assets/page/assets/css/styles.css">
</head>
<body>
    <a href="index.php">← Back to list</a>
    
    <?php
    
    $carDetails = [
        1 => ["Toyota", "Camry", 2020, "Silver", "2500 miles"],
        2 => ["Honda", "Civic", 2021, "Blue", "6000 miles"],
        3 => ["Ford", "Focus", 2019, "Blue", "5000 miles"],
        4 => ["Acura", "NSX", 2000, "Red", "1000 miles"],
        5 => ["Toyota", "Supra", 2020, "White", "2500 miles"],
        6 => ["Mclaren", "F1", 2000, "Orange", "0 miles"]
    ];
    
    if (isset($_GET['id']) && isset($carDetails[$_GET['id']])) {
        $id = $_GET['id'];
        $car = $carDetails[$id];
        
        echo '<div class="details">';
        echo '<h2>' . $car[0] . ' ' . $car[1] . '</h2>';
        echo '<p>Year: ' . $car[2] . '</p>';
        echo '<p>Color: ' . $car[3] . '</p>';
        echo '<p>Mileage: ' . $car[4] . '</p>';
        echo '</div>';
    } else {
        echo '<p>Car not found.</p>';
    }
    ?>
</body>
</html>