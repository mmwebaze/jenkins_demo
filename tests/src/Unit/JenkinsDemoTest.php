<?php
namespace Drupal\Tests\jenkins_demo\Unit;

use Drupal\Tests\UnitTestCase;

class JenkinsDemoTest extends UnitTestCase {

  protected $tests = [];

  public function setUp(){
    $this->tests = array(
      'id' => 1234,
      'name' => 'unit tests'
    );
  }
  public function testRuns(){
    $this->assertArrayHasKey('id', $this->tests);
  }
  public function tearDown() {
    $this->tests = [];
  }
}