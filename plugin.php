<?php
/*
Plugin Name: Hercules Edit Last Post
Description: Adds a link to edit your last post under the posts menu.
Author: Todd D. Nestor - todd.nestor@gmail.com
Version: 1.1
License: GNU General Public License v3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

// Exit if accessed directly
if( !defined( 'ABSPATH' ) )
{
    echo "Oops! No direct access please :)";
    exit;
}

if( file_exists( dirname( dirname( __FILE__ ) ) . DIRECTORY_SEPARATOR . 'hercules-framework' . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR . 'framework.php' ) )
{

    require_once( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'start.php' );

    $var_name = 'herc_posts_list';

    global $$var_name;
    $$var_name                   = new HercFramework;
    $$var_name->plugin_directory = dirname( __FILE__ );
    $$var_name->InitiateAll();
}
else
{
    add_action( 'admin_init', function()
    {
        if ( is_admin() && current_user_can( 'activate_plugins' ) )
        {
            add_action( 'admin_notices', function()
            {
                ?><div class="error"><p>Sorry, but the Hercules Posts List plugin requires the Hercules Framework plugin to be installed and active.</p></div><?php
            } );

            deactivate_plugins( plugin_basename( __FILE__ ) );

            if ( isset( $_GET['activate'] ) )
                unset( $_GET['activate'] );
        }
    } );
}