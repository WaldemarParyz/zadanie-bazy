<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Dziennik</h1>
    </header>

    <main>
        <H1>Matematyka</H1>
        <table border="1">
            <tr>
                <th>Nr</th>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Ocena</th>
            </tr>
            <?php
            $polaczenie = mysqli_connect('localhost','root','','szkola');

            $dane = "SELECT * FROM matematyka";

            $wynik = mysqli_query($polaczenie, $dane);

            while ($matematyka = mysqli_fetch_assoc($wynik))

            echo "<tr><td>" .$matematyka['ID']. "</td><td>" .$matematyka['Imie']. "</td><td>" .$matematyka['Nazwisko']. "</td><td>" .$matematyka['Ocena']. "</td></tr>";

            mysqli_close($polaczenie);
           ?>
        </table>
    </main>

    <aside>
            <ul>
            <li><a href="index.php">Matematyka</a></li>
            <li><a href="polski.php">J.Polski</a></li>
            <li><a href="angielski.php">J.Angielski</a></li>
            <li><a href="dodaj.php">Dodaj Ocene</li>
            </ul>
    </aside>

    <footer>
        <a href="https://zsz.bobowa.pl/">ZSZBobowa</a>
    </footer>
</body>
</body>
</html>