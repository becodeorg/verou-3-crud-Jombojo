<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodcard - track your collection of Pokémon cards</title>
</head>
<body>

<h1>Goodcard - track your collection of Pokémon cards</h1>

    <ul>
        <?php foreach ($cards as $card) : ?>
            <li>Name: <?= $card['name'] ?></li>
            <li>Level: <?= $card['lvl'] ?></li>
            <li>Type: <?= $card['type'] ?></li>
            <a href="index.php?action=edit&id=<?= $card['id'] ?>">Edit</a>
            <a href="index.php?action=delete&id=<?= $card['id'] ?>">Delete</a>
        <?php endforeach; ?>
    </ul>

    <form method="GET">
        <label for="name">Pokémon name</label>
        <input type="text" id="name" name="name">

        <label for="lvl">level</label>
        <input type="text" id="lvl" name="lvl">

        <label for="type">Pokémon type</label>
        <input type="text" id="type" name="type">

        <input type="submit" name="action" value="create">
    </form>


</body>
</html>