<?php

function ultra_lite_customize_register( $wp_customize ) {

    /* Header Layouts*/
    $wp_customize->get_control('ultra_seven_header_layouts')->choices=array( 
                'ultra-header-1'    => ULTRA_IMAGES.'header-2.png',
                'ultra-header-2'    => ULTRA_IMAGES.'header-3.png',
                'custom'            => get_stylesheet_directory_uri().'/assets/images/custom-header.png',
                );
    //Custom header
    $wp_customize->add_setting('ultra_lite_custom_header',array(
         'capability'         => 'edit_theme_options',
         'sanitize_callback'  => 'ultra_lite_sanitize_select',
         'transport'          => 'refresh',
         )
    );
    $wp_customize->add_control( 'ultra_lite_custom_header',
         array(
             'label'            => esc_html__( 'Custom Header', 'ultra-lite' ),
             'section'          => 'ultra_seven_header_layouts_section',
             'type'             => 'select',
             'choices'          => ultra_lite_get_elementor_templates(),
             'priority'         => 3,
             'active_callback'  => 'ultra_lite_header_layouts_cb' 
         )
    );

    //Footer Layouts
    $wp_customize->add_setting( 'ultra_lite_footer_layout_seperator', array(
      'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( new Ultra_Seven_Customize_Seperator_Control( $wp_customize, 'ultra_lite_footer_layout_seperator',  array(
      'type'      => 'text',                    
      'label'     => esc_html__( 'Footer Layouts', 'ultra-lite' ),
      'section'   => 'ultra_seven_footer_section',
      'priority'  => 1
    ) ) );

    $wp_customize->add_setting('ultra_lite_footer_layout',array(
        'default'           => 'default',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'ultra_lite_sanitize_select',
        'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control( 'ultra_lite_footer_layout',
        array(
            'label'   => esc_html__( 'Footer Layout', 'ultra-lite' ),
            'section' => 'ultra_seven_footer_section',
            'type'    => 'select',
            'choices' => array(
                'default' => __('Default','ultra-lite'),
                'custom' => __('Custom','ultra-lite')
            ),
            'priority' => 3,
        )
    );
    $wp_customize->add_setting('ultra_lite_custom_footer',array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'ultra_lite_sanitize_select',
        'transport'         => 'refresh',
        )
    );
    $wp_customize->add_control( 'ultra_lite_custom_footer',
        array(
            'label'           => esc_html__( 'Custom Footer', 'ultra-lite' ),
            'section'         => 'ultra_seven_footer_section',
            'type'            => 'select',
            'choices'         => ultra_lite_get_elementor_templates(),
            'priority'        => 4,
            'active_callback' => 'ultra_lite_footer_layouts_cb' 
        )
    );


} 
add_action( 'customize_register', 'ultra_lite_customize_register',999 );   

/* Active Callback Functions */
function ultra_lite_header_layouts_cb(){
    $header_layout = get_theme_mod('ultra_seven_header_layouts');
    if($header_layout == 'custom'){
        return true;
    }
    return false;
}

function ultra_lite_footer_layouts_cb(){
    $header_layout = get_theme_mod('ultra_lite_footer_layout');
    if($header_layout == 'custom'){
        return true;
    }
    return false;
}


/**
* sanitize select
*
*/
function ultra_lite_sanitize_select( $input, $setting ) {
  // Ensure input is a slug.
  $input = sanitize_key( $input );
  
  // Get list of choices from the control associated with the setting.
  $choices = $setting->manager->get_control( $setting->id )->choices;
  
  // If the input is a valid key, return it; otherwise, return the default.
  return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}
