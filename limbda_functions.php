<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lambda Functions</title>
  <style>
      body {
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          /* height: 100vh; */
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

      .body-content {
        margin: 40px 0;
      }
    </style>
</head>
<body>
    <div class="body-content">
      <?php
      $title = "Recommanded Book";

      $books = [
        [
          "name" => "Xonsectetur adipisicing elit.",
          "author" => "accusamus exercitationem",
          "release_year" => 2000,
          "purchaseUrl" => "https://website.com"
        ],
        [
          "name" => "Zorporis juwiuti",
          "author" => "Andy Wair",
          "release_year" => 2015,
          "purchaseUrl" => "https://website5.com"
        ],
        [
          "name" => "Ttaque officia",
          "author" => "Woluptas culp",
          "release_year" => 2005,
          "purchaseUrl" => "https://website2.com"
        ],
        [
          "name" => "Rnventore tenetur",
          "author" => "Donsequatur quam",
          "release_year" => 2008,
          "purchaseUrl" => "https://website3.com"
        ],
        [
          "name" => "Sorporis obcaecati",
          "author" => "Andy Wair",
          "release_year" => 2011,
          "purchaseUrl" => "https://website4.com"
        ]
        
      ];

      // functions start
      // function filter($items, $fn) 
      // {
      //   $filteredItems = [];
        
      //   foreach($items as $item) {
      //     if($fn($item)) {
      //       $filteredItems[] = $item;
      //     }
      //   }
        
      //   return $filteredItems;
      // }
      // functions end

      $filteredBooks = array_filter($books, function($book) {
        return $book['author'] === "Andy Wair";
      });
      ?>

      <ul>
 
        <?php foreach($filteredBooks as $book) : ?>
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
              <strong>Date:</strong> <?= $book['release_year'] ; ?>
            </p>
            <p>
              <strong>Purchese URL:</strong> <?= $book['purchaseUrl'] ; ?>
            </p>
          </li>
        <?php endforeach;?>
      </ul>
    </div>
</body>
</html>