<?php
class IndexController
{
    protected $facade;
    public function __construct()
    {
        $this -> facade = new MainFacade(); 
    }
    public function indexAction()
    {
       $this -> facade -> getAllCars(); 
    }
}
?>
