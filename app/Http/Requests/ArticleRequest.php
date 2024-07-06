<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Assuming all users can create an article for demonstration purposes
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'url' => 'required|max:255|url',
            'comment' => 'max:10000',
        ];
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'url', 'comment'];

    /**
     * Custom error messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'The :attribute field is required.',
            'title.max' => 'The :attribute may not be greater than :max characters.',
            'url.required' => 'The :attribute field is required.',
            'url.max' => 'The :attribute may not be greater than :max characters.',
            'url.url' => 'The :attribute must be a valid URL.',
            'comment.max' => 'The :attribute may not be greater than :max characters.',
        ];
    }

    /**
     * Attribute names.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'title' => 'Title',
            'url' => 'URL',
            'comment' => 'Comment',
        ];
    }
}
