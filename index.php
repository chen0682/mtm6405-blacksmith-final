<?php require 'settings.php'; ?>
<?php require 'blacksmith.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blacksmith with PHP</title>
  <link rel="stylesheet" href="blacksmith.css">
</head>

<body>
  <h1>Blacksmith</h1>
  <div id="response" class="response">
    <?php if (isset($_SESSION['blacksmith']['response'])) : ?>
      <?php echo getResponse(); ?>
    <?php else : ?>
      <?php echo updateResponse(help()); ?>
    <?php endif; ?>
  </div>
  <form method="post">
    <input type="text" name="command" class="action" autofocus>
  </form>
  <a class="clear" href="?clear">Clear Session</a>
  <script src="blacksmith.js"></script>
</body>

</html>