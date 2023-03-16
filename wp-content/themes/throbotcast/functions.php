<?php
define("RBTFUNCT_PLUGIN_DIR",plugin_dir_path(__FILE__)); 


// подключение стилей
// подключается в момент add_action 'wp_enqueue_scripts'
function rbtheme_scripts(){
    // get_template_directory_uri путь к  папке активной темы throbotcast  

    wp_enqueue_style('animat-style',get_template_directory_uri().'/assets/css/main.css',array(),false,'(max-width: 768px)');
	wp_enqueue_style('reboot',get_template_directory_uri().'/assets/css/reboot.css',array(),false);
	 
	
	wp_enqueue_style('icomoon',get_template_directory_uri().'/assets/icomoon/style.css',array(),false);

    wp_enqueue_style('style',get_stylesheet_uri());
    // если нужен jquery
    wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri().'/assets/js/jquery-3.6.2.min.js',array(),false,true);//true - подключает в подвале
	wp_enqueue_script('jquery');

    wp_enqueue_script('simpleParallax',get_template_directory_uri().'/assets/js/simpleParallax.min.js',array('jquery'),false,true );
    wp_enqueue_script('gsap',get_template_directory_uri().'/assets/libs/gsap/gsap.min.js',array(),false,true );
    wp_enqueue_script('ScrollTrigger',get_template_directory_uri().'/assets/libs/gsap/ScrollTrigger.min.js',array(),false,true);
    wp_enqueue_script('ScrollSmoother',get_template_directory_uri().'/assets/libs/gsap/ScrollSmoother.min.js',array(),false,true);
   wp_enqueue_script('app',get_template_directory_uri().'/assets/js/app.js',array(),false,true);
     
}
add_action('wp_enqueue_scripts','rbtheme_scripts');


// региструются возможности wp
function  rbtheme_setup(){
	load_theme_textdomain('rbtheme'); 
	//возможность изменять logo в плагинах
	add_theme_support('custom-logo',array(
		//   'height'=>85,
		//   'width'=>85,
		'flex-height'=>true, //резиновая высота
		'flex-weight'=>true,
	));
    //заполняем title
    // add_theme_support('title-tag'); 
	add_theme_support( 'custom-header', array(		
		 'default-text-color'     => '', // цвет текста в шапке
		 'header-text'            => false,	//можно ли выводить текст в шапке
		  'default-image' => get_template_directory_uri() . '/images/header.jpg', //фон шапки по умолчанию
		 'uploads'       => true,   // возможность загружать изображения
		'height'=> 0,           //задание высоты
		'flex-height'   => true, //резиновая высота
		'flex-wight'   => true,  //резиновая ширина
	));
    //добавляем миниатюры к постам
    add_theme_support('post-thumbnails'); 
    add_image_size( 'cat_thumbnails', 350, 240, true );
	add_image_size( 'footer_thumbnails',200, 200, true );//в меню подвала круглые картинки
	add_image_size( 'icon84_thumbnails',84, 84, true );//иконки

	//Включает поддержку html5 разметки для списка комментариев, формы комментариев, формы поиска, галереи 
	add_theme_support( 'html5', array( 
		'comment-list', 
		'comment-form', 
		'search-form', 
		'gallery', 
		'caption' 
	));
	//Позволяет указывать формат посту
	add_theme_support( 'post-formats', array( 
		'aside', 
		'gallery',
		'image',
		'video'	
	));	
	//функция очистки title у ссылки рубрики
	add_filter('wp_list_categories','remove_title');
	function remove_title($str){
		$str=preg_replace('#title="[^"]+"#', 'title=""', $str);
		return $str;
	}
	if(function_exists('register_nav_menus')){
		register_nav_menus(
			array( // создаём любое количество областей
			  'header_menu' => esc_html__('Навигация по сайту','rbtheme'), 
			  'footer_menu' => esc_html('Меню в подвале: продукция','rbtheme'),
			  'footer_menu_info' => esc_html('Меню в подвале:инфо фирмы','rbtheme'),
			  'galery_menu' => esc_html('galery menu','rbtheme'),
			)
		);
	}


 //получение id постов в меню в подвале
require_once RBTFUNCT_PLUGIN_DIR.'class-ftidpost-footer.php';
Ftidpost_Footer::cr_menu_items_ID('footer_menu');
}
add_action('after_setup_theme','rbtheme_setup');

//создание секций на странице настройки темы
require_once RBTFUNCT_PLUGIN_DIR.'ftcustom.php';

// создание произвольных мета box странице записи
require_once RBTFUNCT_PLUGIN_DIR.'ftmetabox.php';

?>