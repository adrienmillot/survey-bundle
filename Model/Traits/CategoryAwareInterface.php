<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Model\Traits;

use amillot\SurveyBundle\Model\CategoryInterface;

interface CategoryAwareInterface
{
    /**
     * @return CategoryInterface|null
     */
    public function getCategory(): ?CategoryInterface;

    /**
     * @param CategoryInterface|null $prmCategory
     *
     * @return CategoryAwareInterface
     */
    public function setCategory(?CategoryInterface $prmCategory): CategoryAwareInterface;
}
