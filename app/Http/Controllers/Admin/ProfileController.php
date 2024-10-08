<?php

namespace app\Http\Controllers\admin;

use app\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\profile;

class ProfileController extends Controller
{
    //以下を追記
    public function add()
    {
        return view('admin.profile.create');
    }

    public function create(Request $request)
    {
        
    $this->validate($request, profile::$rules);

    $profile = new profile;
    $form = $request->all();

    $profile ->fill($form);
    $profile ->save();

        return redirect('admin/profile/create');
    }

    public function edit()
    {
        return view('admin.profile.edit');
    }

    public function update()
    {
        return redirect('admin/profile/edit');
    }

   

}
