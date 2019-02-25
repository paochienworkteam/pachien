<!DOCTYPE html>
<?php
  echo "希望能完成網頁後端";
?>
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
      #title{
        position:fixed;
        top:0%;left:10%;right:0%;bottom:auto;
        height: 10%;width: 80%;
        background-color:lightpink;
        border:1px solid black;
      }
      #user{
        position:fixed;
        top:10%;left:10%;right:0%;bottom:auto;
        height: 30%;width: 20%;
        border:1px solid black;
      }
      #news{
        position:fixed;
        top:10%;left:30%;right:auto;bottom:auto;
        height: 30%;width: 40%;
        overflow-y: scroll;
      }
      .news{
        background-color: rgb(197,224,180);
        height:40px;
        color:#385723;
        font-size: 20px;
        font-family:標楷體;
        font-weight:bolder;
        padding-left: 90px;
      }
      .more{
        color:#595959;
        font-size: 15px;
        font-family:標楷體;
        font-weight:bolder;
        font-style: italic
      }
      .newsc tr:nth-child(odd) { background: rgb(208,206,206)}
      .newsc tr:nth-child(even) { background: #FFF}
      .newsc tr { height: 29px}
      .newsc td { padding-left: 15px;}
      #calendar{
        position:fixed;
        top:10%;left:70%;right:10%;bottom:auto;
        height: 30%;width: 20%;
        background-color: lightgreen;
      }
      #manage{
        position:fixed;
        top:40%;left:10%;right:0%;bottom:auto;
        height: 75%;width: 20%;
        background-color: #EE9964;
      }
      #activity{
        position:fixed;
        top:40%;left:30%;right:0%;bottom:auto;
        height: 65%;width: 40%;
        background-color: #F3D369;
      }
      #remind{
        position:fixed;
        top:40%;left:70%;right:0%;bottom:auto;
        height: 75%;width: 20%;
        background-color: lightgray;
      }
    </style>
  </head>
  <body>
    <div id="title">
    </div>
      <div id="user">
        <form>
          <div class="form-group">
            <label>使用者</label>
            <input type="text" id="account" class="form-control">
          </div>
          <button type="submit" class="btn btn-default">登出</button>
        </form>
      </div>
      <div id="news">
        <table class="news" width="100%">
          <tr align="center">
            <td align="center"><font class="news">公佈欄</font></td>
            <td width="15%"><font class="more">More...</font></td>
          </tr>
        </table>
        <table class="newsc" width="100%">
          <tr>
            <td width="30%">123</td>
            <td>456</td>
          </tr>
          <tr>
            <td>123</td>
            <td>456</td>
          </tr>
        </table>
      </div>
      <div id="calendar">日曆</div>
      <div id="manage">圈名</div>
      <div id="remind">提醒</div>
      <div id="activity">活動</div>
  </body>
</html>
