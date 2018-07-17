<?php

namespace App\Http\Controllers\Manage;

use LaraFlash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        // flash message to let user know it was successful
        flash('Something went wrong', array('title' => 'Oops! ', 'type' => 'danger', 'priority' => 5));
        flash('We did it!');
        flash('One small problem occurred', ['type' => 'warning']);
        return view('manage.index');
    }
}
