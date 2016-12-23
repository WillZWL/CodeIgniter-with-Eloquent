<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CI2 with Eloquent</title>
</head>
<body>
  <ul>
    <?php
    foreach ($articles as $article) {
    ?>
    <li>
      <h1><a href="home/detail/<?=$article->id?>"><?=$article->title?></a></h1>
      <p><?=$article->content?></p>
    </li>
    <?php
      }
    ?>
  </ul>
</body>
</html>