<?php
/*
Plugin Name: Hello rtCamp
Description: My first WordPress plugin.
Version: 1.0
Author: Vansh Agrawal
*/

add_action('admin_notices', function () {
    echo "<div class='notice notice-success'>
            <p>Hello rtCamp! Learning WordPress 🚀</p>
          </div>";
});
