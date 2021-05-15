<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(Request $reqest)
    {
        $items = Person::all();
        return view('person.index', ['items'=> $items]);
    }

    public function find(Request $reqest)
    {
        return view('person.find', ['input'=> '']);
    }

    public function search(Request $reqest)
    {
        $min = $reqest->input * 1;
        $max = $min + 10;
        $item = Person::ageGreaterThan($min)->
            ageLessThan($max)->first();
        $param = ['input' => $reqest->input, 'item'=> $item];
        return view('person.find', $param);
    }

}
