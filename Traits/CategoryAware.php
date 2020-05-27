<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Traits;

use amillot\SurveyBundle\Model\CategoryInterface;
use amillot\SurveyBundle\Model\Traits\CategoryAwareInterface;

trait CategoryAware
{
    protected $category;

    /**
     * {@inheritDoc}
     */
    public function getCategory(): ?CategoryInterface
    {
        return $this->category;
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory(?CategoryInterface $prmCategory): CategoryAwareInterface
    {
        $this->category = $prmCategory;

        return $this;
    }
}
