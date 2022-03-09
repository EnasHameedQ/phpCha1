<body>
    <?php
    $students = array("1" => "John", "2" => "David", "3" => "John", "4" => "Peter", "5" => "Kevin", "6" => "Camren", "7" => "Peter", "8" => "David");

    $uniqueArry = array();

    foreach ($students as $startWith => $student) { //Loop1 

        foreach ($uniqueArry as $uniqueValue) { //Loop2 

            if ($student == $uniqueValue) {
                continue 2;
            }
        }
        $uniqueArry[$startWith] = $student;
    }
    print_r($uniqueArry);

    ?>
</body>

</html>