<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/20
 */

namespace ArchiveBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Narmafzam\ArchiveBundle\Entity\Base\ContractCommonLine as BaseClass;
use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractLineKindInterface;
use Narmafzam\ArchiveBundle\Entity\Interfaces\ContractTemplateInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="contract_common_line")
 */
class ContractCommonLine extends BaseClass
{
    /**
     * @ORM\ManyToMany(targetEntity="ArchiveBundle\Entity\ContractTemplate", inversedBy="commonLines")
     */
    protected $templates;

    /**
     * @ORM\ManyToOne(targetEntity="ArchiveBundle\Entity\ContractLineKind", inversedBy="commonLines")
     */
    protected $kind;

    public function __construct()
    {
        $this->templates = new ArrayCollection();
    }

    public function getTemplates(): Collection
    {
        return $this->templates;
    }

    public function addTemplate(ContractTemplateInterface $contractTemplate)
    {
        $this->templates->add($contractTemplate);
    }

    public function removeTemplate(ContractTemplateInterface $contractTemplate)
    {
        $this->templates->removeElement($contractTemplate);
    }

    public function getKind(): ContractLineKindInterface
    {
        return $this->kind;
    }

    public function setKind(ContractLineKindInterface $contractLineKind)
    {
        $this->kind = $contractLineKind;
    }

}