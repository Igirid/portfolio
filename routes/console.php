<?php

use Illuminate\Support\Str;
use Illuminate\Foundation\Inspiring;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

//use Illuminate\Filesystem\Filesystem;
//use Illuminate\Support\Str;
//php artisan make:requests {Name}
//Make Sure [App\Http\Requests] and [App\Traits] exists
//Copy Password.php from C:\Users\ADMIN\Dont Delete to App\Rules

Artisan::command('generate:requests{name}', function (Filesystem $filesystem, $name) {
    $name = Str::ucfirst($name);
    $this->info("Generating PasswordValidationRules");

    $filesystem->replace(app_path('Traits/PasswordValidationRules.php'), "<?php

    namespace App\Traits;
    
    use App\Rules\Password;
    
    trait PasswordValidationRules
    {
        /**
         * Get the validation rules used to validate passwords.
         *
         * @return array
         */
        protected function passwordRules()
        {
            return ['required', 'string', new Password, 'confirmed'];
        }
    }");

    $this->info("Generating requests: {$name}");
    $requests = collect([
        "{$name}CreateRequest",
        "{$name}UpdateRequest",
        "{$name}DeleteRequest",
        "{$name}ImportRequest",
        "{$name}ExportRequest"
    ]);
    $requests->map(function ($item, $key) use ($filesystem) {
        $filesystem->replace(app_path("Http/Requests/{$item}.php"), "<?php

        namespace App\Http\Requests;
        
        use App\Traits\PasswordValidationRules;
        use Illuminate\Validation\Rule;
        use Illuminate\Foundation\Http\FormRequest;
        
        class $item extends FormRequest
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
                    'password' => \$this->passwordRules(),
                ];
            }
        }
        ");
    });
})->purpose('Quickly generate Form Requests value');
