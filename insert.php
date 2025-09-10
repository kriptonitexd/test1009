<?php
    include('connection.php');

    $name = "Bobs";
    $age = 18;
    $occupation = "Programmer";
    $gender = "male";


    $sql = "INSERT into gitprok (name ,  age ,  occupation ,  gender) VALUES ('$name' , '$age' , '$occupation', '$gender')";

    if (mysqli_query($conn, $sql)) {
        echo "Dati veiksmīgi ievadīti!";
    } else {
        echo "Kļūda: " . mysqli_error($conn);
    }

?>