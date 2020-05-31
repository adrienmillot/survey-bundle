<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Model;

use amillot\SurveyBundle\Model\Traits\LabellableInterface;
use amillot\SurveyBundle\Model\Traits\QuestionAwareInterface;
use amillot\SurveyBundle\Model\Traits\ValidableInterface;
use amillot\SurveyBundle\Model\Traits\WeightableInterface;

interface ProposalInterface extends LabellableInterface,
                                    QuestionAwareInterface,
                                    ValidableInterface,
                                    WeightableInterface
{
}
