<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP LA</title>

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
    <h1>
      <?php
      echo "Hello PHP";
      ?>
    </h1>
    <p>
      <?php
        echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quos, maiores facilis corrupti debitis corporis quia tempora repellendus sit quasi."
      ?>
    </p>

    <div class="new_section">
      <?php
        $name = "Dark Mater";
        $red = true;
      
      if ($red) {
        $message = "You have red $name";
      } else {
        // $message = "You don't have red $name";
        $message = "";
      }
      ?>
      <h2>
         <?php echo $message;?>
         <?=  $message ?>
      </h2>
    </div>
  </body>
</html>
