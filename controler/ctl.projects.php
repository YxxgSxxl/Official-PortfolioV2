<?php
class Projects{
    private $projects;
    public function __construct() {
        $this->projects = new Projects();
    }
    public function projects()
    {
        require '../pages/projects.php';
    }
}