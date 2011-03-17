<?php
/*
Plugin Name: Japan Tsunami Relief 
Plugin URI: http://redcross.org
Description: Adds a header bar to your public site for Red Cross donations
Version: .01
Author: Page.ly - Joshua Strebel
Author URI: http://page.ly

*/
// Released under the GPL license
// http://www.opensource.org/licenses/gpl-license.php
//
// This is an add-on for WordPress
// http://wordpress.org/
//
// **********************************************************************
//		This program is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU General Public License for more details.
// **********************************************************************



define('REDCROSSLINK','https://american.redcross.org/site/Donation2?idb=0&5052.donation=form1&df_id=5052');
// change these if you like.
define('JAPAN_BG_URL','http://pagely.presscdn.com/wp-content/uploads/2011/03/japan-bg.jpg');
define('JAPAN_A_URL','http://pagely.presscdn.com/wp-content/uploads/2011/03/japan-text1.png');
function render_wpjapan() {
	if ( !is_admin() ) {
?>
	<div id="wpjapan">
		<div class="in">
		 <a href="<?php echo REDCROSSLINK ?>" target="_blank" class="donatelink"></a>
		</div>
	</div>

<?} }
add_action('wp_footer', 'render_wpjapan',20);


function wpjapan_header_styles() {
	if (!is_admin() ) {
	?>
	<!-- WP JAPAN Styles -->
	<style type='text/css'>
		div#wpjapan {
			position:absolute;
			top:0px;
			width:100%;
			z-index:999;
			height:75px;
			background:#f1f1f1 url(<?php echo JAPAN_BG_URL?>) repeat-x center;
			display:block;
			box-shadow:0px 2px 2px #999;
			-webkit-box-shadow:0px 2px 2px #999;
			-moz-box-shadow:0px 2px 2px #999;
			text-align:center;
		}
		div#wpjapan div.in a.donatelink{
		 display:block;
		 background: url(<?php echo JAPAN_A_URL?>) no-repeat;
		 width:759px;
		 height:75px;
		 margin:0 auto;
		 outline:none;
		}
		body {
			padding-top:75px;
		}
	</style>

	<?php }
}
add_action('wp_print_styles', 'wpjapan_header_styles',1);

?>
