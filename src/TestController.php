<?php
namespace DerksArno\Test;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TestController extends Controller
{
    public function index($timezone = null)
    {
        $current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        return view('test::admin', compact('current_time'));
    }
}