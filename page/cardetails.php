

<!DOCTYPE html>
<html>
<head>
    <title>Car Details</title>
    <link href="assets/css/styles2.css" rel="stylesheet">
</head>
<body>
    <a href="../index.php" class="back-link">← Back to list</a>
    
    <?php
    $cars = [
        1 => ["Toyota", "Camry", 2020, "Silver", "2500 miles", "assets/img/camry.jpg"],
        2 => ["Honda", "Civic", 2021, "Blue", "6000 miles", "assets/img/civic.jpg"],
        3 => ["Ford", "Focus", 2019, "Blue", "5000 miles", "assets/img/focus.jpg"],
        4 => ["Acura", "NSX", 2000, "Red", "1000 miles", "assets/img/nsx.jpg"],
        5 => ["Toyota", "Supra", 2020, "White", "2500 miles", "assets/img/supra.jpg"],
        6 => ["Mclaren", "F1", 2000, "Orange", "0 miles", "assets/img/mclaren_f1.jpg"]
    ];
    
    $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
    if($id > 0 && isset($cars[$id])) {
        $car = $cars[$id];
        echo '<div class="details">';
        echo '<div class="car-image"';
        echo '<img src="../assets/img/' . $car[5] .'" alt="' . $car[0] . ' ' . $car[1] .'">';
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