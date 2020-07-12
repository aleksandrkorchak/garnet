<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Message;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GuestBookController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('app');
    }


    public function store(StoreMessageRequest $request){

        Message::create([
            'user' => $request->user,
            'email' => $request->email,
            'text' => $request->text
        ]);

        return view('app');
    }

}
