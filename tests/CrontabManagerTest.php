<?php
namespace tests\php\manager\crontab;

use tests\php\manager\crontab\mock\MockCrontabManager;

require_once __DIR__ . '/mock/MockCrontabManager.php';
require_once dirname(__DIR__) . '/src/CronEntry.php';



/**
 * Test class for CrontabManager.
 * Generated by PHPUnit on 2012-04-10 at 16:09:21.
 */
class CrontabManagerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \php\manager\crontab\CrontabManager
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $content = file_get_contents(__DIR__ . '/resources/cronfile.txt');
        
        $manager = new MockCrontabManager();
        $manager->setInitialContents($content);
        $this->object = $manager; 
    }

    public function testNewJob()
    {
        $job = $this->object->newJob();
        $this->assertInstanceOf('php\manager\crontab\CronEntry', $job);
        $actual = $job->render();
        $expected = 'dgfg';
        $this->assertEquals($expected, $actual);
    }

    /**
     * @todo Implement testAdd().
     */
    public function testAdd()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testReplace().
     */
    public function testReplace()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testEnableFile().
     */
    public function testEnableOrUpdateFile()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testDisableFile().
     */
    public function testDisableFile()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testSave().
     */
    public function testSave()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testListJobs().
     */
    public function testListJobs()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
          'This test has not been implemented yet.'
        );
    }
}
