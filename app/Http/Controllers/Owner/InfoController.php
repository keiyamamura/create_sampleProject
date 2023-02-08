<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Services\CheckForm;
use App\Models\Owner;

class InfoController extends Controller
{
    public function show($id)
    {
        $owner = Owner::findOrFail($id);

        $age = CheckForm::age($owner);
        $prefecture = CheckForm::prefecture($owner);
        $gender = CheckForm::gender($owner);

        return view('owner.show', compact('owner', 'age', 'prefecture', 'gender'));
    }

    public function edit($id)
    {
        $owner = Owner::findOrFail($id);

        return view('owner.edit', compact('owner'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|string|max:2',
            'gender' => 'required|string|max:2',
            'email' => 'required|string|email|max:255|unique:users',
            'prefectures_id' => 'required|string|max:2',
            'municipalities' => 'required|string|max:255',
        ]);

        $owner = Owner::findOrFail($id);
        $owner->name = $request->name;
        $owner->age = $request->age;
        $owner->gender = $request->gender;
        $owner->email = $request->email;
        $owner->prefectures_id = $request->prefectures_id;
        $owner->municipalities = $request->municipalities;
        $owner->save();

        $age = CheckForm::age($request);
        $prefecture = CheckForm::prefecture($request);
        $gender = CheckForm::gender($request);

        return view('owner.show', compact('owner', 'age', 'prefecture', 'gender'));
    }
}
