<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Entity;

use amillot\SurveyBundle\Model\ProposalInterface;
use amillot\SurveyBundle\Traits\Labellable;
use amillot\SurveyBundle\Traits\QuestionAware;
use amillot\SurveyBundle\Traits\Validable;
use amillot\SurveyBundle\Traits\Weightable;

abstract class AbstractProposal implements ProposalInterface
{
    use Labellable, QuestionAware, Validable, Weightable;

    protected $id;

    public function __construct()
    {
        $this->id = uniqid('proposal', true);
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
}
