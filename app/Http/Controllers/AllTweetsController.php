<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Tweet;
use App\Models\Comment;
use App\Models\Follower;

class AllTweetsController extends Controller
{
public function index(Tweet $tweet)
    {
        if(auth()->user()) {
            return redirect('tweets/');
        }
        $timelines = $tweet->getAllTweets();

        return view('alltweets.index', [
            'timelines' => $timelines
        ]);
    }
}