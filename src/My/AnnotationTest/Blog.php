<?php

namespace My\AnnotationTest;

use My\AnnotationTest\Annotation\Property;

class Blog
{

    /**
     * @Property(name="id", type="int")
     * @var int
     */
    protected $id;

    /**
     * @Property(name="title", type="string")
     * @var string
     */
    protected $title;

    /**
     * @Property(name="body", type="string")
     * @var string
     */
    protected $body;

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

}
