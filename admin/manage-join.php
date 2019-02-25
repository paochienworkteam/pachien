<?php
  //載入 db.php 檔案，讓我們可以透過它連接資料庫，另外後台都會用 session 判別暫存資料，所以要請求 db.php 因為該檔案最上方有啟動session_start()。
  require_once '../php/db.php';
  //print_r($_SESSION); //查看目前session內容

  //如過沒有 $_SESSION['is_login'] 這個值，或者 $_SESSION['is_login'] 為 false 都代表沒登入
  /*if(!isset($_SESSION['is_login']) || !$_SESSION['is_login'])
  {
  	//直接轉跳到 login.php
  	header("Location: login.php");
  }*/

?>
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
    <title>新增成員</title>
    <style>
      #join{
        position:fixed;
        top:10%;left:15%;right:0%;bottom:auto;
        height: 80%;width: 70%;
      }
    </style>
  </head>
  <body>
    <div id="join">
      <form class="register">
        <table border="2" align="center" width="40%">
          <tr>
            <td align="center" style="font-weight:bolder">姓名</td>
            <td><input type="text" id="name" name="name" placeholder="請輸入姓名"/></td>
          </tr>
          <tr>
            <td align="center" style="font-weight:bolder">帳號</td>
            <td><input type="text" id="account_name" name="account_name" placeholder="請輸入賬號"/></td>
          </tr>
          <tr>
            <td align="center" style="font-weight:bolder">密碼</td>
            <td><input type="password" id="password" name="password" placeholder="請輸入密碼"/></td>
          </tr>
          <tr>
            <td align="center" style="font-weight:bolder">單位</td>
            <td><input type="text" id="department" name="department" placeholder="請輸入單位"/></td>
          </tr>
          <tr>
            <td align="center" style="font-weight:bolder">角色</td>
            <td><input type="text" id="role" name="role" placeholder="請輸入角色"/></td>
          </tr>
        </table>
        <table border="2" align="center" width="40%">
          <tr>
            <td width="50%" align="center"><input type="submit" value="新增"></td>
            <td align="center"><input type="button" value="回首頁" onclick="javascript:location.href='manage-index.php'"></td>
          </tr>
        </table>
      </form>
    </div>

    <script>

      $("#account_name").on("keyup",function(){
        //取得輸入值
        var account_name_value=$(this).val();
        console.log(account_name_value);
        //當keyup的時候，裡面的值不是空字串的話，就檢查
        if(account_name_value!=''){
          //$.ajax 是jQuery的方法，裡面使用的是物件
          $.ajax({
            type:"POST",//表單傳送的方式同form的method屬性
            url:"../php/check_username.php",//目標要給那個檔案同form的action屬性
            data:{//為要傳過去的資料，使用物件方式呈現,因為變數key值為英文的關係,所以用物件方式送。ex:{name:"輸入的名字",password:"輸入的密碼"}
              account_name:$(this).val()//代表要傳一個n變數值為,username文字方塊裡的值
            },
            dataType: 'html'//設定該網頁回應的會是html各式
          }).done(function(data){
            //成功的時候
			        console.log(data); //透過 console 看回傳的結果
			        if(data == "yes")
			        {
			        	//如果為 yes username 文字方塊的復元素先移除 has-error 類別，再加入 has-success 類別
			        	$("#name").parent().removeClass("has-error").addClass("has-success");
			        	//把註冊按鈕 disabled 類別移除，讓他可以按註冊
			        	$("form.register button[type='submit']").removeClass('disabled');
			        }
			        else
			        {
			        	alert("帳號有重複，不可以註冊");
			        	$("#name").parent().removeClass("has-success").addClass("has-error");
			        	//把註冊按鈕加上 disabled 不能按，在bootstrap裡 disabled 類別可以讓該元素無法操作
                $("form.register button[type='submit']").addClass('disabled');
			        }
          }).fail(function(jqXHR,textStatus,error,errorThrown){
            //失敗的時候
            alert("有錯誤產生，請看 console log");
            console.log(jqXHR.responseText);
          });
        }else {
          alert("請輸入賬號");
        }
      });

				//當表單 sumbit 出去的時候
				$("form.register").on("submit", function(){

            if($("#name").val()==''){
              alert("請輸入姓名");
            }
            else if ($("#account_name").val()==''){
              alert("請輸入賬號");
            }
            else if ($("#password").val()=='') {
              alert("請輸入密碼");
            }
            else if ($("#role").val()=='') {
              alert("請輸入角色");
            }
            else if ($("#department").val()=='') {
              alert("請輸入單位");
            }
            else {
              $.ajax({
  			        type : "POST",
  			        url : "../php/add_user.php",
  			        data : {
  			          n : $("#name").val(), //使用者姓名
  			          an : $("#account_name").val(), //使用者賬號
                  p:$("#password").val(),//使用者密碼
                  r:$("#role").val(),//使用者角色
                  dp:$("#department").val()//使用者單位




  			        },
  			        dataType : 'html' //設定該網頁回應的會是 html 格式

  			      }).done(function(data) {
  			        //成功的時候
  			        console.log(data);
  			        if(data == "yes")
  			        {
  			          alert("新增成功，點擊確認跳回列表。");
  			        	//註冊新增成功，轉跳到登入頁面。
  			        	window.location.href="manage-index.php";
  			        }
  			        else
  			        {
  			        	alert("新增失敗，請與系統人員聯繫");
  			        	$("div.loading").html('');
  			        }

  			      }).fail(function(jqXHR, textStatus, errorThrown) {
  			      	//失敗的時候
  			      	alert("有錯誤產生，請看 console log");
  			        console.log(jqXHR.responseText);
  			      });
            }




			    //}

			    //return false;
    		});
    	//});
    </script>
  </body>
</html>
