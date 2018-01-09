<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace Flyfinder;

/**
 * Integration test against examples/03-sample-phpdoc-layout.php
 * @coversNothing
 */
class FindOnSamplePhpdocLayout extends \PHPUnit_Framework_TestCase
{
    /**
     * @var string[] $result
     */
    public function testFindingOnSamplePhpdocLayout()
    {
        include(__DIR__ . '/../../examples/03-sample-phpdoc-layout.php');

        $this->assertCount(4, $result);
        $this->assertSame("JmsSerializerServiceProvider.php", $result[0]['basename']);
        $this->assertSame("MonologServiceProvider.php", $result[1]['basename']);
        $this->assertSame("Application.php", $result[2]['basename']);
        $this->assertSame("Bootstrap.php", $result[3]['basename']);
    }
}