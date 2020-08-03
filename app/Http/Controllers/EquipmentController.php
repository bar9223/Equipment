<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EquipmentController extends Controller
{
    public function getEquipment($id)
    {
        $equipment = [];

        $boxes = DB::table('boxes')
            ->join('user_boxes','user_boxes.box_id','=','boxes.id')
            ->join('users','users.id','=','user_boxes.user_id')
            ->select('boxes.name as box_name','boxes.picture as box_picture', 'boxes.price as box_price')
            ->where('users.id', $id)
            ->get();
        $equipment['boxes'] = $boxes;

        $runes = DB::table('runes')
            ->join('user_runes','user_runes.rune_id','=','runes.id')
            ->join('users','users.id','=','user_runes.user_id')
            ->select('runes.name as rune_name', 'runes.picture as rune_picture', 'runes.bonus as rune_bonus')
            ->where('users.id', $id)
            ->get();
        $equipment['runes'] = $runes;

        $rewards = DB::table('rewards')
            ->join('user_rewards','user_rewards.reward_id','=','rewards.id')
            ->join('users','users.id','=','user_rewards.user_id')
            ->select('rewards.name as reward_name', 'rewards.picture as reward_picture', 'rewards.code as reward_code', 'rewards.price as reward_price', 'rewards.status as reward_status')
            ->where('users.id', $id)
            ->get();
        $equipment['rewards'] = $rewards;

        return view('equipment.index', compact('equipment'));
    }
}
