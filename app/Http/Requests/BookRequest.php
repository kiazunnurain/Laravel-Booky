<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Books;

class BookRequest extends FormRequest
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
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        $rule_books_unique = Rule::unique('books', 'books');
        if ($this->method() !== 'POST'){
            $rule_books_unique->ignore($this->route()->parameter('id'));
        }
        // logic = if => post, maka ignore. but if post=> unique nya berlaku.
        // !== : bukan.

        return [  
            'books' => ['required', $rule_books_unique],
            'author' => ['required']
        ];
    }

    public function messages(){
        return[
            'required' => 'isian :attribute harus diisi',
            'author.required' => 'nama author harus diisi'
        ];
    }
}
