<!-- <div>
        <h1>
        <?= $greet . " " . "Everyone";
            ?>
        </h1>
        <h5>

            <?php


            if ($cond) {
                echo $book;
            } else {
                echo "Database By Korth Not Readed by Asif";
            }


            ?>
        </h5>

    </div>

    <div>


        <ul>
            <?php foreach ($books as $book) {
                echo "<li>{$book}™</li>";
            }; ?>
        </ul>
        <p>
            The Second item is :
            <?= $books[2 - 1]; ?>


        </p>

        <div style="border: 2px solid red; padding: 10px;">

            <h2>
                Associate Array Section
            </h2>
            <h4>
                The Name of the Books are <ul>
            </h4>
            <ul>
                <?php foreach ($secondBook as $sbook) : ?>
                    <li>
                        <a href="<?= $sbook['url']; ?>" target="_blank"><?= $sbook['name']; ?></a>

                    </li>
                    <li><?= $sbook['publication']; ?></li>


                <?php endforeach; ?>


            </ul>

        </div>
    </div> -->

    <!-- Filter Function -->
                    


    <!-- <ul>
    <?php foreach($filteredBooks($secondBook, 'Rahim') as $book) : ?>
        <?php if($book['yearPublished'] ) : ?>
            <li><?=$book['name'];?></li>

            <?php endif ; ?>


        <?php endforeach ;?>
        </ul> -->