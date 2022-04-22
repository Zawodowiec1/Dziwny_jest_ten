<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <header id=b1>
        <img src="logo1.png" alt="Mój kalendarz">
    </header>
    <header id=b2>
        <h1>KALENDARZ</h1>
    </header>
    <main>
    <?php
    require("connect.php");

    $qr = "SELECT dataZadania, miesiac, wpis FROM `zadania` WHERE miesiac = 'lipiec'";
    $result = $conn->query($qr);
    while($row = $result->fetch_assoc()){
        $data = $row['dataZadania'];
        $miesiac = $row['miesiac'];
        $wpis = $row['wpis'];

        echo '<div>';
        echo "<h5>$data, $miesiac</h5>";
        echo "<p>$wpis</p>";
        echo '</div>';
    }
    mysqli_close($conn)

    ?>
    </main>
    <?php
    require("connect.php");
    if(isset($_POST['wydarzenie'])){

        $wydarzenie = $_POST['wydarzenie'];
        $qr = "UPDATE zadania SET wpis = '$wydarzenie' WHERE dataZadania = '2020-07-13'";
        $conn->query($qr);
        $conn->close();
    }

    ?>
    <footer id="stopka">
        <form action="kalendarz.php" method="POST">
            <label for="wpis">dodaj wpis: <input type="text" name="wydarzenie"> <button type="submit">DODAJ</button></label>
            <br>
            <p>Stronę wykonał: Kacper</p>
        </form>
    </footer>
</body>
</html>