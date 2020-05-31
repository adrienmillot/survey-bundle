<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Traits;

use amillot\SurveyBundle\Model\QuestionInterface;
use amillot\SurveyBundle\Model\Traits\QuestionListAwareInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

trait QuestionListAware
{
    protected $questions;

    public function __construct()
    {
        $this->questions = new ArrayCollection();
    }

    /**
     * {@inheritDoc}
     */
    public function addQuestion(QuestionInterface $prmQuestion): QuestionListAwareInterface
    {
        if (!$this->questions->contains($prmQuestion)) {
            $this->questions->add($prmQuestion);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getQuestions(): Collection
    {
        return $this->questions;
    }

    /**
     * {@inheritDoc}
     */
    public function removeQuestion(QuestionInterface $prmQuestion): QuestionListAwareInterface
    {
        if ($this->questions->contains($prmQuestion)) {
            $this->questions->removeElement($prmQuestion);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setQuestions(Collection $prmQuestions): QuestionListAwareInterface
    {
        $this->questions = $prmQuestions;

        return $this;
    }
}
