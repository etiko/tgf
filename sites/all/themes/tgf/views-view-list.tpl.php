<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */
?>
<?php 
	print $wrapper_prefix; 
	if (!empty($title)){
		print '<h3>'.$title.'</h3>';
	}
	print $list_type_prefix;
	$num = 0;$count = count($rows);	
	foreach ($rows as $id => $row) {
		if ($num == 0){
			print '<li class="first'.$classes_array[$id].'">'.$row.'</li>';
		}
		else if ($num == $count - 1){
			print '<li class="last'.$classes_array[$id].'">'.$row.'</li>';
		}
		else {
			print '<li class="'.$classes_array[$id].'">'.$row.'</li>';
		}
		$num++;
	}
	print $list_type_suffix;
	print $wrapper_suffix;
?>
