<?php

/**
 * Created by PhpStorm.
 * User: Kevin Davies
 * Date: 15/05/16
 * Time: 11:35 AM
 */

// Configure this file by going to Preferences -> Editor -> File and Code Templates
// To set coding standard go to Preferences -> Editor -> Inspections -> PHP -> PHP Code Sniffer validation
// [in coding standards drop down select desired coding standard]
// To verify this file go to Code -> Inspect code
// To install a composer package right click on project name, click on composer and select init. Once done select
// composer again and select add dependency.
// To add a bookmark click fn+F3
// To show bookmarks click fn+cmd+F3
// To go to a bookmark click ctl+[0=9]
// To format cmd+alt+L

// http://phpunit.de
// Preferences -> Languages and Frameworks -> PHP -> phpUnit
//(For composer instead of selecting Path to phpunit.phar select “Use custom autoloader” and point it to the
// autoload.php file in the vendor directory)
//phpunit.phar is in /Applications/Utitlities
//Select “External libraries” in the left hand tree, then from main menu Run->Edit configurations,
// click “+” and select phpUnit (directory is where the phpunit tests are located).
//(For composer select “Use alternative configuration file” and point to phpunit.xml)
//Right click -> New -> PHPUnit -> PHPUnit Test. Then cmd+N to add a new test method.

// To generate constructors etc go to Code -> Generate (cmd+N)
// To extract code into a new method click ctl+alt+M.

/** @noinspection PhpIncludeInspection */
include getcwd() . "/src/WhatsNewInPHP7.php";

use premiumwebtechnologies\whatsnew\WhatsNewInPHP7;

/** @noinspection PhpUndefinedClassInspection */
class WhatsNewInPHP7Test extends PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testScalarTypeDeclaration()
    {
        $whatsNewInPHP7 = new WhatsNewInPHP7();
        $ret = $whatsNewInPHP7->scalarTypeDeclaration(1, 2, 3);
        /** @noinspection PhpUndefinedMethodInspection */
        $this->assertTrue($ret==6);
    }

    public function testReturnTypeDeclaration()
    {

        $whatsNewInPHP7 = new premiumwebtechnologies\whatsnew\WhatsNewInPHP7();
        $ret = $whatsNewInPHP7->returnTypeDeclaration(110);

        /** @noinspection PhpUndefinedMethodInspection */
        $this->assertTrue($ret==110);
    }

    public function testNullCoalescingOperator()
    {
        $whatsNewInPHP7 = new premiumwebtechnologies\whatsnew\WhatsNewInPHP7();
        $ret = $whatsNewInPHP7->nullCoalescingOperator(false);
        $this->assertTrue(true);

        $ret = $whatsNewInPHP7->nullCoalescingOperator(true);
        $this->assertTrue(true);
        
    }

    public function testAnonymousClasses()
    {
        $whatsNewInPHP7 = new premiumwebtechnologies\whatsnew\WhatsNewInPHP7();
        $ret = $whatsNewInPHP7->anonymousClasses();

        /** @noinspection PhpUndefinedMethodInspection */
        $this->assertTrue($ret);
    }

    public function testClosureCall()
    {
        $whatsNewInPHP7 = new premiumwebtechnologies\whatsnew\WhatsNewInPHP7();
        $ret = $whatsNewInPHP7->closureCall();

        /** @noinspection PhpUndefinedMethodInspection */
        $this->assertTrue($ret==1);
    }

    public function testGeneratorReturnExpressions()
    {
        $whatsNewInPHP7 = new premiumwebtechnologies\whatsnew\WhatsNewInPHP7();
        $ret = $whatsNewInPHP7->generatorReturnExpressions();

        /** @noinspection PhpUndefinedMethodInspection */
        $this->assertTrue($ret==3);
    }

    public function testGeneratorDelegation()
    {
        $whatsNewInPHP7 = new premiumwebtechnologies\whatsnew\WhatsNewInPHP7();
        $ret = $whatsNewInPHP7->generatorDelegation();

        /** @noinspection PhpUndefinedMethodInspection */
        $this->assertTrue($ret==10);
    }
}
