<?php

namespace SheaXiang\LaravelVueAdmin\Requests;

class StoreAdminUser extends ApiRequest
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
		$id = $this->route('admin_user');
		$rules =  [
			'password' => 'nullable|between:6,20',
			'name'        => 'required|between:2,20|allow_letter|unique:admin_users,name,'.$id
		];

		if (!$id) {
			$rules['password'] = 'required';
		}
		return $rules;
    }

	public function messages()
	{
		return [
			'name.required'      => '管理员名称必填',
			'name.between' => '管理员名称必须在2到20个字符之间',
			'name.unique' => '管理员名称不可重复',
			'password.required'      => '密码必填',
			'name.allow_letter'      => '管理员名称必须为英文',
			'password.between' => '密码长度必须在2到20个字符之间',
		];
	}
}
