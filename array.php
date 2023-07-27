<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array</title>
  <style>
      body {
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          height: 100vh;
      }
    </style>
</head>
<body>
    <div class="body-content">
      <?php
      $title = "Recommanded Book";

      $books = [
        "Book 1",
        "Book 2",
        "Book 3",
        "Book 4",
        "Book 5"
      ];
      ?>
      <h1><?php echo $title; ?></h1>

      <ul>
        <?php 
        // foreach($books as $book) {
        //   echo "<li>" . $book . "</li>";
        //   echo "<li>{$book}TM</li>";
          
        //   // echo "<li>Hello</li>";
        // }
        
        ?>


          <?php foreach($books as $book) : ?>
            <li><?= $book ?></li>

            <?php endforeach; ?>
      </ul>
    </div>
</body>
</html>