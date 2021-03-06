<?php


function jmh_customize_register( $wp_customize ) {

// LOGO 

   $wp_customize->add_section('jmh_logo', array(
       'title'    => 'LOGO',
       'priority' => '1'
   ));

  
   $wp_customize->add_setting('jmh_logo_stadt', array(
       'default'        => 'Deine Stadt',
   ));
   $wp_customize->add_setting('jmh_logo_subtext', array(
       'default'        => 'muss handeln',
   ));

   $wp_customize->add_control('jmh_logo_stadt', array(
       'label'   => 'City Name',
       'section' => 'jmh_logo',
       'type'    => 'text',
       'setting' => 'jmh_logo_stadt'
   ));
   $wp_customize->add_control('jmh_logo_subtext', array(
       'label'   => 'Sub Text',
       'section' => 'jmh_logo',
       'type'    => 'text',
       'setting' => 'jmh_logo_subtext'
   ));

   // MENU 

   $wp_customize->add_section('jmh_menu', array(
       'title'    => 'Menu',
       'priority' => '1'
   ));

   $wp_customize->add_setting('jmh_menu_width', array(
       'default'        => 50,
   ));

   $wp_customize->add_control('jmh_menu_width', array(
       'label'   => 'Menu Width',
       'section' => 'jmh_menu',
       'type'    => 'range',
       'setting' => 'jmh_menu_width',
       'input_attrs' => array(
           'min' => 0,
           'max' => 100,
         ),
   ));


// FOOTER WIDGETS


$wp_customize->add_section('jmh_footerwidgets', array(
    'title'    => 'Footer Widges Alignment',
    'priority' => '3'
));

    // Height

    $wp_customize->add_setting('jmh_footerwidget_height_small', array(
        'default'        => 100,
    ));

    $wp_customize->add_control('jmh_footerwidget_height_small', array(
        'label'   => 'Footer Widgets Height small screen',
        'section' => 'jmh_footerwidgets',
        'type'    => 'range',
        'setting' => 'jmh_footerwidget_height_small',
        'input_attrs' => array(
            'min' => 50,
            'max' => 600,
        ),
    ));
    $wp_customize->add_setting('jmh_footerwidget_height_big', array(
        'default'        => 100,
    ));

    $wp_customize->add_control('jmh_footerwidget_height_big', array(
        'label'   => 'Footer Widgets Height big screen',
        'section' => 'jmh_footerwidgets',
        'type'    => 'range',
        'setting' => 'jmh_footerwidget_height_big',
        'input_attrs' => array(
            'min' => 50,
            'max' => 600,
        ),
    ));

    // Alignment
            $wp_customize->add_setting('jmh_footerwidget_activate_alignment', array(
                'default'        => false,
            ));

            $wp_customize->add_control('jmh_footerwidget_activate_alignment', array(
                'label'   => 'Footer Widget alignment activate',
                'section' => 'jmh_footerwidgets',
                'type'    => 'checkbox',
                'setting' => 'jmh_footerwidget_activate_alignment',
            ));
        // widget1 small

        
        $wp_customize->add_setting('jmh_footerwidget_align_small_1', array(
            'default'        => 'center',
        ));

        $wp_customize->add_control('jmh_footerwidget_align_small_1', array(
            'label'   => 'Widget left alignment small screen',
            'section' => 'jmh_footerwidgets',
            'type'    => 'select',
            'setting' => 'jmh_footerwidget_align_small_1',
            'choices' => array(
                'left' => 'Left',
                'center' => 'Center',
                'right' => 'Right',
            ),
        ));
        // widget1 big
        $wp_customize->add_setting('jmh_footerwidget_align_big_1', array(
            'default'        => 'center',
        ));

        $wp_customize->add_control('jmh_footerwidget_align_big_1', array(
            'label'   => 'Widget left alignment big screen',
            'section' => 'jmh_footerwidgets',
            'type'    => 'select',
            'setting' => 'jmh_footerwidget_align_big_1',
            'choices' => array(
                'left' => 'Left',
                'center' => 'Center',
                'right' => 'Right',
            ),
        ));

        // widget2 small
        $wp_customize->add_setting('jmh_footerwidget_align_small_2', array(
            'default'        => 'center',
        ));

        $wp_customize->add_control('jmh_footerwidget_align_small_2', array(
            'label'   => 'Widget center alignment small screen',
            'section' => 'jmh_footerwidgets',
            'type'    => 'select',
            'setting' => 'jmh_footerwidget_align_small_2',
            'choices' => array(
                'left' => 'Left',
                'center' => 'Center',
                'right' => 'Right',
            ),
        ));
        // widget2 big
        $wp_customize->add_setting('jmh_footerwidget_align_big_2', array(
            'default'        => 'center',
        ));

        $wp_customize->add_control('jmh_footerwidget_align_big_2', array(
            'label'   => 'Widget center alignment big screen',
            'section' => 'jmh_footerwidgets',
            'type'    => 'select',
            'setting' => 'jmh_footerwidget_align_big_2',
            'choices' => array(
                'left' => 'Left',
                'center' => 'Center',
                'right' => 'Right',
            ),
        ));

        // widget3 small
        $wp_customize->add_setting('jmh_footerwidget_align_small_3', array(
            'default'        => 'center',
        ));

        $wp_customize->add_control('jmh_footerwidget_align_small_3', array(
            'label'   => 'Widget right alignment small screen',
            'section' => 'jmh_footerwidgets',
            'type'    => 'select',
            'setting' => 'jmh_footerwidget_align_small_3',
            'choices' => array(
                'left' => 'Left',
                'center' => 'Center',
                'right' => 'Right',
            ),
        ));
        // widget3 big
        $wp_customize->add_setting('jmh_footerwidget_align_big_3', array(
            'default'        => 'center',
        ));

        $wp_customize->add_control('jmh_footerwidget_align_big_3', array(
            'label'   => 'Widget right alignment big screen',
            'section' => 'jmh_footerwidgets',
            'type'    => 'select',
            'setting' => 'jmh_footerwidget_align_big_3',
            'choices' => array(
                'left' => 'Left',
                'center' => 'Center',
                'right' => 'Right',
            ),
        ));



  
}
add_action( 'customize_register', 'jmh_customize_register' );

