<html lang="ru">
<head>
    <title>It's a FIRST TASK</title>
</head>
<body>
    <?php
        require __DIR__.DIRECTORY_SEPARATOR."first.php";
        $count = 1;
        function divide($num)
        {
            echo ("****************$num TASK****************".PHP_EOL);
            return $num++;
        }
        function hw(){
            echo ("Hello world!");
        }
        function hwArr($arr) {
            echo ("$arr");
        }
        $hw = "Hello world";
        $someArr = ["nope","nope again","Hello world","nope too"];

        divide($count);
        echo ("Hello world!");
        echo ("Hello world!");
        echo ("Hello world!");
        divide($count);

        echo ("$hw".PHP_EOL."$hw".PHP_EOL."$hw");
        divide($count);


        for ($i=0;$i<3;$i++)
        {
            hw();
        }
        divide($count);


        hwArr($someArr);
        divide($count);

        echo strrev($hw);
        echo (substr($hw,1,4) + substr($hw,7));
        echo addslashes($hw);
        divide($count);

        $classExample = new SomeClass();
        $classExample->RecHW($classExample->hw,$classExample->count);
        divide($count);



    ?>
</body>
</html>
/**
 * Created by PhpStorm.
 * User: Шевченко Алексей
 * Date: 14.02.2019
 * Time: 13:39
 */