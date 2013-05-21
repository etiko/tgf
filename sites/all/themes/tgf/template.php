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


function bb2html($text) {
	$bbcode = array(
			"[span]", "[/span]",
			"[strong]", "[/strong]",
			"[b]", "[/b]",
			"[u]", "[/u]",
			"[i]", "[/i]",
			"[em]", "[/em]",
			"[amp]", "[theta]", "[degree]", "[prime]", "[doubleprime]", "[squareroot]"
	);
	$htmlcode = array(
			"<span>", "</span>",
			"<strong>", "</strong>",
			"<strong>", "</strong>",
			"<u>", "</u>",
			"<em>", "</em>",
			"<em>", "</em>",
			"&amp;", "&theta;", "&#176;", "&prime;", "&Prime;", "&radic;"
	);
	return str_replace($bbcode, $htmlcode, $text);
}

function bb_strip($text) {
	$bbcode = array(
			"[span]", "[/span]",
			"[strong]", "[/strong]",
			"[b]", "[/b]",
			"[u]", "[/u]",
			"[i]", "[/i]",
			"[em]", "[/em]",
			"&amp;", "&theta;", "&#176;", "&prime;", "&Prime;", "&radic;"
	);
	return str_replace($bbcode, '', $text);
}