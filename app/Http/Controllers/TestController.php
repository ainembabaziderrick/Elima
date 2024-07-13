<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestModel;

class TestController extends Controller
{
    public function Test()
    {
        return view('climbers.test.list');
    }

    public function Addtest()
    {
        return view('climbers.test.add');
    }

    public function Storetest(Request $request)
    {

        $save = new TestModel;
        $save->name = $request->name;
        $save->age = $request->age;
        $save->contact = $request->contact;
        $save->inspiration = $request->inspiration;
        $save->memories = $request->memories;
        $save->skills = $request->skills;
        $save->preparations = $request->preparations;
        $save->experience = $request->experience;
        $save->mistakes = $request->mistakes;
        $save->handle = $request->handle;
        $save->challenge = $request->challenge;
        $save->environmental = $request->environmental;
        $save->changes = $request->changes;
        $save->save();



        return redirect('climbers/dashboard')->with('success', 'Test successfully completed');

    }

    public function AdminTest()
    {
        $data['getRecord'] = TestModel::get();
        return view('admin.test.list', $data);
    }

    public function Edittests($id)
    {
        $tests = TestModel::find($id);

        return view('admin.test.edit', compact('tests'));

    }

    public function Updatetests(Request $request, $id)
    {

        $update = TestModel::find($id)->update([
            'name' => $request->name,
            'age' => $request->age,
            'contact' => $request->contact,
            'inspiration' => $request->inspiration,
            'memories' => $request->memories,
            'skills' => $request->skills,
            'preparations' => $request->preparations,
            'experience' => $request->experience,
            'mistakes' => $request->mistakes,
            'handle' => $request->handle,
            'challenge' => $request->challenge,
            'environmental' => $request->environmental,
            'changes' => $request->changes,

        ]);
        return redirect('admin/tests')->with('success', 'Test Passed succcessfully');

    }


    public function Deletetests($id)
    {
        $delete = TestModel::find($id)->Delete();
        return Redirect()->back()->with('success', 'Test Deleted succcessfully');
    }

    public function Failtests($id)
    {
        $delete = TestModel::find($id)->Delete();
        return redirect('admin/tests')->with('success', 'Test Failed');
    }


}
