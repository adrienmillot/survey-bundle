<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Model\Traits;

use amillot\SurveyBundle\Model\ProposalInterface;
use Doctrine\Common\Collections\Collection;

interface ProposalListAwareInterface
{
    /**
     * @param ProposalInterface $prmProposal
     *
     * @return ProposalListAwareInterface
     */
    public function addProposal(ProposalInterface $prmProposal): ProposalListAwareInterface;

    /**
     * @return Collection
     */
    public function getProposals(): Collection;

    /**
     * @param ProposalInterface $prmProposal
     *
     * @return ProposalListAwareInterface
     */
    public function removeProposal(ProposalInterface $prmProposal): ProposalListAwareInterface;

    /**
     * @param Collection $prmProposals
     *
     * @return ProposalListAwareInterface
     */
    public function setProposals(Collection $prmProposals): ProposalListAwareInterface;

    /**
     * @return bool
     */
    public function hasMultipleValidProposal(): bool;
}
