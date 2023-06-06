<?php
 $error = "";
   if(array_key_exists('submit',$_GET)){
      if(!$_GET['city']){
        $error = "Input field is empty!";
      }
      if($_GET['city']){
        $apiData = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=".$_GET['city']."&appid=b53fd676c39b2a23c8fd49807ca836dd");
        $weatherArray = json_decode($apiData, true);
        print_r($weatherArray);
      }
   }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Weather Scraper</title>
  </head>
  <body>
    <div class="container">
        <h1>Search Global Weather</h1>
        <form method="GET">
            <label for="city">Enter your City Name</label>
            <p>
            <input type="text" name="city" id="city" class="form-control" placeholder="e.g. Lahore, Pakistan">
            </p>
            <button class="btn btn-success" name="submit" type="submit">Search</button>
        </form>
        <div class="output">
            <?php
              if (!empty($error)) {
                echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
              }
            ?>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>