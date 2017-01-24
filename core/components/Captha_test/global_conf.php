<?php 

global $modx_data;
$modx_data = array(
	'user_name' => $modx->user->get('username'),
    'user_id' => $modx->user->get('id'),
    'is_member_admin_group' => $modx->user->isMember('Administrator'),
    'is_member_registerusers_group' => $modx->user->isMember('register_users'),
    'is_member_manager_group' => $modx->user->isMember('group_manager'),
    'is_register_user' => $modx->user->isAuthenticated('web'),
	 );