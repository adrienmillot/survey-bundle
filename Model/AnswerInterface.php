<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Model;

use amillot\SurveyBundle\Model\Traits\ProposalAwareInterface;
use amillot\SurveyBundle\Model\Traits\QuestionAwareInterface;

interface AnswerInterface extends ProposalAwareInterface, QuestionAwareInterface
{
    /**
     * {@inheritDoc}
     */
    public function getAuthor(): ?AnswerSubjectInterface;

    /**
     * {@inheritDoc}
     */
    public function setAuthor(?AnswerSubjectInterface $prmAuthor): AnswerInterface;
}
