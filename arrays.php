<?php
    /*
    ==================   ARRAYS  ====================
    1)  Numeric Array
    2)  Associative Array
    3)  Multi-dimensional Array

    */


    //  *************** Numeric Arrays  ***************
    echo "<h1>Numeric Arrays</h1>";


    //array declaration
    $full_name = array("David Igho", "Shade Oni", "Dele Taiwo", "Olamide Badmus", "Tokunbo Eze");

    echo "1st person's name: ".$full_name[0]."<br/>";
    echo "2nd person's name: ".$full_name[1]."<br/>";
    echo "3rd person's name: ".$full_name[2]."<br/>";
    echo "4th person's name: ".$full_name[3]."<br/>";
    echo "5th person's name: ".$full_name[4]."<br/>";

    // // How to change the value of a numeric array.
     $full_name[4] = "Rosemary Mba";
    echo $full_name[4];







    //  *************** Associative Arrays  ***************
    echo "<h1>Associative Arrays</h1>";

    $address = array(
                        "$full_name[0]" => "Maitama, Abuja",
                        "$full_name[1]" => "Ikeja, Lagos",
                        "$full_name[2]" => "Abaliki, Ebonyi",
                        "$full_name[3]" => "Ede, Osun",
                    );

    
    echo "$full_name[3] resides at <strong>".$address[$full_name[3]]."</strong>";









    //  *************** Multi-dimensional Arrays  ***************
    echo "<h1>Multi-dimensional Arrays</h1>";
    
  

    $bank_details = array(
                //Bank Name
                "Banks" => array("UBA", "GT Bank", "Access Bank"),
                //Account type
                "Account Type" => array("Savings Account", "Current Account", "Fixed-Deposit Account"),
                //Card type
                "ATM Card Type" => array("Visa", "Mastercard", "Verve")
            );
        
    
    echo "$full_name[1]'s Bank details are:<br/> <strong>Bank Name:</strong> ".$bank_details["Banks"][2].
         "<br/><strong>Account Type</strong>: ".$bank_details["Account Type"][1].
         "<br/><strong>ATM Card Type</strong>: ".$bank_details["ATM Card Type"][1]."<br/>";


    echo "<br/>$full_name[2]'s Bank details are:<br/> <strong>Bank Name:</strong> ".$bank_details["Banks"][1].
    "<br/><strong>Account Type</strong>: ".$bank_details["Account Type"][0].
    "<br/><strong>ATM Card Type</strong>: ".$bank_details["ATM Card Type"][0];




?>