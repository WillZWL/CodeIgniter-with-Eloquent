<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CI2 with Eloquent</title>
    <link href="/style/css/bootstrap.min.css" rel="stylesheet">
  <body>
    <div class="container">
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
    </div>
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="/style/js/bootstrap.min.js"></script>
  </body>
</html>