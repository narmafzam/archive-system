<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/20
 */

namespace Narmafzam\ArchiveBundle\Model\Handler;

use Narmafzam\ArchiveBundle\Entity\Interfaces\LetterInterface;
use Narmafzam\ArchiveBundle\Model\Handler\Interfaces\LetterHandlerInterface;

/**
 * Class LetterHandler
 * @package Narmafzam\ArchiveBundle\Model\Handler
 */
class LetterHandler extends Handler implements LetterHandlerInterface
{
    /**
     * @param LetterInterface $letter
     */
    public function newLetter(LetterInterface $letter)
    {
        $this->storeAttachments($letter);
        $this->getEntityManager()->persist($letter);
        $this->getEntityManager()->flush();
    }

    /**
     * @param LetterInterface $letter
     */
    public function editLetter(LetterInterface $letter)
    {
        $this->getEntityManager()->persist($letter);
        $this->getEntityManager()->flush();
    }
}