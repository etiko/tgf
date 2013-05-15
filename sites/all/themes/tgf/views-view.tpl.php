<?php

/**
 * @file
 * Main view template.
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 *
 * @ingroup views_templates
 */
?>

<?php 
	print '<div class="'.$classes.'">';
		print render($title_prefix); 
		if ($title){print $title;}
		print render($title_suffix); 
		if ($header){print '<div class="view-header">'.$header.'</div>';}
		if ($exposed){print '<div class="view-filters">'.$exposed.'</div>';}
		if ($attachment_before){print '<div class="attachment attachment-before">'.$attachment_before.'</div>';}
		if ($rows){print $rows;}
		if ($pager){print $pager;}
		if ($attachment_after){print '<div class="attachment attachment-after">'.$attachment_after.'</div>';}
		if ($more){print $more;}
		if ($footer){print '<div class="view-footer">'.$footer.'</div>';}
		if ($feed_icon){print '<div class="feed-icon">'.$feed_icon.'</div>';}
		
	print '</div>';