<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class PutRequest extends FormRequest
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

    static public function myRules()
    {
        return [
            'title' => 'required|min:5|max:500',
            'content'=> 'required|min:7',
            'category_id'=> 'required|integer',
            'description'=> 'required|min:7',
            'posted'=> 'required'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return $this->myRules();
    }
}
