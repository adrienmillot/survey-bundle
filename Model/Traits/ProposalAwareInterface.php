<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Model\Traits;

use amillot\SurveyBundle\Model\ProposalInterface;

interface ProposalAwareInterface
{
    /**
     * @return ProposalInterface|null
     */
    public function getProposal(): ?ProposalInterface;

    /**
     * @param ProposalInterface|null $prmProposal
     *
     * @return ProposalAwareInterface
     */
    public function setProposal(?ProposalInterface $prmProposal): ProposalAwareInterface;
}
