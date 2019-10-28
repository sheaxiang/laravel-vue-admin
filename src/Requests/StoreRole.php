<?php

namespace SheaXiang\LaravelVueAdmin\Requests;

class StoreRole extends ApiRequest
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
		$id = $this->route('role');
        return [
			'menus' => 'array|nullable',
			'name'        => 'required|allow_letter|between:2,20|unique:roles,name,'.$id
        ];
    }

	public function messages()
	{
		return [
			'menus.array' => '权限为数组',
			'name.required'      => '角色名称必填',
			'name.between' => '角色名称必须在2到20个字符之间',
			'name.unique' => '角色名称不可重复',
			'name.allow_letter'      => '角色名称必须为英文',
		];
	}
}
