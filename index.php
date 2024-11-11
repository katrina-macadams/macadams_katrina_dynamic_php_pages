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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow&family=Raleway:wght@500&display=swap" rel="stylesheet">
    <title>Employee Profiles</title>
</head>

<body>

<main>
    <h1>Springfield Employee Profiles</h1>

    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <!-- Thumbnail Section -->
        <section class="thumb-box">
            <div class="thumb-card">
                <img class="thumb-img" src="images/<?php echo $row['thumb']; ?>" alt="<?php echo $row['fname']; ?>">
                <div>
                    <h3><?php echo $row['fname'] . " " . $row['lname']; ?></h3>
                    <p><?php echo $row['title']; ?></p>
                </div>
            </div>
        </section>

        <!-- Full Card Section -->
        <section class="card-box">
            <div class="card-holder">
                <div class="card">
                    <img class="card-image" src="images/<?php echo $row['image']; ?>" alt="<?php echo $row['fname']; ?>">
                    <h3><?php echo $row['fname'] . " " . $row['lname']; ?></h3>
                    <p><?php echo $row['title']; ?></p>
                    <p class="bio">
                    <?php echo $row['bio']; ?>
                    </p>
                </div>
            </div>
        </section>
    <?php 
    
    }?>
    
</main>

</body>
</html>
