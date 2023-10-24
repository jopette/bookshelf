<?php

require __DIR__ . "/shelf.php";


// foreach ($books as $title => $facts) {

//     $titleArray[] = $title;
//     echo $facts['author'] . "<br>";
//     // foreach ($facts as $attributes => $value) {
//     //     echo $value . "<br>";
//     // };
// };

// sort($titleArray);
// // echo implode($titleArray);
// print_r($titleArray);


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
            <form action="layout.php" method="post">
                <button>Title</button>
                <button>Author</button>
                <button>Year</button>
                <button>Amount of pages</button>
            </form>
        </section>

        <div class="bookshelf">
            <?php foreach ($books as $title => $book) { ?>

                <div class="book-container">
                    <div class="book color red">
                        <p><?= $title ?></p>
                        <p><?= $book['author'] ?></p>
                    </div>
                    <div class="info">
                        <p><?= $book['genre'] ?></p>
                        <p><?= $book['year'] ?></p>
                        <p>Pages: <?= $book['pages'] ?></p>
                    </div>
                </div>

                <?php
                if (isset($_POST["author"])) {
                }
                ?>
            <?php }; ?>

        </div>
    </main>

</body>

</html>