<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer" style=" background-color: #343a40;">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">
                        <p class="footerinfo" style="width:33%; float:left; color:white; text-align:center;">Webshop <br>
                            info@larryvsharry.com<br>
                            +45 5365 5509<br>
                            Monday to Friday 09:00-13:00<br></p>
                        <p class="footerinfo" style="width:33%; float:left;color:white; text-align:center;">Copenhagen Store<br>
                            Frederiksborggade 43, 1361 Copenhagen<br>
                            Monday to Thursday 08.30 - 17.30<br>
                            Friday 10.00 - 17.30<br>
                            Saturday 10.00 - 14.00<br>
                            Sunday shut<br>
                            +45 31 36 17 19<br>
                            (Copenhagen Store inquiries only)<br></p>
                        <p class="footerinfo" style="width:33%; float:left;color:white; text-align:center;">Dealers and International Customers<br>
                            info@larryvsharry.com<br>
                            +45 5365 5509<br>
                            Monday to Friday 09:00-13:00<br>
                            Copenhagen Store<br>
                            Frederiksborggade 43, 1361 Copenhagen<br>
                            Monday to Thursday 08.30 - 17.30<br>
                            Friday 10.00 - 17.30<br></p>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

