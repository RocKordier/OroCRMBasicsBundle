<?php
namespace EHDev\Oro\CRMBasicsBundle;

use EHDev\Oro\CRMBasicsBundle\DependencyInjection\Compiler\SocialUrlFormatCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class EHDevOroCRMBasicsBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new SocialUrlFormatCompilerPass());
    }
}
