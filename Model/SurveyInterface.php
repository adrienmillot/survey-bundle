<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Model;

use amillot\SurveyBundle\Model\Traits\LabellableInterface;
use amillot\SurveyBundle\Model\Traits\QuestionListAwareInterface;

interface SurveyInterface extends LabellableInterface, QuestionListAwareInterface
{
    /**
     * @return SurveySubjectInterface|null
     */
    public function getAuthor(): ?SurveySubjectInterface;

    /**
     * @param SurveySubjectInterface|null $prmAuthor
     *
     * @return SurveyInterface
     */
    public function setAuthor(?SurveySubjectInterface $prmAuthor): SurveyInterface;
}
