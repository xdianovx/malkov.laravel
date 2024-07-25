<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Specialization\StoreRequest;
use App\Http\Requests\Specialization\UpdateRequest;
use App\Models\Specialization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SpecializationController extends BaseController
{
    public function index()
    {
        $user = Auth::user();
        $specializations = Specialization::orderBy('id', 'DESC')->paginate(10);
        return view('admin.specializations.index', compact('specializations', 'user'));
    }

    public function show($specialization_slug)
    {
        $user = Auth::user();
        $item = Specialization::whereSlug($specialization_slug)->firstOrFail();
        return view('admin.specializations.show', compact('item', 'user'));
    }

    public function create()
    {
        $user = Auth::user();
        return view('admin.specializations.create', compact('user'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);
        $specialization = Specialization::firstOrCreate($data);

        return redirect()->route('admin.specializations.index')->with('status', 'item-created');
    }
    public function edit($specialization_slug)
    {
        $user = Auth::user();
        $item = Specialization::whereSlug($specialization_slug)->firstOrFail();
        return view('admin.specializations.edit', compact('user', 'item'));
    }

    public function update(UpdateRequest $request, $specialization_slug)
    {
        $specialization = Specialization::whereSlug($specialization_slug)->firstOrFail();
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);
        $specialization->update($data);

        return redirect()->route('admin.specializations.index')->with('status', 'item-updated');
    }

    public function destroy($specialization_slug)
    {
        $specialization = Specialization::whereSlug($specialization_slug)->firstOrFail();
        $specialization->delete();
        return redirect()->route('admin.specializations.index')->with('status', 'item-deleted');
    }

    public function search(Request $request)
    {
        $user = Auth::user();
        if (request('search') == null) :
            $specializations = Specialization::orderBy('id', 'DESC')->paginate(10);
        else :
            $specializations = Specialization::filter()->paginate(10);
        endif;
        return view('admin.specializations.index', compact('specializations', 'user'));
    }
}
