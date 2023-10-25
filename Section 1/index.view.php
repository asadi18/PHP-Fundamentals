<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    
    

        <ul>
            <?php foreach($filteredBooks as $book): ?>
                <li>
                    <?= $book['publication']; ?> (<?= $book['url']?>) - By <?= $book['name']?> - Year <?= $book['yearPublished']?>
                </li>


                <?php endforeach ;?>
           
        </ul>


        

</body>

</html>