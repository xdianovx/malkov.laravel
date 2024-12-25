<?php

namespace App\Http\Controllers\Admin;

use App\Models\MainInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends BaseController
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
            'og_site_title' => 'nullable',
            'og_site_image' => 'nullable|image|max:200000|mimes:jpeg,png,jpg,gif,svg',
            'phone' => 'nullable',
            'address' => 'nullable',
            'working_days' => 'nullable',
            'telegram' => 'nullable',
            'vkontakte' => 'nullable',
            'whatsapp' => 'nullable',
            'text_footer' => 'nullable',
        ], [
            'og_site_image.image' => 'OG Изображение должно быть изображением',
            'og_site_image.max' => 'OG Изображение должно быть не более 200000 Кб',
            'og_site_image.mimes' => 'OG Изображение должно быть с расширением jpeg, png, jpg, gif, svg',
        ]);
        $data = $request->all();
        if ($request->hasFile('og_site_image')) :
            $data['og_site_image'] = $this->upload_service->imageConvertAndStore($request, $data['og_site_image'], 'og_site_image');
        endif;
        $main_info = MainInfo::first();
        dd($data);
        $main_info->update($data);
        return redirect()->route('admin.index')->with('status', 'item-updated');
    }
}
