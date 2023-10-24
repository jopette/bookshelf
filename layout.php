<?php

require __DIR__ . "/shelf.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Bookshelf</h1>
    <main>
        <section class="buttons">

            <button>Title</button>
            <button>Author</button>
            <button>Year</button>
            <button>Amount of pages</button>

        </section>

        <div class="bookshelf">
            <?php foreach ($books as $key => $book) { ?>
                <div class="book-container">
                    <div class="book color red">
                        <p><?= $key ?></p>
                        <p><?= $book['Author'] ?></p>

                    </div>
                    <div class="info">
                        <p><?= $book['Genre'] ?></p>
                        <p><?= $book['Year'] ?></p>
                        <p>Pages: <?= $book['Pages'] ?></p>
                    </div>
                </div>
            <?php }; ?>

        </div>
    </main>

</body>

</html>