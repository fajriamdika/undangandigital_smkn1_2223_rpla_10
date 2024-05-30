<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PesanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'nama_pemesan' => 'required',
            'nama_pengantin_pria' => 'required',
            'nama_pengantin_wanita' => 'required',
            'pria_anak_dari' => 'required',
            'wanita_anak_dari' => 'required',
            'nomor_rekening' => 'required',
            'tanggal_pernikahan' => 'required',
            'alamat_resepsi' => 'required',
        ];
    }
}
