<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $rules = [
            'title' => 'required|max:250',
            'slug' => 'required|unique:posts',
            'excerpt' => 'required',
            'body' => 'required',
            'published_at' => 'date_format:Y-m-d H:i:s|nullable',
            'category_id' => 'required',
            'image' => 'mimes:jpg,jpeg,bmp,png',
        ];

        if($this->method() == 'PUT'){
            $rules['slug'] = 'required';
        } elseif ($this->method() == 'PATCH') {
            $rules['slug'] = 'required|unique:posts,slug,'.$this->route('posts');
        }

        return $rules;

    }
}
