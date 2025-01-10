<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Jobs\RequestModalMailSendJob;
use App\Jobs\RequestConsultationVacancyMailSendJob;
use App\Jobs\RequestCooperationMailSendJob;
use App\Jobs\RequestVacancyMailSendJob;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class RequestsController extends Controller
{


//   public function request_vacancy_section(Request $request)
//   {
//     $details = [
//       'vacancy' => Vacancy::where('id', $request->all()['vacancy_id'])->first()->title,
//       'name' => $request->all()['name'],
//       'phone' => $request->all()['phone'],
//     ];
//     try {
//       dispatch(new RequestVacancyMailSendJob($details));
//       return response()->json(['success' => true]);
//     } catch (\Exception $e) {
//       return response()->json(['success' => false]);
//     }
//   }
//   public function request_consultation_vacancy_section(Request $request)
//   {
//     $details = [
//       'name' => $request->all()['name'],
//       'email' => $request->all()['email'],
//     ];
//     try {
//       dispatch(new RequestConsultationVacancyMailSendJob($details));
//       return response()->json(['success' => true]);
//     } catch (\Exception $e) {
//       return response()->json(['success' => false]);
//     }
//   }
//   public function request_cooperation_section(Request $request)
//   {
//     $details = [
//       'company' => $request->all()['company'],
//       'user' => $request->all()['user'],
//       'phone' => $request->all()['phone'],
//       'email' => $request->all()['email'],
//     ];
//     try {
//       dispatch(new RequestCooperationMailSendJob($details));
//       return response()->json(['success' => true]);
//     } catch (\Exception $e) {
//       return response()->json(['success' => false]);
//     }
//   }
  public function request_modal_section(Request $request)
  {
    $validator = \Validator::make($request->all(), [
        'title' => ['required', 'max:70'],
        'phone'=> ['required', 'min:11'],
    ], [
        'title.required' => 'Поле "Имя" обязательно для заполнения',
        'title.max' => 'Поле "Имя" должно быть не более 70 символов',
        'phone.required' => 'Поле "Телефон" обязательно для заполнения',
        'phone.min' => 'Поле "Телефон" должно быть не менее 11 символов',
    ]);
    if ($validator->fails()) {
        return response()->json(['status' => 'error', 'message' => $validator->messages()]);
    }

    $details = [
      'title' => $request->all()['title'],
      'phone' => $request->all()['phone'],
    ];
    try {
      dispatch(new RequestModalMailSendJob($details));
      return response()->json(['status' => 'item-sent']);
    } catch (\Exception $e) {
      return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
    }
  }
}
