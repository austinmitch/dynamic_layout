<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dynamic Page Layout</title>
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <?php
            foreach($page_elem as $elem) {
              echo '<li><a href="#">'.$elem.'</a></li>';
            }
           ?>
        </ul>
      </nav>
    </header>
    <section class="wrapper">
