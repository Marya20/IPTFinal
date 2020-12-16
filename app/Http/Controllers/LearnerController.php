<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Learner;

class LearnerController extends Controller
{
    public function index() {
        $learners = Learner::get();
        return view('learners.index', compact('learners'));
    }
    public function edit($id){
        $learner = Learner::find($id);
        
        return view('learners.edit', ['learner'=>$learner]);
    }
    public function update(Request $request, $id) {
        $this->validate($request, [
            'user_id' => 'required|numeric',
            'level'   => 'required',
            'status'  => 'required'
        ]);
        $learner = Learner::join('users', 'users.id', '=', 'learners.user_id')
        ->select('users.lname', 'users.fname', 'learners.*')
        ->orderByRaw('lname', 'fname')->find($id);
        $learner->update($request->all());

        return redirect("/learners")->with('info', "Learner $learner->lname, $learner->fname has been updated.");
    }
    public function delete(Request $request) {
        $learnerId = $request['learner_id'];
        $learner = Learner::join('users', 'users.id', '=', 'learners.user_id')
        ->select('users.lname', 'users.fname', 'learners.*')
        ->orderByRaw('lname', 'fname')->find($learnerId);
        $name = $learner->lname . ", " . $learner->fname;
        $learner->delete();

        return redirect('/learners')->with('info', "Learner $name has been deleted.");
    }
}
