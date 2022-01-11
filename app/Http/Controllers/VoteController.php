<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;
use App\Models\candidate;
use App\Models\Role;
use App\Models\User;

class VoteController extends Controller
{
    public function index(Vote $data){
        
        $votes = Vote::all();
        $candidates = Candidate::all();
        $candidateOne = Vote::where('voted_for','=','1')->count();
        $candidateTwo = Vote::where('voted_for','=','2')->count();
        $candidateThree = Vote::where('voted_for','=','3')->count();
        $candidateFour = Vote::where('voted_for','=','4')->count();
        $candidateFive = Vote::where('voted_for','=','Dogancan')->count();
        $datas = $votes->concat($candidates);


        $dataPoints = [];

        foreach ($votes as $vote) {
            
            $dataPoints[] = [
                "name" => $vote['voted_candidate'],
                "y" => intval($vote['voted_for'])
            ];
        }

        return view('result', ['datas'=>$datas, "value" => json_encode($dataPoints), 'candidateOne'=>$candidateOne, 'candidateTwo'=>$candidateTwo, 'candidateThree'=>$candidateThree, 'candidateFour'=>$candidateFour,'candidateFive'=>$candidateFive]);
    }

    public function voteMain(candidate $candidate){
        return view('vote', ['candidate'=>$candidate, 'candidates'=>candidate::all()]);
    }

    public function showTopics(){
        return view('topics');
    }

    public function createTopic(){
        return view('create-topic');
    }

    public function redirect(){

        return redirect()->route('admin.index');
    }

    public function store(){

        //$vote_new = new Vote;
        //$vote_new->voted_for = request()->get('cname');
        //$vote_new->save();
        //return redirect()->route('vote');

        switch ($_POST['voteRadio']) {
            case "vote1":
                Vote::where('voted_candidate', request()->get('cname'))->increment('voted_for');
                $user = auth()->user();
                $user->roles()->attach(request('role'));
                return redirect()->route('vote');
            case "vote2":
                Vote::where('voted_candidate', request()->get('cname2'))->increment('voted_for');
                $user = auth()->user();
                $user->roles()->attach(request('role'));
                return redirect()->route('vote');
            case "vote3":
                Vote::where('voted_candidate', request()->get('cname3'))->increment('voted_for');
                $user = auth()->user();
                $user->roles()->attach(request('role'));
                return redirect()->route('vote');
            case "vote4":
                Vote::where('voted_candidate', request()->get('cname4'))->increment('voted_for');
                $user = auth()->user();
                $user->roles()->attach(request('role'));
                return redirect()->route('vote');
            default:
                return redirect()->route('home');
            }

    }
}



## Adding each vote as a new record in database
## $vote_new = new Vote;
## $vote_new->voted_for = request()->get('cname4');
## $vote_new->save();
## $user = auth()->user();
## $user->roles()->attach(request('role'));
## return redirect()->route('vote');