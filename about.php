<?php
    $conn = mysqli_connect('localhost', 'root', '', 'photography', 3307);

    if ($conn) {
        echo "Connection Successful";
    } else {
        die("Connection Failed: " . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    
    $query = "INSERT INTO users (name, email, number) VALUES ('$name', '$email', '$number')";


    if (mysqli_query($conn, $query)) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

  
    mysqli_close($conn);
    
    header('Location: index.php#Contact Us');
?>
