<?php

function greeting_menu() {
  //create a new array
      $items = array();
  //create a key-value pair with the key 'hello_friend'- creates the URL (could be more than one URL) & menu item. these are attributes of the menu item.  URL does not have the '/' at the front, because that's auto filled in by Drupal
      $items['hello_friend'] = array(
     //title is displayed on page and in browser tab
     'title' => "Hello Friend!",
     //page callback defines/stores the name of the function to run with that URL
      'page callback' => 'say_hello',
      //access callback defines permissions- set to TRUE means user has permission to access this URL
      'access callback' => TRUE,
      //type is a constant in Drupal.  MENU_NORMAL_ITEM allows link to show up in Navigation menu and be moveable like other menu links in Drupal  MENU_CALLBACK still calls function, but doesn't appear in menu (eg, for a "success page" after form submission)
      'type' => MENU_CALLBACK,
     );
    $items['farewell'] = array(
        'title' => "Farewell Friend!",
        'page callback' => 'say_farewell',
        'access callback' => TRUE,
        'type' => MENU_NORMAL_ITEM,
    );
    return $items;
}
