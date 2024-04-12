  if(!isset($_SERVER['HTTP_REFERER'])){
        // redirect them to your desired location
        header('location: http://localhost/coffee-blend/index.php');
        exit;
    }