<?php

declare(strict_types=1);

namespace Prometee\SyliusGoogleRecaptchaV3Plugin\Form\Extension;

use Sylius\Bundle\CoreBundle\Form\Type\ContactType;

final class ContactFormExtension extends AbstractGoogleReCaptchaV3FormExtension
{
    /**
     * {@inheritDoc}
     */
    protected $actionName = 'contact';

    /**
     * {@inheritDoc}
     */
    public static function getExtendedTypes(): iterable
    {
        yield ContactType::class;
    }
}
