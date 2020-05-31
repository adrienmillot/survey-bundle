<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Model;

use amillot\SurveyBundle\Model\Traits\AnswerListAwareInterface;
use amillot\SurveyBundle\Model\Traits\CategoryAwareInterface;
use amillot\SurveyBundle\Model\Traits\LabellableInterface;
use amillot\SurveyBundle\Model\Traits\ProposalListAwareInterface;
use amillot\SurveyBundle\Model\Traits\SurveyAwareInterface;
use amillot\SurveyBundle\Model\Traits\WeightableInterface;

interface QuestionInterface extends AnswerListAwareInterface,
                                    CategoryAwareInterface,
                                    LabellableInterface,
                                    ProposalListAwareInterface,
                                    SurveyAwareInterface,
                                    WeightableInterface
{
    /**
     * @return QuestionSubjectInterface|null
     */
    public function getAuthor(): ?QuestionSubjectInterface;

    /**
     * @param QuestionSubjectInterface|null $prmAuthor
     *
     * @return QuestionInterface
     */
    public function setAuthor(?QuestionSubjectInterface $prmAuthor): QuestionInterface;
}
