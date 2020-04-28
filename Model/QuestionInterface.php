<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Model;

use amillot\SurveyBundle\Model\Traits\LabellableInterface;
use amillot\SurveyBundle\Model\Traits\SurveyAwareInterface;
use amillot\SurveyBundle\Model\Traits\WeightableInterface;

interface QuestionInterface extends LabellableInterface,
                                    SurveyAwareInterface,
                                    WeightableInterface
{
}
