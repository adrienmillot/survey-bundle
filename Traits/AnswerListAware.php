<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Traits;

use amillot\SurveyBundle\Model\AnswerInterface;
use amillot\SurveyBundle\Model\Traits\AnswerListAwareInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

trait AnswerListAware
{
    protected $answers;

    public function __construct()
    {
        $this->answers = new ArrayCollection();
    }

    /**
     * {@inheritDoc}
     */
    public function addAnswer(AnswerInterface $prmAnswer): AnswerListAwareInterface
    {
        if (!$this->answers->contains($prmAnswer)) {
            $this->answers->add($prmAnswer);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getAnswers(): Collection
    {
        return $this->answers;
    }

    /**
     * {@inheritDoc}
     */
    public function removeAnswer(AnswerInterface $prmAnswer): AnswerListAwareInterface
    {
        if ($this->answers->contains($prmAnswer)) {
            $this->answers->removeElement($prmAnswer);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setAnswers(Collection $prmAnswers): AnswerListAwareInterface
    {
        $this->answers = $prmAnswers;

        return $this;
    }
}
