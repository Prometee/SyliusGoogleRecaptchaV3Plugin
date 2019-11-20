<?php

declare(strict_types=1);

namespace Tests\Prometee\SyliusGoogleRecaptchaV3Plugin\Behat\Context\Ui\Shop;

use FriendsOfBehat\PageObjectExtension\Page\UnexpectedPageException;
use Sylius\Behat\Element\Shop\Account\RegisterElementInterface;
use Sylius\Behat\Page\Shop\Contact\ContactPageInterface;

final class ContactContext extends AbstractCaptchaContext
{
    /** @var ContactPageInterface */
    private $contactPage;

    /**
     * {@inheritDoc}
     *
     * @param ContactPageInterface $contactPage
     */
    public function __construct(ContactPageInterface $contactPage, RegisterElementInterface $registerElement)
    {
        $this->contactPage = $contactPage;
        parent::__construct($registerElement);
    }

    /**
     * @When I want to request contact
     * @throws UnexpectedPageException
     */
    public function iWantToRequestContact()
    {
        $this->contactPage->open();
    }

    /**
     * @When I specify the email as :email
     * @When I do not specify the email
     *
     * @param null $email
     */
    public function iSpecifyTheEmail($email = null)
    {
        $this->contactPage->specifyEmail($email);
    }

    /**
     * @When I specify the message as :message
     * @When I do not specify the message
     *
     * @param null $message
     */
    public function iSpecifyTheMessage($message = null)
    {
        $this->contactPage->specifyMessage($message);
    }
}