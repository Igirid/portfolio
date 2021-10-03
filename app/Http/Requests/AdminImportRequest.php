<?php

        namespace App\Http\Requests;
        
        use App\Traits\PasswordValidationRules;
        use Illuminate\Validation\Rule;
        use Illuminate\Foundation\Http\FormRequest;
        
        class AdminImportRequest extends FormRequest
        {
            use PasswordValidationRules;
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
                return [
                    'first_name' => ['required', 'string', 'max:255'],
                    'last_name' => ['required', 'string', 'max:255'],
                   // 'show_uuid' => ['required', 'uuid', Rule::exists('shows', 'uuid')],
                    'email' => ['required', 'string', 'email', 'max:255', Rule::unique('admins')],
                    'phone' => ['required', 'string', 'max:255', Rule::unique('admins')],
                    'password' => $this->passwordRules(),
                ];
            }
        }
        