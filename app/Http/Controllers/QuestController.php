<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\QuestCompletion;
use App\Quest;
use App\CompletedQuests;
use Illuminate\Support\Facades\Auth;
use Alert;

class QuestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $today = date("Y-m-d");
        $activeBookingsCount = Booking::where('end_date', '>', $today)->where('start_date', '<=', $today)->count();
       
        $activeBookings = Booking::where('end_date', '>', $today)->where('start_date', '<=', $today)->first();
       
        $noActive = false;
        if($activeBookingsCount == 0){
            $noActive = true;
            return view('user.quests.index',compact('noActive'));
        }
        else{
            $quests = $activeBookings->package->quests;
            return view('user.quests.index', compact('quests','noActive'));
        }
    }

    public function completion($random_id)
    {

        $questCompletion = QuestCompletion::where('random_id', $random_id)->first();
        $quest = Quest::find($questCompletion->quest_id);
        //Check if ever completed 

        $today = date("Y-m-d");
        $activeBookingsCount =
        Booking::where('end_date', '>', $today)->where('start_date', '<=', $today)->count();
        $hasQuest = false;
        if($activeBookingsCount == 0){
            $hasQuest =false;
        }
        else{
            $activeBookings = Booking::where('end_date', '>', $today)->where('start_date', '<=', $today)->first();
            

            $quests = $activeBookings->package->quests;

    
            foreach ($quests as $q) {
                if ($q->id == $quest->id) {
                    $hasQuest = true;
                }
            }
        }



        if ($hasQuest == false) {
            Alert::warning('Oops!', 'Quests are no longer active or you are not the booking party!');
            return redirect('/user/dashboard');
        }

        if ($quest->isCompleted(Auth::user()->id)) {
            Alert::warning('Oops!', 'You have completed this quest before!');
            return redirect('/user/dashboard');
        }

        $completedQuest = new CompletedQuests();
        $completedQuest->user_id = Auth::user()->id;
        $completedQuest->quest_id = $quest->id;
        $completedQuest->save();

        $profile = Auth::user()->profile;
        $profile->points += $quest->points;
        $profile->save();

        Alert::success('Wohoo!', 'You have successfully completed a quest, you have received ' . $quest->points . 'points !');
        return redirect('/user/quests');
    }
}