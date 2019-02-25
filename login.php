<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>寶建醫院</title>
    <style>
      #login{
        position: fixed;
        top:35%;right:35%;
        height: 30%;width: 30%;
        border:black solid 2px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div id="login" class="col-md-3">
        <form>
          <div class="form-group">
            <label style="font-size:20px">帳號</label>
            <input type="text" id="account" class="form-control">
          </div>
          <div class="form-group">
            <label style="font-size:20px">密碼</label>
            <input type="password" id="password" class="form-control">
          </div>
          <button type="submit" class="btn btn-default">登入</button>
          <button type="submit" class="btn btn-default">忘記密碼</button>
        </form>
      </div>
    </div>
  </body>
</html>
