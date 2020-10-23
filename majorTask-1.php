<?php 

// ******** Program to display generated Username and Password for Users ******

function users() {

    // Array for usernames
    $usernames = ["Samir", "Obaro", "Efe", "Seyi", "Johnsoness"];

    // Random Number generation
    function random() {
        for ($i=0; $i < 3; $i++) { 
            $randnum = rand(100, 999);
            return $randnum;
        }
    } 

    //  Username Generator
    foreach ($usernames as $index => $name) {
        if (strlen($name) < 6) {
            $gen_username[$index] = $name.random();
         } elseif (strlen($name) <= 7 && strlen($name) < 8) {
            $gen_username[$index] = $name;
         } else {
             echo "<strong>Username cannot be greater than 8 or less than 6</strong> ";
         }
    }


    //Array for Password
    $passwords_headers = ["xyz", "uvw", "abc", "jkl", "pqr"];

    //Password Generator
    foreach ($passwords_headers as $index => $password) {
        $pass = $password.random().$password;
        $gen_password[$index] = $pass;
    }


    // Display Username and Passwords
    for ($i=0; $i < count($gen_username); $i++) { 
        echo "<h4>username : $gen_username[$i] <br/> password : $gen_password[$i]</h4>";
    }
}

users();


?>