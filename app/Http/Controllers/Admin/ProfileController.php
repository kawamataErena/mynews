<?php

namespace app\Http\Controllers\admin;

use app\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Profile;

use App\Models\ProfileHistory;
use Carbon\Carbon;

class ProfileController extends Controller
{
    //以下を追記
    public function add()
    {
        return view('admin.profile.create');
    }

    public function create(Request $request)
    {
        
    $this->validate($request, Profile::$rules);

    $profile = new Profile;
    $form = $request->all();

    $profile ->fill($form);
    $profile ->save();

        return redirect('admin/profile/create');
    }

    public function edit(Request $request)
    {
        //dd('ここが動いた');
        // profile Modelからデータを取得する
        $profile = Profile::find($request->id);
        if (empty($profile)) {
            abort(404);
        }
        //dd($profile);
    
        return view('admin.profile.edit', ['profile_form' => $profile]);
    }

    public function update(Request $request)
    {
         // Validationをかける
         $this->validate($request, Profile::$rules);
         // Profile Modelからデータを取得する
        $profile = Profile::find($request->id);
        // 送信されてきたフォームデータを格納する
        $profile_form = $request->all();

        // 該当するデータを上書きして保存する
        $profile->fill($profile_form)->save();

        $history = new ProfileHistory();
        $history->profile_id = $profile->id;
        $history->edited_at = Carbon::now();
        $history->save();

        //return back();
        return redirect('admin/profile/edit?id=' . intval($request->id));
    }

   

}
