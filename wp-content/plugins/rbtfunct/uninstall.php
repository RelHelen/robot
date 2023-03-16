<?php
// удаление плагина и его таблицы wp_rbt_stl
//проверка на наличие плгина
//если констатнат определена то завершим работу иначе  удаляем талицу
if( ! defined('WP_UNINSTALL_PLUGIN')){exit;}

global $wpdb;
$wpdb->query('DROP TABLE IF EXISTS `wp_rbt_stl`');
?>