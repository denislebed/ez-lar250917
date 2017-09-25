<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class TaskController extends Controller {

    /**
     * Создание нового экземпляра контроллера.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }
/**
 * 
 * @param Request $request
 * @return type
 */
    
    public function index(Request $request) {
        return view('tasks.index');
    }

}
