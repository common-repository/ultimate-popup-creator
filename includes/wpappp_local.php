<?php 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
$upc_db_version = "1.0";

function upc_install () {
   global $wpdb;
   global $upc_db_version;
   

   $table_name = $wpdb->prefix . "wpappp_subs";
   if($wpdb->get_var("show tables like '$table_name'") != $table_name) {

      $sql = "CREATE TABLE " . $table_name . " (
     id mediumint(9) NOT NULL AUTO_INCREMENT,
     name tinytext NOT NULL,
     email text NOT NULL,
     UNIQUE KEY id (id)
   );";

      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
      dbDelta($sql);

      add_option("upc_db_version", $upc_db_version);

   }
}

