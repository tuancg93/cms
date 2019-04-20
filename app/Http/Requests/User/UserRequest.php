<?php

namespace App\Http\Requests\User;

use App\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Factory as ValidationFactory;

class UserRequest extends FormRequest
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

    public function __construct(ValidationFactory $validationFactory)
    {
        $validationFactory->extend(
            'unique_deleted',
            function ($attribute, $value, $parameters) {
                if (!isset($this->id)) {
                    $query = User::where($attribute, '=', $value)->whereNull('deleted_at')->first();
                    if (!isset($query->id)) {
                        return TRUE;
                    } else {
                        return FALSE;
                    }
                } else {
                    $attribute_old = $attribute . '_old';
                    if ($value != $this->$attribute_old) {
                        $query = User::where($attribute, '=', $value)->whereNull('deleted_at')->first();
                        if (!isset($query->id)) {
                            return TRUE;
                        } else {
                            return FALSE;
                        }
                    }
                }
                return TRUE;
            }
        );
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|min:3|max:50|unique_deleted',
            'fullname' => 'required|min:6|max:50',
            'email' => 'required|email|unique_deleted',
            'password' => 'min:8',
            'phone' => 'required|unique_deleted',
        ];
    }

    public function messages()
    {

        return [
            'username.required' => 'Tên truy cập không được để trống ! ',
            'username.min' => 'Tên truy cập tối thiểu :min ký tự ! ',
            'username.max' => 'Tên truy cập tối đa :max ký tự ! ',
            'username.unique_deleted' => 'Tên truy cập đã được sử dụng ! ',

            'fullname.required' => 'Họ tên không được để trống ! ',
            'fullname.min' => 'Họ tên tối thiểu :min ký tự ! ',
            'fullname.max' => 'Họ tên tối đa :max ký tự ! ',

            'password.min' => 'Mật khẩu tối thiểu :min ký tự ! ',

            'email.required' => 'Email không được để trống ! ',
            'email.email' => 'Email không đúng định dạng ! ',
            'email.unique_deleted' => 'Email đã được sử dụng ! ',

            'phone.required' => 'Số điện thoại không được phép rỗng !',
            'phone.unique_deleted' => 'Số điện thoại đã được sử dụng !'
        ];
    }
}
