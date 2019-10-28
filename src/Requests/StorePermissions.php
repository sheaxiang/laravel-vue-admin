<?php

namespace SheaXiang\LaravelVueAdmin\Requests;

class StorePermissions extends ApiRequest
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
		$id = $this->route('permission');
        return [
			'name'        => 'required|allow_letter|unique:permissions,name,'.$id
        ];
    }

	public function messages()
	{
		return [
			'name.required'      => '权限名称必填',
			'name.allow_letter'      => '权限名称必须为英文',
			'name.unique' => '权限名称不可重复',
		];
	}
}
