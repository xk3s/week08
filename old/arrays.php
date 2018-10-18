<?php

/* indexed array */

$newContent = array("Richie", "16", "Orange");
$newContent = array("Jacob", "17", "Magneto");

/* multidimensional indexed array */

$newContent = array(
    array("Richie", "16", "Orange"),
    array("Jacob", "17", "Magneto"),
    array("Sterling", "16", "Purp")
    );
    
for($i=0; $i<3; $i++) {
    //echo $i."<br>";
    //echo "Hello, my name is ".$newContent[$i][0]."<br>";
   // echo "I am ".$newContent[$i][1]." years old<br>";
   // echo "My favorite color is ".$newContent[$i][2]."<br>";
}

//echo "<select>";
    for($i=0; $i<3; $i++) {
       // echo "<option>".$newContent[$i][0]."</option>";
    }
    
//echo "</select>";
//echo "<br><br>";

// associative arrays

$myContent = array(
    "name"=>"Richie",
    "age"=>"16",
    "color"=>"Orange"
    );
    
//echo $myContent["name"]."<br>";

/* associative multidimensinal array */

$myContent = array(
    "Richie"=>array(
        "age"=>"16",
        "color"=>"Orange"
        ),
    "Jacob"=>array(
        "age"=>"17",
        "color"=>"magneto"
        ),
    "Sterling"=>array(
        "age"=>"16",
        "color"=>"purple"
        )    
    );
    
 //echo $myContent ["Sterling"]["age"];
    
    /* indexed multidimensinal array */
    
    $myContent = array(
    array(
        "name"=>"Richie",
        "age"=>"16",
        "color"=>"Orange"
        ),
    array(
        "name"=>"Jacob",
        "age"=>"17",
        "color"=>"magneto"
        ),
    array(
        "name"=>"Sterling",
        "age"=>"16",
        "color"=>"purple"
        )    
    );
    
    //echo $myContent[1]["age"]."<br>"
    
    $myNav = array(
        array(
            "title"=>"Home",
            "page"=>"index.php"
            ),
            array(
                "title"=>"Contact",
                "page"=>"contact.php"
                ),
                array(
                    "title"=>"About",
                    "page"=>"about.php"
                    ),
                    array(
                    "title"=>"Bob",
                    "page"=>"bob.php"
                    ),
                 );
                 
    // homework: create a navigation from the $myNav array using a for loop
    // result should look like the nav.php file

$myNavCount = count($myNave);


 
 
?>