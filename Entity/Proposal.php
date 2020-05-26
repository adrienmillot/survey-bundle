<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Entity;

use amillot\SurveyBundle\Traits\AnswerListAware;

class Proposal extends AbstractProposal
{
    use AnswerListAware {
        AnswerListAware::__construct as private __answerListAwareConstruct;
    }

    public function __construct()
    {
        parent::__construct();
        $this->__answerListAwareConstruct();
    }
}
