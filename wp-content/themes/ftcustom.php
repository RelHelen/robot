<?php
//настройка customizer 
function wprbtheme_customize_register( $wp_customize ) {
	//Создадим настройку с помощью $wp_customize
	// создание  секции social_section
	//добавили пункт в настройки
$wp_customize->add_section( 
	'social_section' , 
	array(
		'title'      => esc_html__( 'Социальные иконки для подвала', 'rbtheme' ),
		'description' => 'В данной секции указываются иконки для соц сетей. Необходимо указать URL на страницу своей сети',
		'priority'   => 30,
	));
	//настройка секции
$wp_customize->add_setting( 
	'header_social' , 
		array(			 	
		// текст
		'default'   => esc_html__('Подключайтесь к нам в соцсетях','rbtheme'),		  
		'transport' => 'refresh', // после изменеия в админке сразу обновилась и виден результат
    ) );
//настройка url  facebook
$wp_customize->add_setting( 
	'facebook_url' , 
	array(	
		'default'   => esc_html__('Адрес ссылки','rbtheme'),    
		'transport' => 'refresh', // после изменеия в админке сразу обновилась и виден результат
    ) );
//настройка картинки  facebook
$wp_customize->add_setting( 
	'facebook_img' , 
	array(	
		'default'   => esc_html__('Картинка ссылки','rbtheme'),    
		'transport' => 'refresh', 
    ) );
		
//настройка url  facebook
$wp_customize->add_setting( 
	'facebook_has' , 
	array(        
    	'transport' => 'refresh', 
    ) );


//контол header_social
$wp_customize->add_control(
	'header_social', 
	array(
		'label'    => esc_html__( 'Сопроводительный текст', 'rbtheme' ),
		'section'  => 'social_section',
		 'settings' => 'header_social',
		'type'     => 'text',		
		
	));
//контол facebook_url
$wp_customize->add_control(
	'facebook_url', 
	array(
		'label'    => esc_html__( 'Facebook адрес:', 'rbtheme' ),
		'section'  => 'social_section',
		 'settings' => 'facebook_url',
		'type'     => 'text',		
	));
//контол facebook_img
$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'facebook_img',
			array(
				'label' => 'Загрузка изображения',
				'section' => 'social_section',
				'settings' => 'facebook_img'
			)
		)
	);	
//контол facebook_has
$wp_customize->add_control(
	'facebook_has', 
	array(
		'label'    => esc_html__( 'Использовать на сайте :', 'rbtheme' ),
		'section'  => 'social_section',
		 'settings' => 'facebook_has',
		'type'     => 'checkbox',		
	));	
}
add_action( 'customize_register', 'wprbtheme_customize_register' );
