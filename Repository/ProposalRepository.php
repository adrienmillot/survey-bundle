<?php

declare(strict_types=1);

namespace amillot\SurveyBundle\Repository;

use amillot\SurveyBundle\Entity\Proposal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Proposal|null find($id, $lockMode = null, $lockVersion = null)
 * @method Proposal|null findOneBy(array $criteria, array $orderBy = null)
 * @method Proposal[]    findAll()
 * @method Proposal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProposalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Proposal::class);
    }
}
