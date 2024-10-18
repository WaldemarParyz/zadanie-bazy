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
        <H1>J.Polski</H1>
        <section>
            <?php
            $polaczenie = mysqli_connect('localhost','root','','szkola');

            $dane = "SELECT * FROM polski";

            $wynik = mysqli_query($polaczenie, $dane);

            while ($polski = mysqli_fetch_assoc($wynik))

            echo "<div class= 'bloczki'> Nr. " .$polski['ID']. "<br>Imie: " .$polski['Imie']. "<br>Nazwisko: " .$polski['Nazwisko']. "<br>Ocena: " .$polski['Ocena']. "</div>";

            mysqli_close($polaczenie);
           ?>
           </section>
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