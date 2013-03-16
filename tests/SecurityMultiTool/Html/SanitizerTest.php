<?php
/**
 * SecurityMultiTool
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://github.com/padraic/SecurityMultiTool/blob/master/LICENSE
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to padraic@php.net so we can send you a copy immediately.
 *
 * @category   SecurityMultiTool
 * @package    SecurityMultiTool
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2013 Pádraic Brady (http://blog.astrumfutura.com)
 * @license    http://github.com/padraic/SecurityMultiTool/blob/master/LICENSE New BSD License
 */

use SecurityMultiTool\Html\Sanitizer;

class SanitizerTest extends \PHPUnit_Framework_TestCase
{

    protected $cache = '';

    public function setup()
    {
        $this->cache = sys_get_temp_dir();
    }

    public function testSanitizerCanBeCreatedWithoutIncident()
    {
        $sanitizer = new Sanitizer($this->cache);
    }

    public function testSanitizerCreationThrowsExceptionIfCacheDirectoryNotExists()
    {
        $this->setExpectedException('\SecurityMultiTool\Exception\RuntimeException');
        $sanitizer = new Sanitizer('/does/not/exist');
    }

}