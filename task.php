<?php

// ? Meta
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">';


// ! Task 1
// $name = "Hamlet";
// for ($i = 0; $i <= 1000; $i++) {
//     echo $name."<br>";
// }



// ! Task 2
// $name = "Hamlet";
// for ($i=0; $i < 100; $i++) { 
//     echo "<h1>".$name."</h1>";
// }



// ! Task 3
// for ($i=1; $i <= 1000; $i++) { 
//     echo $i."<br>";
// }



// ! Task 4
// for ($i=0; $i <= 1000; $i+= 2) { 
//     echo $i."<br>";
// }



// ! Task 5
// for ($i=1000; $i >= 0; $i--) { 
//     echo $i."<br>";
// }



// ! Task 6
// echo "<ul class='list-group'>";
// for ($i=0; $i < 15; $i++) { 
//     echo "<li class='list-group-item'>$i</li>";
// }
// echo "</ul>";



// ! Task 7
// echo '<select class="form-select" aria-label="Default select example">';
// echo '<option selected>Open this select menu</option>';
// for ($i=0; $i < 50; $i++) { 
//     echo "<option value='$i'>$i</option>";
// }
// echo "</select>";



// ! Task 8
// for ($i=0; $i < 1000; $i++) {
//     if ($i % 2 === 0) {
//         $class = "alert-success";
//     } else {
//         $class = "alert-danger";
//     }
//     echo "<div class='alert $class' role='alert'>$i</div>";
// }



// ? ----------------------------------------------------------


// !
// $arr = [1, 2, 3, 4, 5];
// for ($i=0; $i < count($arr); $i++) { 
//     echo $arr[$i]."<br>";
// }



// !
// $arr = [];
// for ($i=0; $i <= 10; $i++) { 
//     $arr[] = rand(0, 100);
// }



// !
$food_names = ["apple", "cake", "pasta", "bread"];
$shoping_list = [];
for ($i=0; $i < count($food_names); $i++) { 
    $shoping_list[$food_names[$i]] = rand(1, 10);
}

print "<pre>";
print_r($shoping_list);
print "</pre>";
?>