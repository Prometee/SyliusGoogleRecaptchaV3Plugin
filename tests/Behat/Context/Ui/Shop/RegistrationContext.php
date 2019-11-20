<?php

declare(strict_types=1);

namespace Tests\Prometee\SyliusGoogleRecaptchaV3Plugin\Behat\Context\Ui\Shop;

use Sylius\Behat\Element\Shop\Account\RegisterElementInterface;
use Sylius\Behat\Page\Shop\Account\RegisterPageInterface;

final class RegistrationContext extends AbstractCaptchaContext
{
    /** @var RegisterPageInterface */
    private $registerPage;

    /**
     * {@inheritDoc}
     *
     * @param RegisterPageInterface $registerPage
     */
    public function __construct(RegisterPageInterface $registerPage, RegisterElementInterface $registerElement)
    {
        $this->registerPage = $registerPage;
        parent::__construct($registerElement);
    }

    /**
     * @When /^I want to(?:| again) register a new account$/
     */
    public function iWantToRegisterANewAccount(): void
    {
        $this->registerPage->open();
    }

    /**
     * @When I specify the first name as :firstName
     * @When I do not specify the first name
     */
    public function iSpecifyTheFirstName(?string $firstName = null): void
    {
        $this->registerElement->specifyFirstName($firstName);
    }

    /**
     * @When I specify the last name as :lastName
     * @When I do not specify the last name
     */
    public function iSpecifyTheLastName(?string $lastName = null): void
    {
        $this->registerElement->specifyLastName($lastName);
    }

    /**
     * @When I specify the email as :email
     * @When I do not specify the email
     */
    public function iSpecifyTheEmail(?string $email = null): void
    {
        $this->registerElement->specifyEmail($email);
    }

    /**
     * @When I specify the password as :password
     * @When I do not specify the password
     */
    public function iSpecifyThePasswordAs(?string $password = null): void
    {
        $this->registerElement->specifyPassword($password);
        $this->sharedStorage->set('password', $password);
    }

    /**
     * @When /^I confirm (this password)$/
     */
    public function iConfirmThisPassword(string $password): void
    {
        $this->registerElement->verifyPassword($password);
    }
}