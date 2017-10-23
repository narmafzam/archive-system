<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/20
 */

namespace Narmafzam\ArchiveBundle\Form\Common;

use Narmafzam\ArchiveBundle\Form\AbstractWithDataClassType;
use Narmafzam\ArchiveBundle\Form\Common\Type\ContractChoiceType;
use Narmafzam\ArchiveBundle\Form\Common\Type\ContractLineKindChoiceType;
use Narmafzam\ArchiveBundle\Form\Common\Type\DescriptionType;
use Narmafzam\ArchiveBundle\Form\Common\Type\TitleType;
use Symfony\Component\Form\FormBuilderInterface;

class ContractLineType extends AbstractWithDataClassType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TitleType::class)
            ->add('description', DescriptionType::class)
            ->add('contract', ContractChoiceType::class)
            ->add('kind', ContractLineKindChoiceType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->getDataClass()
        ));
    }
}