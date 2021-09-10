<?php

declare(strict_types=1);

namespace Prometee\SyliusGoogleRecaptchaV3Plugin\Form\Extension;

use Sylius\Bundle\CoreBundle\Form\Type\Customer\CustomerRegistrationType;

final class CustomerRegistrationFormExtension extends AbstractGoogleReCaptchaV3FormExtension
{
    protected $actionName = 'customer_registration';

    public static function getExtendedTypes(): iterable
    {
        yield CustomerRegistrationType::class;
    }
}
