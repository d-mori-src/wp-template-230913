<?php

// Contact Form7 不要なpタグ削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
	function wpcf7_autop_return_false() {
		return false;
}

// （例）the_title セレクトボックス出力
// function add_occupation() {
//     ob_start();
//     $occupation_args = [
//         'post_type' => 'entry',
//         'order' => 'ASC'
//     ];
//     $occupation_query = new WP_Query($occupation_args);

//     echo '
// 		<span class="wpcf7-form-control-wrap">
// 		<select class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" name="occupation">
// 	';

//     if ($occupation_query->have_posts()) {
//         while ($occupation_query->have_posts()) {
//             $occupation_query->the_post();
//             echo '<option value="' . get_the_title() . '">' . the_title('', '', false) . '</option>';
//         }
//     }

//     echo '
// 		</select>
// 		</span>
// 	';

//     wp_reset_postdata();
//     return ob_get_clean();
// }
// wpcf7_add_form_tag('add_occupation_tag', 'add_occupation');

// （例）タクソノミー セレクトボックス出力
// function add_employmentstatus() {
//     ob_start();

//     $terms = get_terms([
//         'taxonomy' => 'career_type',
//         'hide_empty' => false,
//     ]);

//     echo '
//         <span class="wpcf7-form-control-wrap">
//         <select class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" name="employmentstatus">
//     ';

//     if (!empty($terms) && !is_wp_error($terms)) {
//         foreach ($terms as $term) {
//             echo '<option value="' . esc_attr($term->name) . '">' . esc_html($term->name) . '</option>';
//         }
//     }

//     echo '
//         </select>
//         </span>
//     ';
//     return ob_get_clean();
// }
// wpcf7_add_form_tag('add_employmentstatus_tag', 'add_employmentstatus');