<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Traits;

use amillot\SurveyBundle\Model\ProposalInterface;
use amillot\SurveyBundle\Model\Traits\ProposalAwareInterface;

trait ProposalAware
{
    protected $proposal;

    /**
     * {@inheritDoc}
     */
    public function getProposal(): ?ProposalInterface
    {
        return $this->proposal;
    }

    /**
     * {@inheritDoc}
     */
    public function setProposal(?ProposalInterface $prmProposal): ProposalAwareInterface
    {
        $this->proposal = $prmProposal;

        return $this;
    }
}
