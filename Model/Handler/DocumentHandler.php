<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/20
 */

namespace Narmafzam\ArchiveBundle\Model\Handler;

use Narmafzam\ArchiveBundle\Entity\Interfaces\DocumentInterface;
use Narmafzam\ArchiveBundle\Model\Handler\Interfaces\DocumentHandlerInterface;

/**
 * Class DocumentHandler
 * @package Narmafzam\ArchiveBundle\Model\Handler
 */
class DocumentHandler extends Handler implements DocumentHandlerInterface
{
    /**
     * @param DocumentInterface $document
     */
    public function newDocument(DocumentInterface $document)
    {
        $this->storeAttachments($document);
        $this->getEntityManager()->persist($document);
        $this->getEntityManager()->flush();
    }

    /**
     * @param DocumentInterface $document
     */
    public function editDocument(DocumentInterface $document)
    {
        $this->getEntityManager()->persist($document);
        $this->getEntityManager()->flush();
    }
}