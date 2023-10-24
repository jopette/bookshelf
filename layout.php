<?php

require __DIR__ . "/shelf.php";


if (isset($_GET["filter"])) {
    $filter = $_GET['filter'];

    if ($filter === "title") {
        ksort($books);
    }
}

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
            <form action="layout.php?filter=title" method="post">
                <button>Title</button>
            </form>
            <form action="layout.php?filter=author" method="post">
                <button>Author</button>
            </form>
            <form action="layout.php?filter=year" method="post">
                <button>Year</button>
            </form>
            <form action="layout.php?filter=pages" method="post">
                <button>Amount of pages</button>
            </form>
        </section>


        <div class="bookshelf">
            <?php foreach ($books as $title => $book) { ?>

                <div class="book-container">
                    <div class="book 
                    
                    <?php if ($book['color'] === 'yellow') {
                        echo "yellow";
                    }
                    if ($book['color'] === 'purple') {
                        echo "purple";
                    }
                    if ($book['color'] === 'green') {
                        echo "green";
                    }
                    if ($book['color'] === 'black') {
                        echo "black";
                    }
                    if ($book['color'] === 'white') {
                        echo "white";
                    }
                    if ($book['color'] === 'red') {
                        echo "red";
                    }
                    if ($book['color'] === 'blue') {
                        echo "blue";
                    }

                    ?>">
                        <p><?= $title ?></p>
                        <p><?= $book['author'] ?></p>
                    </div>
                    <div class="info">
                        <p><?= $book['genre'] ?></p>
                        <p><?= $book['year'] ?></p>
                        <p>Pages: <?= $book['pages'] ?></p>
                    </div>
                </div>

            <?php }; ?>

        </div>
    </main>

</body>

</html>