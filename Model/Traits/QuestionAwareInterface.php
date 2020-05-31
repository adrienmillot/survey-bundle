<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Model\Traits;

use amillot\SurveyBundle\Model\QuestionInterface;

interface QuestionAwareInterface
{
    /**
     * @return QuestionInterface|null
     */
    public function getQuestion(): ?QuestionInterface;

    /**
     * @param QuestionInterface|null $prmQuestion
     *
     * @return QuestionAwareInterface
     */
    public function setQuestion(?QuestionInterface $prmQuestion): QuestionAwareInterface;
}
