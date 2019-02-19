<html lang="ru">
<head>
    <title>It's a FIRST TASK</title>
</head>
<body>
    <?php
        require __DIR__.DIRECTORY_SEPARATOR."first.php";

        function divide($num)
        {
            echo ("****************$num TASK****************");
        }
        function hw(){
            echo ("Hello world!");
        }
        function hwArr($arr) {
            echo ("$arr");
        }
        $hw = "Hello world";
        $someArr = ["nope","nope again","Hello world","nope too"];

        divide(1);
        echo ("Hello world!");
        echo ("Hello world!");
        echo ("Hello world!");
        divide(2);

        echo ("$hw".PHP_EOL."$hw".PHP_EOL."$hw");
        divide(3);

        for ($i=0;$i<3;$i++)
        {
            hw();
        }
        divide(4);


        hwArr($someArr);
        divide(5);

        echo strrev($hw);
        echo (substr($hw,1,4) + substr($hw,7));
        echo addslashes($hw);
        divide(6);

        $classExample = new SomeClass();
        $classExample->RecHW($classExample->hw,$classExample->count);
        divide(7);



    ?>
</body>
</html>
/**
 * Created by PhpStorm.
 * User: Шевченко Алексей
 * Date: 14.02.2019
 * Time: 13:39
 */