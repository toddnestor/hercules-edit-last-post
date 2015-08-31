<?php

class HercView_EditPostSettings extends HercView
{
    function __construct()
    {
        $this->directory  = dirname( __FILE__ );
        $this->name       = 'Edit Recent Post Settings';
        $this->type       = 'options_page';
        $this->class_name = __CLASS__;

        parent::__construct();
    }
}