<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Model\Traits;

use amillot\SurveyBundle\Model\QuestionInterface;
use Doctrine\Common\Collections\Collection;

interface QuestionListAwareInterface
{
    /**
     * @param QuestionInterface $prmQuestion
     *
     * @return QuestionListAwareInterface
     */
    public function addQuestion(QuestionInterface $prmQuestion): QuestionListAwareInterface;

    /**
     * @return Collection
     */
    public function getQuestions(): Collection;

    /**
     * @param QuestionInterface $prmQuestion
     *
     * @return QuestionListAwareInterface
     */
    public function removeQuestion(QuestionInterface $prmQuestion): QuestionListAwareInterface;

    /**
     * @param Collection $prmQuestions
     *
     * @return QuestionListAwareInterface
     */
    public function setQuestions(Collection $prmQuestions): QuestionListAwareInterface;
}
