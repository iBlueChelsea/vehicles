<?php

class Page
{
    public $content;

    /**
     * Handles different pages and returns HTML Body content
     *
     * @return void
     */
    public function getContent():void
    {
        $page = 'homepage';
        if (!empty($_REQUEST['page'])) {
                $page = $_REQUEST['page'];
        }

        $content = require_once ('pages/' . $page . '.php');
        $this->content = $content;
    }
}

?>