<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Entity;

use amillot\SurveyBundle\Model\QuestionInterface;
use amillot\SurveyBundle\Model\QuestionSubjectInterface;
use amillot\SurveyBundle\Traits\Labellable;
use amillot\SurveyBundle\Traits\SurveyAware;
use amillot\SurveyBundle\Traits\Weightable;

abstract class AbstractQuestion implements QuestionInterface
{
    use Labellable, SurveyAware, Weightable;

    protected $author;

    protected $id;

    public function __construct()
    {
        $this->id = uniqid('question', true);
    }

    public function __toString()
    {
        return sprintf('%s', $this->getLabel());
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthor(): ?QuestionSubjectInterface
    {
        return $this->author;
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthor(?QuestionSubjectInterface $prmAuthor): QuestionInterface
    {
        $this->author = $prmAuthor;

        return $this;
    }
}
