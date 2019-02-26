<?php
//載入 db.php 檔案，讓我們可以透過它連接資料庫，另外後台都會用 session 判別暫存資料，所以要請求 db.php 因為該檔案最上方有啟動session_start()。
require_once '../php/db.php';
require_once '../php/functions.php';
//print_r($_SESSION); //查看目前session內容

//如過沒有 $_SESSION['is_login'] 這個值，或者 $_SESSION['is_login'] 為 false 都代表沒登入
/*if(!isset($_SESSION['is_login']) || !$_SESSION['is_login'])
{
	//直接轉跳到 login.php
	header("Location: login.php");
}*/

//取得文章資料，從網址上的 i 取得文章id
$data = get_user($_GET['i']);
if(is_null($data))
{
	//如果data是空的
	header("Location: member_list.php");
}

?>
<!DOCTYPE html>
<html lang="zh-TW">
  <head>
    <title>會員修改</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- 給行動裝置或平板顯示用，根據裝置寬度而定，初始放大比例 1 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 載入 bootstrap 的 css 方便我們快速設計網站-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css"/>
  </head>

  <body>

    <div class="content">
      <div class="container">
        <!-- 建立第一個 row 空間，裡面準備放格線系統 -->
        <div class="row">
          <!-- 在 xs 尺寸，佔12格，可參考 http://getbootstrap.com/css/#grid 說明-->
          <div class="col-xs-12">
            <form id="edit_user_form">
            	<input type="hidden" id="user_id" value="<?php echo $data['user_id'];?>">
							<div class="form-group">
                <label for="name">使用者姓名</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="請輸入您的姓名" value="<?php echo $data['name'];?>">
              </div>
              <div class="form-group">
                <label for="username">使用者帳號</label>
                <input type="text" class="form-control" id="account_name" name="account_name" placeholder="請輸入帳號" value="<?php echo $data['account_name'];?>">
              </div>
              <div class="form-group">
                <label for="password">密碼</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="請輸入密碼" >
              </div>
							<div class="form-group">
                <label for="role">角色</label>
                <input type="text" class="form-control" id="role" name="role" placeholder="請輸入角色" value="<?php echo $data['role'];?>">
              </div>
							<div class="form-group">
                <label for="role"></label>
                <input type="text" class="form-control" id="department" name="department" placeholder="請輸入單位" value="<?php echo $data['department'];?>">
              </div>
              <button type="submit" class="btn btn-default">送出</button>
              <div class="loading text-center"></div>
            </form>
          </div>
        </div>
      </div>
    </div>




    <script>
			console.log("我在這裡");
    	//$(document).on("ready", function(){
    		//表單送出
    		$("#edit_user_form").on("submit", function(){
					console.log("我在這裡1");
    			//宣告 send_data 物件變數，先取得值
    			var send_data = {
    				user_id : $("#user_id").val(),
						name : $("#name").val(),
    				account_name : $("#account_name").val(),
    				role : $("#role").val(),
						department : $("#department").val()

    			};
					console.log(send_data);

    			//如果有輸入密碼，再將密碼加入
    			if($("#password").val() != '')
    			{
    				send_data.password = $("#password").val();
    			}

					$.ajax({
						type : "POST",
						url : "../php/update_member.php", //因為此檔案是放在 admin 資料夾內，若要前往 php，就要回上一層 ../ 找到 php 才能進入 add_article.php
						data : send_data,
						dataType : 'html' //設定該網頁回應的會是 html 格式
					}).done(function(data) {
						//成功的時候
						console.log(data);
						if(data == "yes")
						{
							//註冊新增成功，轉跳到登入頁面。
							alert("更新成功，點擊確認回列表");
							window.location.href = "member_list.php";
						}
						else
						{
							alert("更新錯誤");
						}

					}).fail(function(jqXHR, textStatus, errorThrown) {
						//失敗的時候
						alert("有錯誤產生，請看 console log");
						console.log(jqXHR.responseText);
					});
    			return false;
    		});
    	//});
    </script>
  </body>
</html>
