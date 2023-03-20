<?php
 //получение id постов в меню
 class Ftidpost_Footer{
    public static function  cr_menu_items_ID($menu_id)
    {
       
        if (($locations = get_nav_menu_locations()) && isset($locations[$menu_id])) {
            $menu = wp_get_nav_menu_object($locations[$menu_id]);
            if($menu){
            $menu_items = wp_get_nav_menu_items($menu->term_id);
            }
        }   
        if($menu){
        foreach ($menu_items as $menu_item) {
           // print_r($menu_item);
            $numbers[$menu_item->object][] = get_post_meta($menu_item->ID, '_menu_item_object_id', true);
        }   
        return $numbers;
    }
      
  }
   
 }
 
