<?php

declare(strict_types=1);

namespace Tests\Prometee\SyliusGoogleRecaptchaV3Plugin\Behat\Context\Ui\Shop;

use Behat\Behat\Context\Context;
use FriendsOfBehat\PageObjectExtension\Page\PageInterface;
use FriendsOfBehat\PageObjectExtension\Page\UnexpectedPageException;

final class CaptchaContext implements Context
{
    /** @var PageInterface */
    private $page;

    /**
     * @param PageInterface $page
     */
    public function __construct(PageInterface $page)
    {
        $this->page = $page;
    }

    /**
     * @Then /^I should stay on the same page$/
     *
     * @throws UnexpectedPageException
     */
    public function iShouldStayOnTheSamePage()
    {
        $this->page->verify();
    }
}