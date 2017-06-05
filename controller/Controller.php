<?php

  class Controller {
    public function __construct() {

    } // contruct

    public function load_dynamic_page() {
      require_once('views/head.php');
      $page_elem = array(
        'about',
        'contact',
        'photos',
        'hero_image',
      );

      shuffle($page_elem);

      foreach($page_elem as $elem) {
        // echo $elem.' ';
        require_once('views/'.$elem.'.php');
      }

      require_once('views/footer.php');
    } // load views
  } // class
