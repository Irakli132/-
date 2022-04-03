
<?php 
//Создадим переменные всех цветов
$green = 0;

$red = 0;

$blue = 0;

//Также объявим результат

$result = 0;

$input = ["green", "red", "blue", "green", "green", "blue", "red", "red"];


//Создадим цикл, который будет прогонять массив и будет записывать число перчаток
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
