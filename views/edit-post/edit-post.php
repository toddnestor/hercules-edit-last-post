<?php

class HercView_EditPost extends HercView
{
    function __construct()
    {
        $this->directory  = dirname( __FILE__ );
        $this->type       = 'admin_menu';
        $this->class_name = __CLASS__;

        parent::__construct();
    }

    /**
     * Gets the last post that was published.
     * @return object  the WP_Post object for the last post that was published.
     */
    function GetLastPost()
    {
        $args = array(
            'posts_per_page' => '1',
        );

        $posts = get_posts( $args );

        return $posts[0];
    }

    /**
     * Generates the slug that will be used as the link for th eEdit most recent post menu item
     * @return String  The url for editing the most recently published post.
     */
    function GenerateEditPostLink()
    {
        $recent_post = $this->GetLastPost();

        return 'post.php?post=' . $recent_post->ID . '&action=edit';
    }

    /**
     * Adds the link to edit the most recent post as a submenu item of the Posts menu item.
     */
    function Menu()
    {
        add_posts_page( '', 'Edit most recent post', 'edit_posts', $this->GenerateEditPostLink() );
    }
}