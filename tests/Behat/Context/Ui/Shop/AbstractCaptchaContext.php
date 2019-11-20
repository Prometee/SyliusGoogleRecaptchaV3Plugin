<?php

declare(strict_types=1);

namespace Tests\Prometee\SyliusGoogleRecaptchaV3Plugin\Behat\Context\Ui\Shop;

use Behat\Behat\Context\Context;
use Behat\Mink\Exception\ElementNotFoundException;
use Sylius\Behat\Element\Shop\Account\RegisterElementInterface;
use Webmozart\Assert\Assert;

abstract class AbstractCaptchaContext implements Context
{

    /** @var RegisterElementInterface */
    private $registerElement;

    /**
     * @param RegisterElementInterface $registerElement
     */
    public function __construct(RegisterElementInterface $registerElement)
    {
        $this->registerElement = $registerElement;
    }

    /**
     * @Then /^I should be notified that I am a robot$/
     *
     * @throws ElementNotFoundException
     */
    public function iShouldBeNotifiedThatIAmARobot()
    {
        $this->assertFieldValidationMessage('captcha', 'Your computer or network may be sending automated queries');
    }

    /**
     * @param string $element
     * @param string $expectedMessage
     *
     * @throws ElementNotFoundException
     */
    private function assertFieldValidationMessage(string $element, string $expectedMessage): void
    {
        Assert::true($this->registerElement->checkValidationMessageFor($element, $expectedMessage));
    }
}