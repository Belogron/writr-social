<?php
/**
 * Writr Theme Customizer Addon to enable social links without Publicize
 *
 *@package writr-social
 *
 */


function writr_custom_register_social( $wp_customize ) {
	$wp_customize->add_section(
		'writr_theme_social',
		array(
			'title' => __('Social Integration', 'writr-social'),
			'description' => __('Add links to social media here', 'writr-social'),
			'priority' => 201,
		)
	);
	$wp_customize->add_setting(
		'facebook_textbox',
		array(
		)
	);
	$wp_customize->add_control(
		 'facebook_textbox',
		array(
			'label' => __('Facebook Profile','writr-social'),
			'section' => 'writr_theme_social',
			'type' => 'text',
		)
	);

	$wp_customize->add_setting(
                'gplus_textbox',
                array(
                )
        );
	$wp_customize->add_control(
                 'gplus_textbox',
                array(
                      	'label' => __('Google+ Profile','writr-social'),
                        'section' => 'writr_theme_social',
                        'type' => 'text',
                )
        );
        $wp_customize->add_setting(
                'twitter_textbox',
               	array(
                )
        );
	$wp_customize->add_control(
                 'twitter_textbox',
                array(
                      	'label' => __('Twitter Profile','writr-social'),
                        'section' => 'writr_theme_social',
                        'type' => 'text',
                )
        );
        $wp_customize->add_setting(
                'github_textbox',
               	array(
                )
        );
	$wp_customize->add_control(
                 'github_textbox',
                array(
                      	'label' => __('GitHub Profile','writr-social'),
                        'section' => 'writr_theme_social',
                        'type' => 'text',
                )
        );




}
add_action('customize_register','writr_custom_register_social');
