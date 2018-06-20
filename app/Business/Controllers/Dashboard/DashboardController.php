<?php

namespace App\Business\Controllers\Dashboard;

use App\Http\Controllers\Controller;


/**
 * Class DashboardController.
 *
 * @package namespace App\Business\Controllers\Dashboard;
 */
class DashboardController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('dashboard.index');
    }
}
