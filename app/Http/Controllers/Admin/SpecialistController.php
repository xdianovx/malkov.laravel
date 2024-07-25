<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Specialist\StoreRequest;
use App\Http\Requests\Specialist\UpdateRequest;
use App\Models\Document;
use App\Models\Service;
use App\Models\Specialist;
use App\Models\Specialization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SpecialistController extends BaseController
{
    public function index()
    {
        $user = Auth::user();
        $specialists = Specialist::orderBy('id', 'DESC')->paginate(10);
        return view('admin.specialists.index', compact('specialists', 'user'));
    }

    public function show($specialist_slug)
    {
        $user = Auth::user();
        $item = Specialist::whereSlug($specialist_slug)->firstOrFail();
        $documents = Document::where('specialist_id', $item->id)->paginate(10);
        return view('admin.specialists.show', compact('item', 'user', 'documents'));
    }

    public function create()
    {
        $user = Auth::user();
        $specializations = Specialization::all();
        $services = Service::where('parent_id', null)->get();
        return view('admin.specialists.create', compact('user','specializations','services'));
    }
    public function store(StoreRequest $request)
    {

        $data = $request->validated();
        $split_data = $this->format_data_service->cutArraysFromRequest(
            $data,[
                'specializations',
                'services'
            ]);

        $data = $split_data['data'];
        $data['slug'] = Str::slug($data['title']);
        if ($request->hasFile('image')) :
            $data['image'] = $this->upload_service->imageConvertAndStore($request, $data['image'], $data['slug']);
        endif;
        if ($request->hasFile('image_mob')) :
            $data['image_mob'] = $this->upload_service->imageConvertAndStore($request, $data['image_mob'], $data['slug']);
        endif;

        $item = Specialist::firstOrCreate($data);
        $this->format_data_service->writeDataToTable($item, $split_data['arreyIds']);
        return redirect()->route('admin.specialists.index')->with('status', 'item-created');
    }
    public function edit($specialist_slug)
    {
        $user = Auth::user();
        $item = Specialist::whereSlug($specialist_slug)->firstOrFail();
        $specializations = Specialization::all();
        $services = Service::where('parent_id', null)->get();
        return view('admin.specialists.edit', compact('user', 'item','specializations','services'));
    }
    public function update(UpdateRequest $request, $specialist_slug)
    {
        $specialist = Specialist::whereSlug($specialist_slug)->firstOrFail();
        $data = $request->validated();
        $split_data = $this->format_data_service->cutArraysFromRequest(
            $data,[
                'specializations',
                'services'
            ]);

        $data = $split_data['data'];
        $data['slug'] = Str::slug($data['title']);

        if ($request->hasFile('image')) :
            $data['image'] = $this->upload_service->imageConvertAndStore($request, $data['image'], $data['slug']);
        endif;
        if ($request->hasFile('image_mob')) :
            $data['image_mob'] = $this->upload_service->imageConvertAndStore($request, $data['image_mob'], $data['slug']);
        endif;

        $specialist->update($data);
        $this->format_data_service->writeDataToTable($specialist, $split_data['arreyIds']);

        return redirect()->route('admin.specialists.index')->with('status', 'item-updated');
    }

    public function destroy($specialist_slug)
    {

        $specialist = Specialist::whereSlug($specialist_slug)->firstOrFail();
        $specialist->delete();
        return redirect()->route('admin.specialists.index')->with('status', 'item-deleted');
    }

    public function search(Request $request)
    {
        $user = Auth::user();
        if (request('search') == null) :
            $specialists = Specialist::orderBy('id', 'DESC')->paginate(10);
        else :
            $specialists = Specialist::filter()->paginate(10);
        endif;
        return view('admin.specialists.index', compact('specialists', 'user'));
    }
}
