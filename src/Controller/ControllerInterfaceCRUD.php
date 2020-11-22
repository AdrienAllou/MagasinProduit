<?php


namespace App\Controller;


interface ControllerInterfaceCRUD
{
    public function index();

    public function add();

    public function edit();

    public function delete();
}