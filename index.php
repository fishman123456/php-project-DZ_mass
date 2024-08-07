<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP App</title>
</head>
<body>
    <h1>Массивы</h1>

    <p>
    Задача 1. Junior  07-08-2024<br>
     Заданы 2 массива. Необходимо вывести эти массивы, затем создать третий массив,<br>
     который состоит из элементов, присутствующих и в первом и во втором массивах.<br>
     Вывести полученный массив.<br>
     Можно использовать вспомогательный код для генерации исходных данных.<br>

    </p>
    <?php
        // минимальное и максимальное значение элементов в массиве
        $n = 10; $min = -100; $max = 100;
        // первый массив
        $arrOne = array();
        for($i=0; $i<$n; $i++ ){
        $arrOne[$i] = rand($min,$max);
        }
        echo var_dump($arrOne).'<br>';

        // второй массив
        $arrTwo = array();
        for($i=0; $i<$n; $i++ ){
        $arrTwo[$i] = rand($min,$max);
        }
        echo var_dump($arrTwo).'<br>';
        $letterMap =[];

          // третий массив
          $arrThree = array();
        // проверяем совпадения елементов
        for($i = 0; $i < count($arrOne); $i++){
            if(isset($arrTwo[$arrOne[$i]])){
            $letter = $arrOne[$i];
            $arrThree[$i] = $letter;}
           
        }
        echo 'Совпадение: '. count((array) $arrThree).'<br>';
        echo var_dump($arrThree).'<br>';   
    ?>
    <p>
    Задача 2. Middle<br>
    Заданы 2 даты (первая не позже второй).<br> 
    Даты заданы с точностью до дня (дд.мм.гггг) – можно использовать строки либо тип даты php.<br> 
    Необходимо создать ассоциативный массив (далее мапа),<br> 
    ключами которого являются все даты начиная с первой даты и по вторую включительно, <br>
    а значениями являются названия соответствующих дате-ключу дней недели. Вывести полученную мапу.<br>
    Задача 3. Senior <br><br>
    Заданы 2 строки содержащие значения двух IPv4 адресов. <br>
    Необходимо собрать массив всех IP-адресов,<br> 
    находящихся в диапазоне между первым и вторым заданными ip-адресами.<br> 
    Вывести полученный массив, а также вывести кол-во ip-адресов в диапазоне.<br> 
    Считать, что диапазон задан корректно.<br>
    Пример:<br>
    ip1 = 172.16.1.1<br>
    ip2 = 172.18.5.4<br>
    Вывод:<br>
    172.16.1.1<br>
    172.16.1.2<br>
    172.16.1.3<br>
    …<br>
    172.16.2.1<br>
    172.16.2.2<br>
    172.16.3.4<br>
    …<br>
    172.16.255.255<br>
    172.17.1.1<br>
    …<br>
    </p>
</body>
</html>
