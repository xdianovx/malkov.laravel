<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ClinicDocument\StoreRequest;
use App\Http\Requests\ClinicDocument\UpdateRequest;
use App\Models\ClinicDocument;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ClinicDocumentController extends BaseController
{
    public function index()
    {
        $user = Auth::user();
        $clinic_documents = ClinicDocument::orderBy('id', 'DESC')->paginate(10);
        return view('admin.clinic_documents.index', compact('clinic_documents', 'user'));
    }
    public function show($document_id)
    {
        $user = Auth::user();
        $item = ClinicDocument::whereId($document_id)->firstOrFail();
        return view('admin.clinic_documents.show', compact('user', 'item'));
    }
    public function create()
    {
        $user = Auth::user();
        return view('admin.clinic_documents.create', compact('user'));
    }
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) :
            $data['image'] = $this->upload_service->imageConvertAndStore($request, $data['image'], 'documents');
        endif;
        ClinicDocument::create($data);

        return redirect()->route('admin.clinic_documents.index')->with('status', 'item-created');
    }
    public function edit($document_id)
    {
        $user = Auth::user();
        $item = ClinicDocument::whereId($document_id)->firstOrFail();
        return view('admin.clinic_documents.edit', compact('user', 'item'));
    }
    public function update(UpdateRequest $request, $document_id)
    {
        $document = ClinicDocument::whereId($document_id)->firstOrFail();
        $data = $request->validated();
        if ($request->hasFile('image')) :
            $data['image'] = $this->upload_service->imageConvertAndStore($request, $data['image'], 'documents');
        endif;
        $document->update($data);
        return redirect()->route('admin.clinic_documents.index')->with('status', 'item-updated');
    }

    public function destroy( $document_id )
    {
        $document = ClinicDocument::whereId($document_id)->firstOrFail();
        $document->delete();
        return redirect()->route('admin.clinic_documents.index')->with('status', 'item-deleted');
    }

    public function search(Request $request)
    {
        $user = Auth::user();
        if (request('search') == null) :
            $clinic_documents = ClinicDocument::orderBy('id', 'DESC')->paginate(10);
        else :
            $clinic_documents = ClinicDocument::filter()->paginate(10);
        endif;
        return view('admin.clinic_documents.index', compact('clinic_documents', 'user'));
    }
}
