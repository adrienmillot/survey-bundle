<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Entity;

use amillot\SurveyBundle\Model\CategoryInterface;
use amillot\SurveyBundle\Traits\Labellable;

abstract class AbstractCategory implements CategoryInterface
{
    use Labellable;

    protected $id;

    /**
     * AbstractCategory constructor.
     */
    public function __construct()
    {
        $this->id = uniqid('category', true);
    }

    public function __toString()
    {
        return sprintf("%s", $this->getLabel());
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}
