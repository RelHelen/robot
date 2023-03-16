<?php
/*
Plugin Name: Robot Functionality
Plugin URI: https://rbt.ru
Description: Краткое описание плагина.
Version: Номер версии плагина, например: 1.0
Author: Имя автора плагина
Author URI: wp-content\plugins\rbtfunct\rbtfunct.php
Text Domain: rbtfunct
*/
/*Создаем проверку на безопасное подключение
 */
defined("ABSPATH") or die;
// физический путь плагина
define("RBTFUNCT_PLUGIN_DIR",plugin_dir_path(__FILE__));
define("RBTFUNCT_PLUGIN_URL",plugin_dir_url(__FILE__));
define("RBTFUNCT_PLUGIN_NAME",dirname(plugin_basename(__FILE__)));
//var_dump(RBTFUNCT_PLUGIN_DIR)


//регистрация активация  плагина
register_activation_hook( __FILE__, 'rbtfunct_activate' );
function rbtfunct_activate(){
 require_once RBTFUNCT_PLUGIN_DIR.'includes/class-rbtfunct-activate.php';
 Rbtfunct_Activate::activate();
}

require_once RBTFUNCT_PLUGIN_DIR.'includes/class-rbtfunct.php';
function run_rbtfunct(){
    //создали экземпляр плагина 
    $plugin = new RbtFunct();
}
run_rbtfunct();
?>