<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function detail() {
        return "Chi tiết sản phẩm";
    }
    public function list() {
        return "Danh sách sản phẩm";
    }
}
