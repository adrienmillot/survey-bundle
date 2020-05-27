<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Entity;

use amillot\SurveyBundle\Model\AnswerInterface;
use amillot\SurveyBundle\Model\AnswerSubjectInterface;
use amillot\SurveyBundle\Traits\ProposalAware;
use amillot\SurveyBundle\Traits\QuestionAware;
use Gedmo\Timestampable\Traits\Timestampable;

abstract class AbstractAnswer implements AnswerInterface
{
    use ProposalAware, QuestionAware, Timestampable;

    protected $author;

    protected $id;

    /**
     * AbstractAnswer constructor.
     */
    public function __construct()
    {
        $this->id = uniqid('answer', true);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthor(): ?AnswerSubjectInterface
    {
        return $this->author;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function prePersist()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    public function preUpdate()
    {
        $this->updatedAt = new \DateTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthor(?AnswerSubjectInterface $prmAuthor): AnswerInterface
    {
        $this->author = $prmAuthor;

        return $this;
    }
}
