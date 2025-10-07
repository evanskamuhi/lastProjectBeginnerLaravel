<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public static function index()
    {
        return view("content.admin.dashboard");
    }
    
    public static function order()
    {
        return view("content.admin.order");
    }
    
    public static function menu()
    {
        return view("content.admin.menu");
    }
    
    public static function user()
    {
        return view("content.admin.user");
    }
    
    public static function seller()
    {
        return view("content.admin.seller");
    }
    
    public static function comment()
    {
        return view("content.admin.comment");
    }
    
    public static function history()
    {
        return view("content.admin.history");
    }
    
}
