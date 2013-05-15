<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>

	<head profile="<?php print $grddl_profile; ?>">
		<?php 
			print $head; 
			print '<title>'.$head_title.'</title>';
			print '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">';
			print $styles;
			 
		?>
	</head>
	<body class="<?php print $classes; ?>" <?php print $attributes;?>>
	  <div id="skip-link">
	    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
	  </div>
		<?php
			print $page_top;
			print $page;
			print $page_bottom;
			print $scripts;
		?>
	</body>
</html>
