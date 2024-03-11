<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.1
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'start_at' => 'required|date|after:now', // 現在時刻よりも後の日付
            'member_num' => 'required', //必須
            'time' => 'required|date|after:now', // 現在時刻よりも後の日付
            'day' => 'required|date|after:now', // 現在時刻よりも後の日付
        ];

    }

    public function messages()
    {
        return [
            'start_at.after' => '予約日時は現在時刻より後の日付である必要があります。',
            'member_num' => 'required' // 現在時刻よりも後の日付
        ];

    }
}

