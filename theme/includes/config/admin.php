<?php

class Admin
{
	public function __construct()
	{
		// add_action('admin_head', array($this, 'head'));
		add_action('login_head', array($this, 'head'));
		add_action('login_footer', array($this, 'footer'));
	}

	public function head()
	{
		echo '<link rel="stylesheet" type="text/css" href="' . get_stylesheet_directory_uri() . '/style/css/wp-admin.css' . '">';
	}

	public static function footer() {
		?>
			<div class="developed">
				<p>Desenvolvido por <a href="https://github.com/therealeddy">Eddy ♥</a></p>
			</div>
			<style>
				.login h1 a {
					background-image: url('<?php the_field('logotipo', 'options') ?>');
				}
			</style>
		<?php 
	}

}

new Admin();