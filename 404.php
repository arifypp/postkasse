<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package postkasse
 */

get_header();
?>

	<main id="primary" class="site-main bg-half-170 d-table w-100">

		<section class="error-404 not-found">
			<center>
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'postkasse' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<h2>404</h2>
				</div><!-- .page-content -->
			</center>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
