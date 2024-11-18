<?php

add_action("wp_enqueue_scripts", "bikiel_enqueue_styles");

function bikiel_enqueue_styles() {
  wp_enqueue_style(
    "button", 
    get_parent_theme_file_uri("assets/css/button.css")
  );
}

