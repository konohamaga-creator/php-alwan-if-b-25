<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1 - Kelipatan 3 dan 5</title>
</head>
<body>

    <ul>
        <?php
        for ($i = 1; $i <= 100; $i++) {
            // Cek apakah $i kelipatan 3 DAN kelipatan 5
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "<li>$i</li>";
            }
        }
        ?>
    </ul>

</body>
</html>