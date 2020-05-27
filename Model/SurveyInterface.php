<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Model;

use amillot\SurveyBundle\Model\Traits\LabellableInterface;

interface SurveyInterface extends LabellableInterface
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
