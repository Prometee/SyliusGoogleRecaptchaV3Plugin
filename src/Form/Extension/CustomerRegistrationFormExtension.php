<?php

declare(strict_types=1);

namespace Prometee\SyliusGoogleRecaptchaV3Plugin\Form\Extension;

use Sylius\Bundle\CoreBundle\Form\Type\Customer\CustomerRegistrationType;

final class CustomerRegistrationFormExtension extends AbstractGoogleReCaptchaV3FormExtension
{
    /**
     * {@inheritDoc}
     */
    protected $actionName = 'customer_registration';

    /**
     * {@inheritDoc}
     */
    public static function getExtendedTypes(): iterable
    {
        yield CustomerRegistrationType::class;
    }
}
