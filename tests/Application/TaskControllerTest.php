<?php

/**
 * TaskController test case.
 */

use Application\controller\TaskController;

class TaskControllerTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var TaskController
     */
    private $taskController;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
    }
    
    public function testGetHomePage(){
        //Mock the model here
        $mockModel = Mockery::mock('TaskModel');
        $mockModel->expects('get')->once()->andReturn(35);
        
        $this->taskController = new TaskController($mockModel,null);
    
        $this->assertEquals("<b>35</b>",($this->taskController->getHomePage()));
    }
    

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated TaskControllerTest::tearDown()
        $this->taskController = null;
        
        parent::tearDown();
    }

   
}

