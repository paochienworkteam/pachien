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
    <title>發佈消息</title>
    <style>
      #news{
        position:fixed;
        top:10%;left:15%;right:0%;bottom:auto;
        height: 80%;width: 70%;
      }
      .news{
        margin-top: 5%;
      }
      .title{
        width: 100%;
        font-size: 18px;
      }
      .content{
        width: 100%;
        height:300px;
        overflow-y: scroll;
      }
    </style>
  </head>
  <body>
    <div id="news">
    <form action="" method="post">
      <table border="2" align="center" class="news" width="80%">
        <tr>
          <td align="center" style="font-weight:bolder">標題</td>
          <td><input class="title" type="text"/></td>
        </tr>
        <tr>
          <td align="center" style="font-weight:bolder">內文</td>
          <td><textarea class="content"></textarea></td>
        </tr>
        <tr>
          <td align="center" style="font-weight:bolder">附加檔案</td>
          <td><input class="title" type="file"/></td>
        </tr>
        <tr>
          <td colspan="2" align="center" height="100"><input type="button" value="發佈至公佈欄"></td>
        </tr>
      </table>
    </form>
  </div>
  </body>
</html>
