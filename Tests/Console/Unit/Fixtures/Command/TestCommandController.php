<?php
declare(strict_types=1);
namespace Helhum\Typo3Console\Tests\Unit\Fixtures\Command;

/*
 * This file is part of the TYPO3 Console project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read
 * http://www.gnu.org/licenses/gpl-2.0.html
 *
 */

use Helhum\Typo3Console\Mvc\Controller\CommandController;

class TestCommandController extends CommandController
{
    /**
     * @param string $foo Foo bar
     */
    public function helloCommand(string $foo = '')
    {
    }
}
