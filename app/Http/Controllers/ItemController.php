<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    public function index()
    {
        $data = Item::get();
        return view('item', ['data' => $data]);
    }

    public function addName(Request $request)
    {
        $user = array('name' => $request['name'], 'column' =>  $request['column']);
        $data = Item::create($user);
        return response()->json(['success' => '1', 'message' => 'created!.']);
    }

    public function shift(Request $request)
    {
        $user = array('name' => $request['name']);
        $data = Item::where('name', $request['name'])->update(['column' => $request['column']]);
        return response()->json(['success' => '1', 'message' => 'shifted!.']);
    }
}
