	<div id="page">		   
		<?php
			print '<div id="header">';
				print '<div class="container">';
					if ($logo) {print '<a href="'.$front_page.'" title="Home" id="logo"><img src="'.$logo.'" alt="Home" /></a>';}
					print render($page['header']); 
					if ($main_menu || $secondary_menu){					
						print '<div id="navigation">'.
							theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')))).
							//theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix')))).
						'</div>';
						print '<div class="clearfix"></div>';					
					}
					print $messages;
				print '</div>';
			print '</div>';
		?>
		
		
		
		<div id="main">
			<div class="container">
				<?php print render($page['search']);?>
				<?php     
			    	print '<div class="twelve columns omega">';   
						
						if ($tabs){print '<div class="tabs">'.render($tabs).'</div>';}
						print render($page['help']);
						if ($action_links) {print '<ul class="action-links">'.render($action_links).'</ul>';}
						print render($page['content']);
					print '</div>';
				 
					if ($page['sidebar_second']) {
						print '<div class="sidebar four columns omega">'.render($page['sidebar_second']).'</div>';	
					}
				?>
			</div>      
		</div>
		<div class="clearfix"></div>
		
	   	<div id="footer">
			<?php print render($page['footer']); ?>
		</div>
	</div>