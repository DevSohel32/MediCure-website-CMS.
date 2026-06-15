<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SharedDynamicFormRequest extends FormRequest
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
    $tableName = $this->input('table_name', 'departments');
    $id = $this->route('id') ?? $this->input('id');
    $photoRule = $this->isMethod('post') ? 'required' : 'sometimes';

    return [
        'title'             => 'sometimes|required',
        'slug'              => "sometimes|required|regex:/^[a-z0-9-]+$/|unique:{$tableName},slug,{$id}",
        'short_description' => 'sometimes|required',
        'description'       => 'sometimes|required',
        'department_date'   => 'sometimes|required|date',
        'project_date'      => 'sometimes|required|date',
        'client'            => 'sometimes|required',
        'photo'             => "{$photoRule}|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        'post_category_id'  => 'sometimes|required|integer',
        'location'              => 'sometimes|nullable',
        'website'               => 'sometimes|nullable',
        'tags'               => 'sometimes|nullable',
        'phone'                 => 'sometimes|nullable',
        'quote_person'          => 'sometimes|nullable',
        'quote_text'            => 'sometimes|nullable',
        'seo_title'             => 'sometimes|nullable',
        'seo_meta_description'  => 'sometimes|nullable',
    ];
}
}
