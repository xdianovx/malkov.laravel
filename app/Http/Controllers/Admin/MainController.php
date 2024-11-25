<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MainInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $main_info = MainInfo::first();
        return view('admin.admin',compact('user','main_info'));
    }


    public function edit()
    {
        $main_info = MainInfo::first();
        $user = Auth::user();
        return view('admin.main_info_edit', compact('user', 'main_info'));
    }


    public function update(Request $request)
    {
        $request->validate([
            'phone' => 'nullable',
            'address' => 'nullable',
            'working_days' => 'nullable',
            'telegram' => 'nullable',
            'vkontakte' => 'nullable',
            'whatsapp' => 'nullable',
            'text_footer' => 'nullable',
        ]);
        $data = $request->all();
        $main_info = MainInfo::first();
        $main_info->update($data);
        return redirect()->route('admin.index')->with('status', 'item-updated');
    }
}
