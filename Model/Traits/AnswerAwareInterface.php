<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Model\Traits;

use amillot\SurveyBundle\Model\AnswerInterface;

interface AnswerAwareInterface
{
    /**
     * @return AnswerInterface
     */
    public function getAnswer(): AnswerInterface;

    /**
     * @param AnswerInterface $prmAnswer
     *
     * @return AnswerAwareInterface
     */
    public function setAnswer(AnswerInterface $prmAnswer): AnswerAwareInterface;
}
