<?php

namespace App\Livewire\Uilogin;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePassword extends Component
{
    #[Validate(['required'])]
    public $userId;

    #[Validate(['required'])]
    public $currentPassword;

    #[Validate(['required','min:4'])]
    public $password;

    #[Validate(['same:password'])]
    #[Validate('required_with:password')]
    public $passwordConfirmation;

    public function resetPassword() {

             
        $user = User::where('user_name', $this->userId)->first();
        
        $this->validate();
      
        if (Auth::attempt(['user_name' => $this->userId, 'password' => $this->password])) {
            
            $this->addError('password', __('uilogin.same old password'));
       
            return;

        } 

            
        if (!Auth::attempt(['user_name' => $this->userId, 'password' => $this->currentPassword])) {
            
            $this->addError('currentPassword', trans('auth.password'));
       
            return;

        } 

    
        $user->update([
            'password'=>Hash::make($this->password),
            'need_to_change'=>0,
        ]);

        toastr()->success(__('uilogin.success updated'));
       
        return redirect()->intended(route('home'));

       

    }
    

 
   #[Layout('components.layouts.uilogin-app')]
    public function render()
    {
        $pageTitle=__('mytrans.renewPassword');
        $title=__('mytrans.renewPassword');
        return view('livewire.ui_auth.change-password')->layoutData(['pageTitle'=>$pageTitle,'title'=>$title]);
    }
}
