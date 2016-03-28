<?php
/**
 * Xangô Theme Customizer
 *
 */
include_once get_template_directory() . '/inc/kirki/kirki.php';
/**
 * Configuration sample for the Kirki Customizer
 */
function xango_kirki_config() {
	$args = array(
		'logo_image'   => get_template_directory_uri() . '/assets/images/brasa-customizer.png',
		'url_path'     => get_template_directory_uri() . '/inc/kirki'
	);
	return $args;
}
add_filter( 'kirki/config', 'xango_kirki_config' );

/**
 * Add footer fields
 */
/**
 * Create the setting
 */
function boaterra_register_section( $wp_customize ) {
	/**
	 * Add sections
	 */
	$wp_customize->add_section( 'social', array(
		'title'       => __( 'Informações / Redes Sociais', 'odin' ),
		'priority'    => 10,
	) );

}
add_action( 'customize_register', 'boaterra_register_section' );
function boaterra_kirki_fields( $fields ) {
	$fields[] = array(
		'type'     => 'text',
		'setting'  => 'phone',
		'label'    => __( 'Telefone', 'odin' ),
		'section'  => 'social',
		'default'  => '',
		'priority' => 1,
	);
	$fields[] = array(
		'type'     => 'text',
		'setting'  => 'whatsapp',
		'label'    => __( 'WhatsApp', 'odin' ),
		'section'  => 'social',
		'default'  => '',
		'priority' => 1,
	);

	return $fields;
}
add_filter( 'kirki/fields', 'boaterra_kirki_fields' );