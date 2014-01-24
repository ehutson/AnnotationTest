<?php

namespace My\AnnotationTest;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\FileCacheReader;
use Doctrine\Common\Annotations\AnnotationRegistry;

class BlogHandler
{

    protected $blog;

    public function __construct()
    {
        AnnotationRegistry::registerAutoloadNamespace('My\AnnotationTest\Annotation', __DIR__ . '/../../');
        //$this->annotationReader = new FileCacheReader(new AnnotationReader(), __DIR__ . '/../../../data/cache/', $debug = true);
    }

    public function handle($blog)
    {
        echo "\nHandling " . get_class($blog) . "\n";

        $reflectionObject = new \ReflectionObject($blog);
        $annotationReader = new AnnotationReader();
        foreach ($reflectionObject->getProperties() as $property) {
            $annotation = $annotationReader->getPropertyAnnotation($property, '\My\AnnotationTest\Annotation\Property');

            echo "\t" . $property->getName() . ":\n";
            echo "\t\tName:  " . $annotation->name . "\n";
            echo "\t\tType:  " . $annotation->type . "\n";
        }
    }

}
