<?php

namespace App\Http\Controllers;

use App\AppUser;
use App\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if (empty(session('token'))) {
            return view('welcome');
        }

        $view = view('cards');
        $view->tasks = AppUser::findSession()->tasks;

        return $view;
    }

    public function setup()
    {
        session()->put('token', '934294029049');
        session()->put('decryptor', 'jaja');

        return redirect('/');
    }

    public function search(Request $request)
    {
        return AppUser::findSession()
            ->tasks()
            ->where('description', 'like', '%'.request('query').'%')
            ->orWhere('title', 'like', '%'.request('query').'%')
            ->pluck('id');
    }
}
