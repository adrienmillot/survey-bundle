<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Entity;

use amillot\SurveyBundle\Model\SurveyInterface;
use amillot\SurveyBundle\Model\SurveySubjectInterface;
use amillot\SurveyBundle\Traits\Labellable;

abstract class AbstractSurvey implements SurveyInterface
{
    use Labellable;

    protected $author;

    protected $id;

    public function __construct()
    {
        $this->id = uniqid('survey', true);
    }

    public function __toString()
    {
        return sprintf('%s', $this->getLabel());
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthor(): ?SurveySubjectInterface
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

    /**
     * {@inheritDoc}
     */
    public function setAuthor(?SurveySubjectInterface $prmAuthor): SurveyInterface
    {
        $this->author = $prmAuthor;

        return $this;
    }
}

