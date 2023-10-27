<?php

require __DIR__ . "/shelf.php";

if (isset($_GET["filter"])) {

    $filter = $_GET['filter'];

    if ($filter === "title") {
        ksort($books);
    }
    if ($filter === "author") {
        $author = array_column($books, 'author');
        array_multisort($author, SORT_ASC, $books);
    }
    if ($filter === "genre") {
        $author = array_column($books, 'genre');
        array_multisort($author, SORT_ASC, $books);
    }
    if ($filter === "year") {
        $author = array_column($books, 'year');
        array_multisort($author, SORT_DESC, $books);
    }
    if ($filter === "pages") {
        $author = array_column($books, 'pages');
        array_multisort($author, SORT_ASC, $books);
    }
}
function colorClass($book)
{
    return $book['color'];
};

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
    <h1><a href="layout.php">Bookshelf</a></h1>
    <main>
        <section class="buttons">

            <form action="layout.php?filter=title" method="post">
                <button>Title</button>
            </form>
            <form action="layout.php?filter=author" method="post">
                <button>Author</button>
            </form>
            <form action="layout.php?filter=genre" method="post">
                <button>Genre</button>
            </form>
            <form action="layout.php?filter=year" method="post">
                <button>Year</button>
            </form>
            <form action="layout.php?filter=pages" method="post">
                <button>Amount of pages</button>
            </form>
            <form action="layout.php" method="post">
                <input name="search" type="text" placeholder="Search..">
                <button name="searchsubmit" type="submit">Search</button>
            </form>
            <form action="layout.php? method=" post">
                <button class="reset">Reset</button>
            </form>
        </section>

        <div class="bookshelf">
            <?php foreach ($books as $title => $book) { ?>

                <div class="book-container 
                <?php if (isset($_POST['search'])) {
                    $searchInput = $_POST['search'];

                    if (stripos($title, $searchInput) === false && stripos($book['author'], $searchInput) === false) {
                        echo "notSelected";

                        //Loopa igenom och skapa en ny array som jag sedan jämför med//
                    }
                } ?>">
                    <div class="book <?= colorClass($book) ?>">
                        <p><?php echo strtoupper($title) ?></p>
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