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
        height: 20%;width: 15%;
        border:1px solid black;
      }
      #doing{
        position:fixed;
        top:10%;left:25%;right:auto;bottom:auto;
        height: 15%;width: 45%;
      }
      .doing{
        margin-top: 5%;
        font-family: 微軟正黑體;
        font-size: 50px;
      }
      #calendar{
        position:fixed;
        top:10%;left:70%;right:10%;bottom:auto;
        height: 25%;width: 20%;
        background-color: lightgreen;
        position: relative;
      }
      #manage{
        position:fixed;
        top:30%;left:10%;right:0%;bottom:auto;
        height: 75%;width: 15%;
        background-color: #EE9964;
      }
      #news{
        position:fixed;
        top:25%;left:25%;right:0%;bottom:auto;
        height: 30%;width: 45%;
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
      #remind{
        position:fixed;
        top:35%;left:70%;right:0%;bottom:auto;
        height: 75%;width: 20%;
        background-color: lightgray;
      }
      #activity{
        position:fixed;
        top:55%;left:25%;right:0%;bottom:auto;
        height: 45%;width: 45%;
        background-color: lightblue;
      }
    </style>
  </head>
  <body>
    <div id="title">
    </div>
    <div id="user">
      <form>
        <div class="form-group">
          <label>管理者</label>
          <input type="text" id="account" class="form-control">
        </div>
        <button type="submit" class="btn btn-default">登出</button>
      </form>
    </div>
    <div id="doing">
      <table class="doing" align="center" width="100%">
        <tr align="center">
          <td><input type="button" type="submit" class="btn" value="新增公佈欄" onclick="javascript:location.href='manage-news.html'"/></td>
          <td><input type="button" type="submit" class="btn" value="新增活動" /></td>
        </tr>
      </table>
    </div>
    <div id="calendar">日曆</div>
    <div id="manage">管理選項
      <table class="doing" align="center" width="100%">
        <tr align="center">
          <td><input type="button" type="submit" class="btn" value="新增成員" onclick="javascript:location.href='manage-join.php'"/></td>
        </tr>
      </table>
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
          <td width="10%"><input type="button" value="修改"></td>
          <td width="10%"><input type="button" value="刪除"></td>
        </tr>
        <tr>
          <td>123</td>
          <td>456</td>
          <td width="10%"><input type="button" value="修改"></td>
          <td width="10%"><input type="button" value="刪除"></td>
        </tr>
      </table>
    </div>
    <div id="remind">提醒</div>
    <div id="activity">活動</div>
  </body>
</html>
