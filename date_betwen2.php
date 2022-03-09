<!DOCTYPE html>
<html>

<body>

    <?php
    $now = time(); // or your date as well 
    $your_date = strtotime("2022-01-31");
    $datediff = $now - $your_date;
    echo round($datediff / (60 * 60 * 24));
    ?>

</body>

</html>