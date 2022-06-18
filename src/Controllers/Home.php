<?php

namespace Soon\Controllers;

use App\Controllers\BaseController;

/**
 * Class Home
 */
class Home extends BaseController
{
    public function index($type = 0)
    {
        switch ($type) {
            case 1:
                echo view('Soon\Views\soon-video');
                break;
            case 2:
                echo view('Soon\Views\soon-cream');
                break;
            case 3:
                echo view('Soon\Views\soon-restaurant');
                break;
            case 4:
                echo view('Soon\Views\soon-img');
                break;
            default:
                echo view('Soon\Views\soon');
                break;
        }
    }
}