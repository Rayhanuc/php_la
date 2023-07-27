<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Associative Array</title>
  <style>
      body {
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          height: 100vh;
      }

      ul li {
        list-style: none;
      }

      li.sigle_reader {
          padding: 15px;
          border: 1px solid gray;
          margin-bottom: 5px;
          border-radius: 10px;
      }
    </style>
</head>
<body>
    <div class="body-content">
      <?php
      $title = "Recommanded Book";

      $books = [
        [
          "name" => "consectetur adipisicing elit.",
          "author" => "accusamus exercitationem",
          "release_date" => 2000,
          "purchaseUrl" => "https://website.com"
        ],
        [
          "name" => "corporis juwiuti",
          "author" => "Andy Wair",
          "release_date" => 2015,
          "purchaseUrl" => "https://website5.com"
        ],
        [
          "name" => "itaque officia",
          "author" => "voluptas culp",
          "release_date" => 2005,
          "purchaseUrl" => "https://website2.com"
        ],
        [
          "name" => "inventore tenetur",
          "author" => "consequatur quam",
          "release_date" => 2008,
          "purchaseUrl" => "https://website3.com"
        ],
        [
          "name" => "corporis obcaecati",
          "author" => "Andy Wair",
          "release_date" => 2011,
          "purchaseUrl" => "https://website4.com"
        ]
        
      ];


      function filterByAuthor($books, $author) {
        $filterBooks = [];

        foreach($books as $book) {
          if($book['author'] === $author) {
            $filterBooks[] = $book;
          }
        }

        return $filterBooks;
      }


      ?>

      <ul>
 
        <?php foreach(filterByAuthor($books, 'voluptas culp') as $book) : ?>
          <li class="sigle_reader">
            <a href="<?= $book['purchaseUrl'] ; ?>">
              <h2>
                <stron>Name:</stron> <?= ucfirst($book['name']) ; ?>
              </h2>
            </a>
            <p>
              <strong>Author:</strong> <?= ucfirst($book['author']) ; ?>
            </p>
            <p>
              <strong>Date:</strong> <?= $book['release_date'] ; ?>
            </p>
          </li>
        <?php endforeach;?>
      </ul>
    </div>
</body>
</html>