<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/27
 */

namespace Narmafzam\ArchiveBundle\ViewModel\Interfaces;

use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractInterface;
use Symfony\Component\Routing\RouterInterface;

interface ContractShowInterface extends ShowInterface
{
    public function __construct(string $dataClass, ContractInterface $contract, RouterInterface $router);
}