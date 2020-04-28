<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Entity;

use amillot\SurveyBundle\Traits\ProposalListAware;

class Question extends AbstractQuestion
{
    use ProposalListAware {
        ProposalListAware::__construct as private __proposalListAwareConstruct;
    }

    public function __construct()
    {
        parent::__construct();
        $this->__proposalListAwareConstruct();
    }
}
