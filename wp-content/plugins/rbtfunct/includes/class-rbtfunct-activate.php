
<?php
//активация плагина и его таблицы wp_rbt_stl
//создание для этого таблицы
class Rbtfunct_Activate{
    public static function activate(){
        //для подключения к БД
        global $wpdb;
        //создание таблицы если ее нет
        $wpdb->query("CREATE TABLE IF NOT EXISTS `wp_rbt_stl` (
            `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
            `content` text NOT NULL,
            PRIMARY KEY (`id`)
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
        $query = "INSERT INTO `wp_rbt_stl` (`id`, `content`) VALUES (NULL, %s)";
      if ($wpdb->get_row("SELECT * FROM wp_rbt_stl LIMIT 1") == null ){
            $wpdb->query( $wpdb->prepare($query,'Lorem insup ...'));
        }
    }
}

  