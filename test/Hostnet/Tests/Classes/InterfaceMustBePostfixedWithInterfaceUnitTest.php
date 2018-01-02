<?php
/**
 * @copyright 2016-2018 Hostnet B.V.
 */
declare(strict_types=1);

namespace Hostnet\Tests\Classes;

use Hostnet\Tests\AbstractSniffUnitTest;

/**
 * @covers \Hostnet\Sniffs\Classes\InterfaceMustBePostfixedWithInterfaceSniff
 */
class InterfaceMustBePostfixedWithInterfaceUnitTest extends AbstractSniffUnitTest
{
    /**
     * Returns the lines where errors should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of errors that should occur on that line.
     *
     * @param string $filename
     *
     * @return [int => int]
     */
    public function getErrorList($filename = null)
    {
        switch ($filename) {
            case 'InterfaceMustBePostfixedWithInterfaceUnitTest.0.inc':
                return [];
            case 'InterfaceMustBePostfixedWithInterfaceUnitTest.1.inc':
                return [];
            case 'InterfaceMustBePostfixedWithInterfaceUnitTest.2.inc':
                return [3 => 1];
            case 'InterfaceMustBePostfixedWithInterfaceUnitTest.3.inc':
                return [];
        }
    }

    /**
     * Returns the lines where warnings should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of warnings that should occur on that line.
     *
     * @return [int => int]
     */
    public function getWarningList()
    {
        return [];
    }
}
