<?php
  require __DIR__ . '/vendor/autoload.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $options = array(
      'cluster' => 'us2',
      'encrypted' => true
    );
    $pusher = new Pusher\Pusher(
      '299574b67ce36984466a',
      '2941196c34de0cd3783f',
      '538233',
      $options
    );

    $data['message'] = $_POST['msg'];
    $pusher->trigger('my-channel', 'my-event', $data);
  }
 
?>

<!DOCTYPE html>
<html>
<head>
  <title>Mensaje</title>
</head>
<body>
  <form method="POST">
    <input type="twxt" name="msg">
    <input type="submit" >
  </form>

</body>
</html>