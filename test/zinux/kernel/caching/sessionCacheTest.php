<?php

namespace zinux\kernel\caching;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-09-08 at 13:32:05.
 */
class sessionCacheTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var sessionCache
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new sessionCache(__CLASS__);
        for($index = 0; $index<10; $index++)
        {
            $this->object->save("KEY##$index", "VALUE##$index");
        }
        $this->assertNotNull($this->object);
        $this->assertTrue(isset($_SESSION[$this->object->getCacheDirectory()][$this->object->getCacheName()]));
        $this->assertCount(10, $this->object->fetchAll());
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        unset($_SESSION);
    }

    /**
     * @covers zinux\kernel\caching\sessionCache::deleteAll(
     * @todo   Implement testdeleteAll().
     */
    public function testdeleteAll()
    {
        $this->object->deleteAll();
        $this->assertCount(0, $this->object->fetchAll());
    }

    /**
     * @covers zinux\kernel\caching\sessionCache::setCachePath
     * @todo   Implement testSetCachePath().
     */
    public function testSetCachePath()
    {
        $this->object->setCachePath("FOO");
        $this->assertTrue(isset($_SESSION['FOO']));
        $this->assertEquals("FOO", $this->object->getCacheDirectory());
    }

    /**
     * @covers zinux\kernel\caching\sessionCache::getCacheDirectory
     * @todo   Implement testGetCacheDirectory().
     */
    public function testGetCacheDirectory()
    {
        $this->testSetCachePath();
    }

}
