<?php

declare(strict_types=1);

namespace Prometee\SyliusGoogleRecaptchaV3Plugin\Form\Extension;

use Sylius\Bundle\CoreBundle\Form\Type\ContactType;

final class ContactFormExtension extends AbstractGoogleReCaptchaV3FormExtension
{
    protected $actionName = 'contact';

    public static function getExtendedTypes(): iterable
    {
        yield ContactType::class;
    }
}
