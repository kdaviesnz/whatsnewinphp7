<?php
declare(strict_types = 1); // must be first line

namespace premiumwebtechnologies\whatsnew; // use premiumwebtechnologies\whatsnew\WhatsNewInPHP7;

    /**
     * Created by PhpStorm.
     * User: Kevin Davies
     * Date: 15/05/16
     * Time: 11:22 AM
     */

// Configure this file by going to Preferences -> Editor -> File and Code Templates
// To set coding standard go to Preferences -> Editor -> Inspections -> PHP -> PHP Code Sniffer validation
// [in coding standards drop down select desired coding standard]
// To set PHP version to use click on External Libraries on left pane and select Configure PHP include paths.
// To verify this file go to Code -> Inspect code
// To view error log go to /Applications/MAMP/logs
// To install a composer package right click on project name, click on composer and select init. Once done select
// composer again and select add dependency.
// To add a bookmark click fn+F3
// To show bookmarks click fn+cmd+F3
// To go to a bookmark click ctl+[0=9]
// To format cmd+alt+L
// To duplicate a line(s): cmd+d

// To generate constructors etc go to Code -> Generate (cmd+N)
// To extract code into a new method click ctl+alt+M.

include getcwd()."/src/TempClass.php";

class WhatsNewInPHP7
{
    public function __construct()
    {
    }

    public function scalarTypeDeclaration(int ...$ints)
    {
        return array_sum($ints);
    }


    /**
     * @param int $val
     * @return int
     */
    public function returnTypeDeclaration(int $val):int
    {
        return $val;
    }

    /**
     * @param bool $test
     * @return bool
     */
    public function nullCoalescingOperator(bool $test):bool
    {
        return $test?? false;
    }

    public function anonymousClasses():bool
    {
        $temp = new class
        {
            public function testme():bool
            {
                return true;
            }
        };
        /** @noinspection PhpUndefinedMethodInspection */
        return $temp->testme();
    }

    public function closureCall():int
    {
        $getX = function () {
            /** @noinspection PhpUndefinedFieldInspection */
            return $this->x;
        };
        return $getX->call(new TempClass);
    }

    public function generatorReturnExpressions():int
    {
        $gen = (function () {
            yield 1;
            yield 2;

            return 3;
        })();

        foreach ($gen as $val) {
//           // echo $val, PHP_EOL;
        }

        return $gen->getReturn();

    }

    public function generatorDelegation():int
    {
        $a = array();
        function gen()
        {
            yield 1;
            yield 2;
            yield from gen2();
        }

        function gen2()
        {
            yield 3;
            yield 4;
        }

        foreach (gen() as $val)
        {
            $a[] = $val;
        }
        return array_sum($a);
    }
}
