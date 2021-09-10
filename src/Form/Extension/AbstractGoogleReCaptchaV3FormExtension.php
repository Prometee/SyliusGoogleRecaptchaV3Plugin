<?php

declare(strict_types=1);

namespace Prometee\SyliusGoogleRecaptchaV3Plugin\Form\Extension;

use Karser\Recaptcha3Bundle\Form\Recaptcha3Type;
use Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

abstract class AbstractGoogleReCaptchaV3FormExtension extends AbstractTypeExtension
{
    /** @var string[]|null */
    protected $validationGroups;

    /** @var string|null */
    protected $actionName;

    /** @var bool */
    protected $enabled;

    /**
     * @param string[]|null $validationGroups
     */
    public function __construct(bool $enabled, ?array $validationGroups = null, string $actionName = null)
    {
        $this->enabled = $enabled;
        $this->actionName = $actionName;
        $this->validationGroups = $validationGroups;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $validatorOptions = [];
        if (null !== $this->validationGroups) {
            $validatorOptions['groups'] = $this->validationGroups;
        }

        $constraints = [
            new Recaptcha3($validatorOptions),
        ];

        if ($this->enabled) {
            $constraints[] = new NotBlank($validatorOptions);
        }

        $builder->add('captcha', Recaptcha3Type::class, [
            'mapped' => false,
            'constraints' => $constraints,
            'action_name' => $this->actionName,
        ]);
    }
}
