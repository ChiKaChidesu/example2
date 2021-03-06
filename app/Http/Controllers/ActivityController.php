<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $result = Activity::all();

        $data = [
             'items' => $result
        ];
        return view('activity.index', $data);
    }


    public function delete($id)
    {
        $activity =Activity::find($id);
        $activity->delete();

        return Redirect('/กิจกรรม');
        $activity->save();
    }
}
