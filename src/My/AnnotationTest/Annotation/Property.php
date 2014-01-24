<?php

namespace My\AnnotationTest\Annotation;

use Doctrine\Common\Annotations\Annotation;

/**
 * @Annotation
 * @Target({"PROPERTY"})
 */
final class Property extends Annotation
{

    public $name;
    public $type;

}
