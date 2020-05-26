<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Entity;

use amillot\SurveyBundle\Model\AnswerInterface;
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
}
