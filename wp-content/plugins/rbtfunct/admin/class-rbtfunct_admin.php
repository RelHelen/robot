<?php
//класс адинки
class Rbtfunct_Admin{
    public function __construct(){
         //при обновлении страницы админки добаляем текст в lo
         //file_put_contents(RBTFUNCT_PLUGIN_DIR.'log.txt',"!!!Admin!!! \n",FILE_APPEND);
         //строим меню в админке
         add_action( 'admin_menu', array($this,'admin_menu') );
         //принимает данные из формы
         add_action('admin_post_save_content',array($this,'save_content'));//save_content дописали из скрытого поля формы страниы main-page
         //callback admin_menu должны быть публичными         
 }  

public function admin_menu(){
    //    add_menu_page( $page_title:string, $menu_title:string, $capability:string, $menu_slug:string, $callback:callable, $icon_url:string, $position:integer|float|null )
    add_menu_page( __('Rbt Functionality','rbtfunct'), __('Rbtfunct','rbtfunct'),'manage_options', 'rbtfunct-main',array($this,'render_main_page'),'dashicons-admin-site-alt3');    
    
}
public function render_main_page(){
     require_once RBTFUNCT_PLUGIN_DIR.'admin/templates/main-page.php';
}
//получаем данные из таблицы
public static function get_content(){
    global $wpdb;
    //ВЕРНЕТ 1 СТРОКУ ARRAY_A - ассоциативный массив
    return $wpdb->get_row("SELECT * FROM wp_rbt_stl LIMIT 1",ARRAY_A);

}
//обновляем и сохраняем данные в таблицу
public function save_content(){
    //приниаем данные из формы страниwы main-page при нажатии на кнопку save
    //var_dump($_POST);
    // array(5) { ["rbtfunct_content"]=> string(15) "Lorem insup ..." ["rbtfunct_nonce"]=> string(10) "74ec13fd92" ["_wp_http_referer"]=> string(44) "/robot/wp-admin/admin.php?page=rbtfunct-main" ["rbtfunct_id"]=> string(1) "2" ["action"]=> string(12) "save_content" }
    //die;
    //проверка что пришли данные нашей формы через скрытыю генерацию 
    if(! isset ($_POST['rbtfunct_nonce']) || ! wp_verify_nonce($_POST['rbtfunct_nonce'],'rbtfunct_action')){
        wp_die( __('Error!','rbtfunct'));
    }
    //wp_unslash - удаляет штрихи
    $content=isset($_POST['rbtfunct_content']) ? trim(wp_unslash($_POST['rbtfunct_content'])) : '';
    $id=isset($_POST['rbtfunct_id']) ? (int)trim(wp_unslash($_POST['rbtfunct_id'])) : 0;
    global $wpdb;
    $query = "UPDATE wp_rbt_stl SET CONTENT= %s WHERE id=$id";
    $wpdb->query($wpdb->prepare( $query,  $content));
    
    wp_redirect($_POST['_wp_http_referer']);//вернуться настрицу от куда пришли
    die;

}


}