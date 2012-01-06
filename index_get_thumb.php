<?php
require_once("user_data/QueryExcuse.php");
require_once("user_data/user_student_publish.php");
include_once("../env_var/profile/global.php");

$theUserSN= trim(addslashes(htmlspecialchars($_COOKIE["sn"],ENT_QUOTES)));


$sql_query_str = "SELECT ".
	user_student_publish::$FIELD_profile_thumb.
	" FROM ".user_student_publish::$TABLE_NAME.
	" WHERE ".user_student_publish::$FIELD_user_sn." = ".$theUserSN;

$thumb_result_array = QueryExcuse::getSelectArray($sql_query_str);

if (count($thumb_result_array) > 0) {
	$profile_thumb = USER_UPLOAD_DIR_R.$thumb_result_array[0][user_student_publish::$FIELD_profile_thumb];
	
} else {
	$profile_thumb = "fail";	
}
$json_object = array(
	'profile_thumb' => $profile_thumb);
echo json_encode($json_object);
?>