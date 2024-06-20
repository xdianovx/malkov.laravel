<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Document\StoreRequest;
use App\Http\Requests\Document\UpdateRequest;
use App\Models\Document;
use App\Models\Specialist;
use Illuminate\Support\Facades\Auth;

class DocumentController extends BaseController
{
    public function show($specialist_slug, $document_id)
    {
        $user = Auth::user();
        $specialist = Specialist::whereSlug($specialist_slug)->firstOrFail();
        $item = Document::whereId($document_id)->firstOrFail();
        return view('admin.specialists.documents.show', compact('user', 'item', 'specialist'));
    }
    public function create($specialist_slug)
    {
        $user = Auth::user();
        $specialist = Specialist::whereSlug($specialist_slug)->firstOrFail();
        return view('admin.specialists.documents.create', compact('user', 'specialist'));
    }
    public function store(StoreRequest $request, $specialist_slug)
    {
        $specialist = Specialist::whereSlug($specialist_slug)->firstOrFail();
        $data = $request->validated();
        if ($request->hasFile('image')) :
            $data['image'] = $this->upload_service->imageConvertAndStore($request, $data['image'], $specialist_slug . '/' . 'documents');
        endif;
        $specialist->documents()->create($data);

        return redirect()->route('admin.specialists.show', $specialist_slug)->with('status', 'document-created');
    }
    public function edit($specialist_slug, $document_id)
    {
        $user = Auth::user();
        $specialist = Specialist::whereSlug($specialist_slug)->firstOrFail();
        $item = Document::whereId($document_id)->firstOrFail();
        return view('admin.specialists.documents.edit', compact('user', 'item', 'specialist'));
    }
    public function update(UpdateRequest $request, $specialist_slug, $document_id)
    {
        $document = Document::whereId($document_id)->firstOrFail();
        $data = $request->validated();
        if ($request->hasFile('image')) :
            $data['image'] = $this->upload_service->imageConvertAndStore($request, $data['image'],  $specialist_slug . '/' . 'documents');
        endif;
        $document->update($data);
        return redirect()->route('admin.specialists.show', $specialist_slug)->with('status', 'document-updated');
    }

    public function destroy( $specialist_slug, $document_id )
    {

        $document = Document::whereId($document_id)->firstOrFail();
        $document->delete();
        return redirect()->route('admin.specialists.show', $specialist_slug)->with('status', 'document-deleted');
    }
}
