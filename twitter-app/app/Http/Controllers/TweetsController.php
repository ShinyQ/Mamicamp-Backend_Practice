<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;

class TweetsController extends Controller
{
    public function store()
    {
      $attributes = request()->validate([
                      'body' => 'required|max:255'
                    ]);

      Tweet::create([
        'user_id' => auth()->user()->id,
        'body' => $attributes['body']
      ]);

      return redirect('/home');
    }
}
