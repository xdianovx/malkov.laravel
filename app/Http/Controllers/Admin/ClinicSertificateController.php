<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ClinicSertificate\StoreRequest;
use App\Http\Requests\ClinicSertificate\UpdateRequest;
use App\Models\ClinicSertificate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ClinicSertificateController extends BaseController
{
    public function index()
    {
        $user = Auth::user();
        $clinic_certificates = ClinicSertificate::orderBy('id', 'DESC')->paginate(10);
        return view('admin.clinic_certificates.index', compact('clinic_certificates', 'user'));
    }
    public function show($document_id)
    {
        $user = Auth::user();
        $item = ClinicSertificate::whereId($document_id)->firstOrFail();
        return view('admin.clinic_certificates.show', compact('user', 'item'));
    }
    public function create()
    {
        $user = Auth::user();
        return view('admin.clinic_certificates.create', compact('user'));
    }
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) :
            $data['image'] = $this->upload_service->imageConvertAndStore($request, $data['image'], 'documents');
        endif;
        ClinicSertificate::create($data);

        return redirect()->route('admin.clinic_certificates.index')->with('status', 'item-created');
    }
    public function edit($document_id)
    {
        $user = Auth::user();
        $item = ClinicSertificate::whereId($document_id)->firstOrFail();
        return view('admin.clinic_certificates.edit', compact('user', 'item'));
    }
    public function update(UpdateRequest $request, $document_id)
    {
        $document = ClinicSertificate::whereId($document_id)->firstOrFail();
        $data = $request->validated();
        if ($request->hasFile('image')) :
            $data['image'] = $this->upload_service->imageConvertAndStore($request, $data['image'], 'documents');
        endif;
        $document->update($data);
        return redirect()->route('admin.clinic_certificates.index')->with('status', 'item-updated');
    }

    public function destroy( $document_id )
    {
        $document = ClinicSertificate::whereId($document_id)->firstOrFail();
        $document->delete();
        return redirect()->route('admin.clinic_certificates.index')->with('status', 'item-deleted');
    }

    public function search(Request $request)
    {
        $user = Auth::user();
        if (request('search') == null) :
            $clinic_certificates = ClinicSertificate::orderBy('id', 'DESC')->paginate(10);
        else :
            $clinic_certificates = ClinicSertificate::filter()->paginate(10);
        endif;
        return view('admin.clinic_certificates.index', compact('clinic_certificates', 'user'));
    }
}
