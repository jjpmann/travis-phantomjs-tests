<?php


class PagesCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function testHomePage(AcceptanceTester $I)
    {
        $I->wantTo('visit home page');
        $I->amOnPage('/');
        $I->see('home');
    }

    // tests
    public function testAboutPage(AcceptanceTester $I)
    {
        $I->wantTo('visit about page');
        $I->amOnPage('/about');
        $I->see('about');
    }
}
