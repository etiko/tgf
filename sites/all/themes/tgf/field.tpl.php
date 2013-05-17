<?php

foreach ($items as $delta => $item){	
	print '<div class="field-item">';
		print render($item);
		print '</div>';
}
