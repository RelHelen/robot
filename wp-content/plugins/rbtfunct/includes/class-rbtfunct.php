<?php

class RbtFunct{
    //вызывается при обновлении страницы 
  public function __construct(){
         //при обновлении страницы админки добаляем текст в log
         // file_put_contents(RBTFUNCT_PLUGIN_DIR.'log.txt',"!!!Work!!! \n",FILE_APPEND);
    $this->load_dependecies();
    $this->init_hooks();
    $this->define_admin_hooks();
    $this->define_public_hooks();
  } 
  //вызываются хуки которые должны отработать самыми первыми
  private function init_hooks(){
    } 

  //подключаем файлы
  private function load_dependecies(){
    //для адинки
    require_once RBTFUNCT_PLUGIN_DIR.'admin/class-rbtfunct_admin.php';
     //для пользовательской части
    require_once RBTFUNCT_PLUGIN_DIR.'public/class-rbtfunct_public.php';
  }


  private function define_admin_hooks(){
    //создаем экземпляр класса  адинки
    $plugin_admin=new Rbtfunct_Admin(); 
  }

  private function define_public_hooks(){
     //создаем экземпляр класса  пользовательской части
    $plugin_admin=new Rbtfunct_Public(); 
  }

};

?>