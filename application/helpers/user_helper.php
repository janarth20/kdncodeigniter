<?php
function current_user(){
	//get current user from ion auth

	/*canot use '$this'coz its used in CI class only or 
	else will have error. This is normal php file. 
	So use the other way. Look below */
	//$user = $this->ion_auth->user()->row();

	$ci=&get_instance();
	$user = $ci->ion_auth->user()->row();
	return $user;
}

function fullname_user(){
	//get current user from ion auth
	$user=current_user();
	return $user->first_name.$user->last_name;
}

function email_user(){
	//get current user from ion auth
	$user=current_user();
	return $user->first_name.$user->email;
}


?>