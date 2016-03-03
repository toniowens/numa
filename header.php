<?php include __DIR__ . '/incl-head.php'; ?>

		<header>
			<nav>
				<?php
				// get primary menu
				wp_nav_menu( array( 'theme_location' => 'menu_primary' ) );
				?>
			</nav>

			<div class="numa-header" style="background: url('<?php header_image(); ?>') no-repeat; width: 100%; max-width: <?php echo get_custom_header()->width; ?>px; height: <?php echo get_custom_header()->height; ?>px; background-size: contain;">
				<h1><a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a></h1>
				<p class="description"><?php bloginfo('description'); ?></p>
			</div>
		</header>