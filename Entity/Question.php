<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Entity;

use amillot\SurveyBundle\Traits\AnswerListAware;
use amillot\SurveyBundle\Traits\ProposalListAware;

class Question extends AbstractQuestion
{
    use AnswerListAware {
        AnswerListAware::__construct as private __answerListAwareConstruct;
    }

    use ProposalListAware {
        ProposalListAware::__construct as private __proposalListAwareConstruct;
    }

    public function __construct()
    {
        parent::__construct();
        $this->__answerListAwareConstruct();
        $this->__proposalListAwareConstruct();
    }
}
