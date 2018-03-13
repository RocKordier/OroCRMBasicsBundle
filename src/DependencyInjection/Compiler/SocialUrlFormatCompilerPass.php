<?php
namespace EHDev\Oro\CRMBasicsBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class SocialUrlFormatCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $container->setParameter(
            'oro_contact.social_url_format',
            array_merge(
                $container->getParameter('oro_contact.social_url_format'),
                ['xing' => 'https://www.xing.com/profile/%%username%%']
            )
        );
    }
}
