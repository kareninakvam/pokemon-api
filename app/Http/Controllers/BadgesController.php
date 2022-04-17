<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Badge;

class BadgesController extends Controller
{
    public function create(){
        return view ('badges.create');
    }

    public function store(Request $request){

        $badge = new Badge;
        $badge->name = $request->name;
        $badge->info_battle = $request->info_battle;

        $user = auth()->user();
        $badge->user_id = $user->id;

        $badge-> save();

        return redirect ('/');
    }

    public function destroy($id){
        $badge = badge::findOrFail($id)->delete();
        return redirect ('/');
    }

    public function edit($id){
        $badge = badge::findOrFail($id); 
        return view('badges.editBadge', ['badge' => $badge]);
    }

    public function update(Request $request){
        Badge::findOrFail($request->id)->update($request->all());
        return redirect ('/');
    }
}
