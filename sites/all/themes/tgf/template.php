<?php

function tgf_css_alter(&$css){
	global $user;

	if($user->uid == 0){
		unset($css[drupal_get_path('file','css').'modules/system/system.messages.css']);
		unset($css[drupal_get_path('file','css').'modules/system/system.base.css']);
		unset($css[drupal_get_path('file','css').'modules/system/system.theme.css']);
		unset($css[drupal_get_path('file','css').'modules/comment/comment.css']);
		unset($css[drupal_get_path('file','css').'modules/user/user.css']);
		unset($css[drupal_get_path('file','css').'modules/field/theme/field.css']);
		unset($css[drupal_get_path('file','css').'modules/node/node.css']);
		unset($css[drupal_get_path('file','css').'modules/search/search.css']);
		unset($css[drupal_get_path('file','css').'sites/all/modules/views/css/views.css']);
		unset($css[drupal_get_path('file','css').'sites/all/modules/ctools/css/ctools.css']);
		unset($css[drupal_get_path('file','css').'sites/all/modules/ckeditor/ckeditor.css']);		
	}
}