<html lang="ru">
<head>
    <title>It's a SECOND TASK</title>
</head>
<body>
    <?php
        class myExample {
            //Задание 3-2
            public static function stFriday($god) {
                $date = date_create('$god-01-01');
                $countDays = 0;
                for ($i=0;$i<365;$i++){
                    if (date_format($date,'w') == 5) {
                        $countDays++;
                    }
                    date_modify($date,'1 day');
                }
                echo ("С $god по $god+1: $countDays пятниц!");
            }
            //Задание 3-1
            function friday($god){
                $date = date_create('$god-01-01');
                $countDays = 0;
                for ($i=0;$i<365;$i++){
                    if (date_format($date,'w') == 5) {
                        $countDays++;
                    }
                    date_modify($date,'1 day');
                }
                echo ("С $god по $god+1: $countDays пятниц!");
            }
            function somePlace()
            {
                echo (PHP_EOL.PHP_EOL);
            }
        }
        $exClass = new myExample();
        $exClass->friday(2010);
        $exClass->somePlace();
        $exClass::stFriday(2015);


    ?>
</body>
</html>
