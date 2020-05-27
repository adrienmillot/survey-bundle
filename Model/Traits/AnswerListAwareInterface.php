<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Model\Traits;

use amillot\SurveyBundle\Model\AnswerInterface;
use Doctrine\Common\Collections\Collection;

interface AnswerListAwareInterface
{
    /**
     * @param AnswerInterface $prmAnswer
     *
     * @return AnswerListAwareInterface
     */
    public function addAnswer(AnswerInterface $prmAnswer): AnswerListAwareInterface;

    /**
     * @return Collection
     */
    public function getAnswers(): Collection;

    /**
     * @param AnswerInterface $prmAnswer
     *
     * @return AnswerListAwareInterface
     */
    public function removeAnswer(AnswerInterface $prmAnswer): AnswerListAwareInterface;

    /**
     * @param Collection $prmAnswers
     *
     * @return AnswerListAwareInterface
     */
    public function setAnswers(Collection $prmAnswers): AnswerListAwareInterface;
}
