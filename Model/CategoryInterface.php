<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Model;

use amillot\SurveyBundle\Model\Traits\LabellableInterface;
use amillot\SurveyBundle\Model\Traits\QuestionListAwareInterface;

interface CategoryInterface extends LabellableInterface,
                                    QuestionListAwareInterface
{
}
