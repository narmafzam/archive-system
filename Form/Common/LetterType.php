<?php
/**
 * Created by PhpStorm.
 * User: peyman
 * Date: 10/8/17
 * Time: 7:02 PM
 */

namespace Narmafzam\ArchiveBundle\Form\Common;

use Narmafzam\ArchiveBundle\Form\Common\Interfaces\ContractTypeInterface;
use Narmafzam\ArchiveBundle\Form\Common\Type\DescriptionType;
use Narmafzam\ArchiveBundle\Form\Common\Type\SubjectType;
use Narmafzam\ArchiveBundle\Form\Common\Type\TitleType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LetterType extends AbstractType
{
    /**
     * @var string
     */
    protected $dataClass;

    /**
     * @param string $dataClass
     */
    public function __construct($dataClass)
    {
        $this->dataClass = $dataClass;
    }

    /**
     * @return string
     */
    public function getDataClass()
    {
        return $this->dataClass;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TitleType::class)
            ->add('description', DescriptionType::class)
            ->add('subject', SubjectType::class)
            ->add('attachments', CollectionType::class, array(
                'entry_type'    => ContractAttachmentType::class,
                'entry_options' => array(
                    'label'     => false
                )
            ))
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->getDataClass()
        ));
    }

    public function getBlockPrefix()
    {
        return 'back_contract';
    }
}