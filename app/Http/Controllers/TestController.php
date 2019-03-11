<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function morning() {
        return 'Morning';
    }
    public function afternon() {
        return 'Afternon';
    }
    public function evening() {
        return 'Evening';
    }

}
