<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;

class AdminController extends Controller
{
    public function addAnswer(Request $request)
    {
            $model = new Answer();
            $model->patasxan = $request->patasxan;
            $model->type = $request->type;
            $model->save();
            return redirect()->back();
//            $model->harc_id = $request->harc_id;
    }
}
