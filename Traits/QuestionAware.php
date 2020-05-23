<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Traits;

use amillot\SurveyBundle\Model\QuestionInterface;
use amillot\SurveyBundle\Model\Traits\QuestionAwareInterface;

trait QuestionAware
{
    protected $question;

    /**
     * {@inheritDoc}
     */
    public function getQuestion(): ?QuestionInterface
    {
        return $this->question;
    }

    /**
     * {@inheritDoc}
     */
    public function setQuestion(?QuestionInterface $prmQuestion): QuestionAwareInterface
    {
        $this->question = $prmQuestion;

        return $this;
    }
}
