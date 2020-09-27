<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/table.css">
    <title>Verwaltung</title>
</head>
<body>
<div class="container1">
    <nav>
        <div class="daireclass"><h5>GS</h5></div>
        <?php
        include 'nav.php';
        ?>
        <a href="#">Homepage</a>
        <a href="#">Users</a>
        <a href="#">Benutzer</a>
        <a href="#">Rolle</a>
        <a href="#">Rechte</a>
        <a href="#">Roll-Recht</a>
    </nav>
    <div class="container2">
        <header>
            <?php
            include 'header.php';
            ?>
        </header>
        <div class="content">
            <?php
            include 'ornek.php';
            ?>
        </div>
        <footer>
            <?php
            include 'footer.php';
            ?>
        </footer>
    </div>
</div>
</body>
</html>
