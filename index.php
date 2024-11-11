

<!DOCTYPE html>
<html lang="en">
<?php
require_once('includes/connect.php');

$query = 'SELECT * FROM employees, jobs WHERE job_id = jobs.id;';

$results = mysqli_query($connect,$query);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/grid.css">
    <title>Employees Dynamic PHP Site</title>
</head>
<body>

    <h1>Springfield Employee's</h1>

<?php
    while($row = mysqli_fetch_array($results)) {

    echo '<section class="grid-con thumb-box">
        <h2 class="hidden">Employees</h2>
        <div class="l-col-span-full thumb-card">
            <img src="images/';
            
            echo $row['image'];
            
    echo '" alt="';
    
    echo $row ['fname'];
    
    echo '">
        </div>
    </section>

    <section class="grid-con card-box">
        <h2 class="col-span-full"></h2>
        <div class="col-span-full card-holder">
            <div class="card">
                <img src="images/';
                
    echo $row['thumb'];
    
    echo'" alt="';
    
    echo $row ['fname'];
    
    echo '">
                <h3>'; 
                echo $row ['fname'];
                echo " "; // add space
                echo $row ['lname'];
                echo '</h3>
                <p>';
                echo $row ['title'];
                echo '</p>
            </div>
        </div>
    </section>';

    }
    ?>

</body>
</html>

<!--  http://localhost:8888/macadams_katrina_dynamic_php_pages/index.php -->