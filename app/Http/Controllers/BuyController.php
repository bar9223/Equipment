<?php

namespace App\Http\Controllers;

use App\Box;
use App\Reward;
use App\Rune;
use App\UserBox;
use App\UserReward;
use App\UserRune;
use App\Buy;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $boxes = Box::all()->toArray();
        $runes = Rune::all()->toArray();
        $rewards = Reward::all()->toArray();
        $equipment = [
            'boxes' => $boxes,
            'runes' => $runes,
            'rewards' => $rewards
        ];

        return view('buy.create', compact('equipment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'box'    =>  'nullable',
            'rune'     =>  'nullable',
            'reward'     =>  'nullable'
        ]);

        if ($request->get('box')) {
            $userBox = new UserBox([
                'user_id'    =>  1,
                'box_id'     =>  $request->get('box')
            ]);
            $userBox->save();
        }
        if ($request->get('rune')) {
            $userRune = new UserRune([
                'user_id'    =>  1,
                'rune_id'     =>  $request->get('rune')
            ]);
            $userRune->save();
        }
        if ($request->get('reward')) {
            $userReward = new UserReward([
                'user_id'    =>  1,
                'reward_id'  =>  $request->get('reward')
            ]);
            $userReward->save();
        }

        return redirect()->route('buy.create')->with('success', 'Success ! This new element is now Your property');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
