<?php

class Page
{
    var $id;
    var $subjectId;
    var $menuName;
    var $position;
    var $visible;
    var $content;

    function __construct(int $id, int $subjectId, string $menuName, int $position, int $visible, string $content)
    {
        $this->id = $id;
        $this->subjectId = $subjectId;
        $this->menuName = $menuName;
        $this->position = $position;
        $this->visible = $visible;
        $this->content = $content;
    }
}