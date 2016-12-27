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
      <form role="form" action="/home/add" method="POST">
        <div class="form-group">
          <label for="exampleInputTitle">Title</label>
          <input type="text" name="title" class="form-control" id="exampleInputTitle" placeholder="Title">
        </div>
        <div class="form-group">
          <label for="exampleInputContent">Content</label>
          <textarea class="form-control" name="content"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Add</button>
      </form>
    </div>
    <script src="/style/js/jquery.min.js"></script>
    <script src="/style/js/bootstrap.min.js"></script>
  </body>
</html>