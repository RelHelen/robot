<?php
//все настройки customizer меню нах в след файле
//wp-includes\class-wp-customize-manager.php

//доп настройки customizer 
function wprbtheme_customize_register( $wp_customize ) {
	//Создадим настройку с помощью $wp_customize

       //настройка верхнего заголовка
$wp_customize->add_panel( 'location-place-top',
array(
    'priority'       => 91,
    'title'          => 'Содержимое верхнего заголовока',
    'description'    => 'Тут вы можете настроить верхнюю часть сайта.',
)
);
//добавили пункт в настройки контакты в подвале
 
$wp_customize->add_section( 
    'contact_section-top' , 
    array(
        'title'      => esc_html__( 'Контакты на верху', 'rbtheme' ),
        'description' => 'В данной секции указываются контактные данные. Если вы не хотите добавлять данные, очистите содержимое',
        'priority'   => 40,
        'panel'       => 'location-place-top'
    ));
        //=======vk===============
        //настройка секции contact_adres
        $wp_customize->add_setting( 
            'contact_adres-top' , 
                array(			 	
                // текст
                'default'   => esc_html__('г. Ростов-на-Дону','rbtheme'),
                'sanitize_callback'  => 'sanitize_text_field',//очиска данных текстового поля 		  
                'transport' => 'refresh', 
            ) );
        //контол contact_adres
        $wp_customize->add_control(
            'contact_adres-top', 
            array(
                'label'    => esc_html__( 'Адрес', 'rbtheme' ),
                'section'  => 'contact_section-top',
                'settings' => 'contact_adres-top',
                'type'     => 'text',                    
            ));

        //настройка секции contact_date
        $wp_customize->add_setting( 
            'contact_phone-top' , 
                array(			 	
                // текст
                'default'   => esc_html__('8-800-00-00','rbtheme'),	
                'sanitize_callback'  => 'sanitize_text_field',//очиска данных текстового поля 	  
                'transport' => 'refresh', 
            ) );
        //контол contact_date
        $wp_customize->add_control(
            'contact_phone-top', 
            array(
                'label'    => esc_html__( 'Телефон для связи', 'rbtheme' ),
                'section'  => 'contact_section-top',
                'settings' => 'contact_phone-top',
                'type'     => 'text',                    
            ));  






    //настройка подвала
$wp_customize->add_panel( 'footer_panel',
	array(
		'priority'       => 100,
		'title'          => 'Содержимое подвала',
		'description'    => 'Тут вы можете настроить подвал своего сайта.',
	)
); 
	// создание  секции social_section
	//добавили пункт в настройки
    $wp_customize->add_section( 
        'social_section' , 
        array(
            'title'      => esc_html__( 'Социальные иконки для подвала', 'rbtheme' ),
            'description' => 'В данной секции указываются иконки для соц сетей. Необходимо указать URL на страницу своей сети',
            'priority'   => 30,
            'panel'       => 'footer_panel'
        ));
            //=======vk===============
            //настройка секции
            $wp_customize->add_setting( 
                'soch_header' , 
                    array(			 	
                    // текст
                    'default'   => esc_html__('Подключайтесь к нам в соцсетях','rbtheme'),		  
                    'transport' => 'refresh', // после изменеия в админке сразу обновилась и виден результат
                ) );
            //настройка url  vk
            $wp_customize->add_setting( 
                'vk_url' , 
                array(	
                    'default'   => esc_html__('Адрес ссылки','rbtheme'), 
                    'sanitize_callback'  => 'sanitize_text_field',//очиска данных текстового поля                 
                     
                    'transport' => 'refresh', // после изменеия в админке сразу обновилась и виден результат
                ) );
            //настройка картинки  vk
            $wp_customize->add_setting( 
                'vk_img' , 
                array(	
                    'default'   => esc_html__('Картинка ссылки','rbtheme'),    
                    'transport' => 'refresh', 
                ) );
                    
            //настройка has  vk
            $wp_customize->add_setting( 
                'vk_has' , 
                array(        
                    'transport' => 'refresh', 
                ) );

            //контол header_social
            $wp_customize->add_control(
                'soch_header', 
                array(
                    'label'    => esc_html__( 'Заголовок', 'rbtheme' ),
                    'section'  => 'social_section',                   
                    // 'settings' => 'vk_header',
                    'type'     => 'text',		
                    
                ));
            //контол vk_url
            $wp_customize->add_control(
                'vk_url', 
                array(
                    'label'    => esc_html__( 'адрес сети:', 'rbtheme' ),
                    'section'  => 'social_section',
                    'settings' => 'vk_url',
                    'type'     => 'text',		
                ));
            //контол vk_img
            $wp_customize->add_control(
                    new WP_Customize_Image_Control(
                        $wp_customize,
                        'vk_img',
                        array(
                            'label' => 'Загрузка изображения',
                            'section' => 'social_section',
                            'settings' => 'vk_img'
                        )
                    )
                );	
            //контол vk_has
            $wp_customize->add_control(
                'vk_has', 
                array(
                    'label'    => esc_html__( 'Использовать на сайте', 'rbtheme' ),
                    'section'  => 'social_section',
                    'settings' => 'vk_has',
                    'type'     => 'checkbox',		
                ));	  
            //=======telegram===============
            //настройка секции
            // $wp_customize->add_setting( 
            //     'telegram_header' , 
            //         array(			 	
            //         // текст
            //         'default'   => esc_html__('Мы в telegram','rbtheme'),		  
            //         'transport' => 'refresh', // после изменеия в админке сразу обновилась и виден результат
            //     ) );
            //настройка url  telegram
            $wp_customize->add_setting( 
                'telegram_url' , 
                array(	
                    'default'   => esc_html__('Адрес ссылки','rbtheme'), 
                    'sanitize_callback'  => 'sanitize_text_field',//очиска данных текстового поля    
                    'transport' => 'refresh', // после изменеия в админке сразу обновилась и виден результат
                ) );
            //настройка картинки  telegram
            $wp_customize->add_setting( 
                'telegram_img' , 
                array(	
                    'default'   => esc_html__('Картинка ссылки','rbtheme'),    
                    'transport' => 'refresh', 
                ) );
                    
            //настройка url  telegram
            $wp_customize->add_setting( 
                'telegram_has' , 
                array(        
                    'transport' => 'refresh', 
                ) );

            //контол header_social
            // $wp_customize->add_control(
            //     'telegram_header', 
            //     array(
            //         'label'    => esc_html__( 'Сопроводительный текст к иконке Telegram', 'rbtheme' ),
            //         'section'  => 'social_section',
            //         'settings' => 'telegram_header',
            //         'type'     => 'text',		
                    
            //     ));
            //контол telegram_url
            $wp_customize->add_control(
                'telegram_url', 
                array(
                    'label'    => esc_html__( 'адрес сети:', 'rbtheme' ),
                    'section'  => 'social_section',
                    'settings' => 'telegram_url',
                    'type'     => 'text',		
                ));
            //контол telegram_img
            $wp_customize->add_control(
                    new WP_Customize_Image_Control(
                        $wp_customize,
                        'telegram_img',
                        array(
                            'label' => 'Загрузка изображения',
                            'section' => 'social_section',
                            'settings' => 'telegram_img'
                        )
                    )
                );	
            //контол telegram_has
            $wp_customize->add_control(
                'telegram_has', 
                array(
                    'label'    => esc_html__( 'Использовать на сайте', 'rbtheme' ),
                    'section'  => 'social_section',
                    'settings' => 'telegram_has',
                    'type'     => 'checkbox',		
                ));	      
            //=======facebook===============
                //настройка секции
            $wp_customize->add_setting( 
                'facebook_header' , 
                    array(			 	
                    // текст
                    'default'   => esc_html__('Мы в fb','rbtheme'),		  
                    'transport' => 'refresh', // после изменеия в админке сразу обновилась и виден результат
                ) );
            //настройка url  facebook
            $wp_customize->add_setting( 
                'facebook_url' , 
                array(	
                    'default'   => esc_html__('Адрес ссылки','rbtheme'), 
                    'sanitize_callback'  => 'sanitize_text_field',//очиска данных текстового поля    
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
                'facebook_header', 
                array(
                    'label'    => esc_html__( 'Сопроводительный текст к иконке facebook', 'rbtheme' ),
                    'section'  => 'social_section',
                    'settings' => 'facebook_header',
                    'type'     => 'text',		
                    
                ));
            //контол facebook_url
            $wp_customize->add_control(
                'facebook_url', 
                array(
                    'label'    => esc_html__( 'адрес сети:', 'rbtheme' ),
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
                    'label'    => esc_html__( 'Использовать на сайте', 'rbtheme' ),
                    'section'  => 'social_section',
                    'settings' => 'facebook_has',
                    'type'     => 'checkbox',		
                ));	

// создание  секции контакты
	
//добавили пункт в настройки контакты в подвале
 
    $wp_customize->add_section( 
        'contact_section' , 
        array(
            'title'      => esc_html__( 'Контакты в подвале', 'rbtheme' ),
            'description' => 'В данной секции указываются контактные данные. Если вы не хотите добавлять данные, очистите содержимое',
            'priority'   => 40,
            'panel'       => 'footer_panel'
        ));
            //=======vk===============
            //настройка секции contact_adres
            $wp_customize->add_setting( 
                'contact_adres' , 
                    array(			 	
                    // текст
                    'default'   => esc_html__('г. Ростов-на-Дону','rbtheme'),
                    'sanitize_callback'  => 'sanitize_text_field',//очиска данных текстового поля 		  
                    'transport' => 'refresh', 
                ) );
            //контол contact_adres
            $wp_customize->add_control(
                'contact_adres', 
                array(
                    'label'    => esc_html__( 'Адрес', 'rbtheme' ),
                    'section'  => 'contact_section',
                    'settings' => 'contact_adres',
                    'type'     => 'text',                    
                ));

            //настройка секции contact_date
            $wp_customize->add_setting( 
                'contact_phone' , 
                    array(			 	
                    // текст
                    'default'   => esc_html__('8-800-00-00','rbtheme'),	
                    'sanitize_callback'  => 'sanitize_text_field',//очиска данных текстового поля 	  
                    'transport' => 'refresh', 
                ) );
            //контол contact_date
            $wp_customize->add_control(
                'contact_phone', 
                array(
                    'label'    => esc_html__( 'Телефон для связи', 'rbtheme' ),
                    'section'  => 'contact_section',
                    'settings' => 'contact_phone',
                    'type'     => 'text',                    
                ));            
            




}

add_action( 'customize_register', 'wprbtheme_customize_register' );
