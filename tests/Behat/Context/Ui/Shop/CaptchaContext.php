<?php

declare(strict_types=1);

namespace Tests\Prometee\SyliusGoogleRecaptchaV3Plugin\Behat\Context\Ui\Shop;

use Behat\Behat\Context\Context;
use FriendsOfBehat\PageObjectExtension\Page\SymfonyPageInterface;
use FriendsOfBehat\PageObjectExtension\Page\UnexpectedPageException;

final class CaptchaContext implements Context
{
    /** @var SymfonyPageInterface */
    private $page;

    /**
     * @param SymfonyPageInterface $page
     */
    public function __construct(SymfonyPageInterface $page)
    {
        $this->page = $page;
    }

    /**
     * @Then /^I should stay on the same page$/
     *
     * @throws UnexpectedPageException
     */
    public function iShouldStayOnTheSamePage(): void
    {
        $this->page->verifyRoute();
    }
}
