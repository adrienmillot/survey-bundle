<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Traits;

use amillot\SurveyBundle\Model\AnswerInterface;

class AnswerAware
{
    protected $answer;

    /**
     * {@inheritDoc}
     */
    public function getAnswer(): AnswerInterface
    {
        return $this->answer;
    }

    /**
     * {@inheritDoc}
     */
    public function setAnswer(AnswerInterface $prmAnswer): AnswerAware
    {
        $this->answer = $prmAnswer;

        return $this;
    }
}
