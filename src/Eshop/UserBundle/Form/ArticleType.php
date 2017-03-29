<?php

namespace Eshop\UserBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomArticle')
            ->add('prix')
            ->add('quantite')
            ->add('promotion')
            ->add('description')
            ->add('image',imageArticleType::class)
            ->add('sousCategorie',EntityType::class,array('class'=>'EshopUserBundle:SousCategorie','choice_label'=>'nom','multiple'=>false))
//            ->add('submit',SubmitType::class)
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Eshop\UserBundle\Entity\Article'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'eshop_userbundle_article';
    }


}
