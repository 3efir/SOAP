<?php
class MainFacade
{
    protected $client;
    public function __construct()
    {
        $this -> client = new Client();
    }
    public function getAllCars()
    {
        $this -> client -> getAllCars(); 
    }
}
?>
