<?php
  //啟動 session ，這樣才能夠取用 $_SESSION['link'] 的連線，做為資料庫的連線用
  @session_start();

  function add_user($name, $account_nmae, $password, $role, $depatment)
  {
  	//宣告要回傳的結果
    $result = null;
  	//先把密碼用md5加密
  	$password = md5($password);
    //將查詢語法當成字串，記錄在$sql變數中
    $sql = "INSERT INTO `user` (`name`, `account_name`, `password`, `role`, `department`) VALUE ('{$name}', '{$account_nmae}', '{$password}', '{$role}', '{$depatment}');";

    //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
    $query = mysqli_query($_SESSION['link'], $sql);

    //如果請求成功
    if ($query)
    {
      //使用 mysqli_affected_rows 判別異動的資料有幾筆，基本上只有新增一筆，所以判別是否 == 1
      if(mysqli_affected_rows($_SESSION['link']) == 1)
      {
        //取得的量大於0代表有資料
        //回傳的 $result 就給 true 代表有該帳號，不可以被新增
        $result = true;
      }
    }
    else
    {
      echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
    }

    //回傳結果
    return $result;
  }
  /**
 * 檢查資料庫有無該使用者名稱
 */
function check_has_username($account_name)
{
	//宣告要回傳的結果
  $result = null;

  //將查詢語法當成字串，記錄在$sql變數中
  $sql = "SELECT * FROM `user` WHERE `account_name` = '{$account_name}';";

  //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
  $query = mysqli_query($_SESSION['link'], $sql);

  //如果請求成功
  if ($query)
  {
    //使用 mysqli_num_rows 方法，判別執行的語法，其取得的資料量，是否有一筆資料
    if (mysqli_num_rows($query) >= 1)
    {
      //取得的量大於0代表有資料
      //回傳的 $result 就給 true 代表有該帳號，不可以被新增
      $result = true;
    }

    //釋放資料庫查詢到的記憶體
    mysqli_free_result($query);
  }
  else
  {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($_SESSION['link']);
  }

  //回傳結果
  return $result;
}
?>
