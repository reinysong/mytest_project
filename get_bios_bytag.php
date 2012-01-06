<?php
require_once("user_data/QueryExcuse.php");
require_once("user_data/user_student_publish.php");
require_once("user_data/chapter.php");
include_once("../env_var/profile/global.php");

$order = trim(addslashes(htmlspecialchars($_GET["order"],ENT_QUOTES)));



// 移到正式主機後, 要記得將 user_student_publish 資料複製到 chapter (2012/1/4)
$sql_query_str = "SELECT * from ((".chapter::$TABLE_NAME." c inner join ".
		user_student_publish::$TABLE_NAME." usp on c.".chapter::$FIELD_user_sn."=usp.".user_student_publish::$FIELD_user_sn.
		")  inner join User_Student us on us.sn=c.user_sn) WHERE ".user_student_publish::$FIELD_path_name." !='' and ".user_student_publish::$FIELD_profile_thumb." != '' and usp.".user_student_publish::$FIELD_privacy."= 0".
		" ORDER BY ";
if ($order == "pageview") {
	$sql_query_str .="c.".chapter::$FIELD_pageview." DESC";
} else if ($order == "pagelike") {
	$sql_query_str .= "c.".chapter::$FIELD_pagelike." DESC";
} else {
	$sql_query_str .= "usp.".user_student_publish::$FIELD_modify_date." DESC";
}


/*
$sql_query_str = "SELECT ".user_student_publish::$FIELD_name.", ".
	user_student_publish::$FIELD_profile_thumb.", ".
	user_student_publish::$FIELD_path_name.
	" FROM ".user_student_publish::$TABLE_NAME.
	"
	" ORDER BY ".user_student_publish::$FIELD_modify_date." DESC";
	*/
	
$thumb_result_array = QueryExcuse::getSelectArray($sql_query_str);

$profile_thumb_array = array();
$name_array = array();
$path_array = array();
$date_array = array();
$view_array = array();
$like_array = array();
$headshot_array = array();

for ($i = 0; $i < count($thumb_result_array); $i++) {
	$profile_thumb_array[] = USER_UPLOAD_DIR_R.$thumb_result_array[$i][user_student_publish::$FIELD_profile_thumb];
	$name_array[] = $thumb_result_array[$i][user_student_publish::$FIELD_name];
	$path_array[] = $thumb_result_array[$i][user_student_publish::$FIELD_path_name];
	$original_date = $thumb_result_array[$i][user_student_publish::$FIELD_modify_date];
	$original_date = substr($original_date, 0, 10);
	$show_date = str_replace("-", "/", $original_date);
	$date_array[] = $show_date;
	$view_array[] = $thumb_result_array[$i][chapter::$FIELD_pageview];
	$like_array[] = $thumb_result_array[$i][chapter::$FIELD_pagelike];
	$headshot_array[] = $thumb_result_array[$i][headshot];	
}

$json_object = array(
	'profile_thumb_array' => $profile_thumb_array, 
	'name_array' => $name_array,
	'path_array' => $path_array,
	'date_array' => $date_array,
	'view_array' => $view_array,
	'like_array' => $like_array,
	'headshot_array' => $headshot_array,
	'order' => $order);
echo json_encode($json_object);
?>