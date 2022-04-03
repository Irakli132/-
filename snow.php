
<?php 

$green = 0;

$red = 0;

$blue = 0;

$result = 0;

$input = ["green", "red", "blue", "green", "green", "blue", "red", "red"];

for ($i=0; $i < count($input); $i++) {
    if ($input[$i] == "green") {
        $green += 1;
        continue;
    };

    if ($input[$i] == "red") {
        $red += 1;
        continue;
    };

    if ($input[$i] == "blue") {
        $blue += 1;
        continue;
    };
    
    return;

};

    echo $red;
?>