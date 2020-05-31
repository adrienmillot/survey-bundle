<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Traits;

use amillot\SurveyBundle\Model\ProposalInterface;
use amillot\SurveyBundle\Model\Traits\ProposalListAwareInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

trait ProposalListAware
{
    protected $proposals;

    public function __construct()
    {
        $this->proposals = new ArrayCollection();
    }

    /**
     * {@inheritDoc}
     */
    public function addProposal(ProposalInterface $prmProposal): ProposalListAwareInterface
    {
        if (!$this->proposals->contains($prmProposal)) {
            $this->proposals->add($prmProposal);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getProposals(): Collection
    {
        return $this->proposals;
    }

    /**
     * {@inheritDoc}
     */
    public function removeProposal(ProposalInterface $prmProposal): ProposalListAwareInterface
    {
        if ($this->proposals->contains($prmProposal)) {
            $this->proposals->removeElement($prmProposal);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setProposals(Collection $prmProposals): ProposalListAwareInterface
    {
        $this->proposals = $prmProposals;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function hasMultipleValidProposal(): bool
    {
        $validProposalNumber = 0;

        $this->getProposals()->map(function (ProposalInterface $prmProposal) use (&$validProposalNumber) {
            if ($prmProposal->isValid()) {
                $validProposalNumber++;
            }
        });

        return $validProposalNumber > 1 ? true : false;
    }

    public function getGoodProposals()
    {
        $validProposal = new ArrayCollection();

        $this->getProposals()->map(function (ProposalInterface $prmProposal) use (&$validProposal) {
            if ($prmProposal->isValid() and !$validProposal->contains($prmProposal)) {
                $validProposal->add($prmProposal);
            }
        });

        return $validProposal;
    }

    public function getHigherProposal()
    {
        $higherProposal = null;

        $this->getProposals()->map(function (ProposalInterface $prmProposal) use (&$higherProposal) {
            if (null === $higherProposal || ($higherProposal->getWeight() < $prmProposal->getWeight())) {
                $higherProposal = $prmProposal;
            }
        });

        return $higherProposal;
    }
}
