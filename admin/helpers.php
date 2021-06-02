<?php
/**
 * Build a input field for setting page
 *
 * @param $field_id
 * @param $current_option
 *
 * @return string
 */
if ( ! function_exists( 'msab_create_text_field' ) ) {
	function msab_create_text_field( $field_id, $current_option ) {
		if ( empty( $field_id ) ) {
			return '';
		}
		$field_value = isset( $current_option[ $field_id ] ) ? esc_attr( $current_option[ $field_id ] ) : '';

		return sprintf(
			'<input type="text" id="%s" name="mobiloud_smart_app_banner[%s]" value="%s" style="width: 50%%;"/>',
			$field_id, $field_id, $field_value
		);
	}
}
if ( ! function_exists( 'msab_create_checkbox_field' ) ) {
	function msab_create_checkbox_field( $field_id, $current_option ) {
		if ( empty( $field_id ) ) {
			return '';
		}
		$field_value = isset( $current_option[ $field_id ] ) ? esc_attr( $current_option[ $field_id ] ) : '0';

		return sprintf(
			'<input type="checkbox" id="%s" name="mobiloud_smart_app_banner[%s]" value="1" %s/>',
			$field_id, $field_id, checked( $current_option[ $field_id ], 1, false )
		);
	}
}