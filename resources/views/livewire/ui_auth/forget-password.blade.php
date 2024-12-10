<div class="d-flex mt-4" style="height: 600px;">
    <div class="container m-auto">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">{{ __('uilogin.Forgot Your Password') }}</div>

                    <div class="card-body">

                        <form wire:submit=''>

                            <x-uilogin-input wire:model.live='user_name' name="user_name" label="yes" dir="ltr"
                                divlclass='col-lg-12' req></x-uilogin-input>



                            <div>
                                @if ($this->user)
                                    <div class="w-100 text-center fw-bold">
                                        <span>{{ __('uilogin.mr/s') }} :
                                        </span><span>{{ ' ' . $this->user->name }}</span>
                                    </div>


                                    <x-uilogin-radio label wire:model='resetType' name="resetType" value1="questions"
                                        value2="email" value_title1="questions" value_title2="email" divWidth='12'
                                        wire:change='act'></x-uilogin-radio>

                                    @if ($this->resetType == 'email')
                                        <span>{{ __('uilogin.send to email') }} : </span>
                                        <div class="mb-3"> <span class=" fw-bold ">
                                                {{ ' ' . $this->encryptEmailName }}</span> </div>


                                        <x-uilogin-button :name="__('uilogin.send')" class="bg-primary text-white"
                                            divlclass="d-grid gap-2"></x-uilogin-button>
                                    @elseif ($this->resetType == 'questions')
                                        @if (!$errors->has('noQuestions'))
                                            @php
                                                $question = 'question_' . app()->getLocale();

                                            @endphp

                                            <p>{{ $this->question1->questions->$question ?? '' }}</p>

                                            <x-uilogin-input wire:model='answer1' name="answer1" label="yes"
                                                divlclass='col-lg-12' req></x-uilogin-input>

                                            <p>{{ $this->question2->questions->$question ?? '' }}</p>

                                            <x-uilogin-input wire:model='answer2' name="answer2" label="yes"
                                                divlclass='col-lg-12' req></x-uilogin-input>

                                            <p>{{ $this->question3->questions->$question ?? '' }}</p>

                                            <x-uilogin-input wire:model='answer3' name="answer3" label="yes"
                                                divlclass='col-lg-12' req></x-uilogin-input>


                                            <x-uilogin-button :name="__('uilogin.checkAnswers')" wire:click.prevent='checkAnswers'
                                                class="bg-primary text-white"
                                                divlclass="d-grid gap-2"></x-uilogin-button>
                                        @else
                                            <div class="w-100 bg-danger text-white text-center">
                                                <p>{{ __('uilogin.noQuestions') }}</p>
                                            </div>
                                        @endif

                                        @if ($errors->has('wrongAnswer'))
                                            <div class="w-100 bg-danger text-white text-center">
                                                <p>{{ __('uilogin.wrongAnswer') }}</p>
                                            </div>
                                        @endif

                                        @if ($errors->has('FailToResetPassword'))
                                            <div class="w-100 bg-danger text-white text-center">
                                                <p>{{ __('uilogin.FailToResetPassword') }}</p>
                                            </div>
                                        @endif

                                        @if ($this->checkResult == 1)
                                            <x-uilogin-input wire:model.live='password' type="password" name="password"
                                                label="yes" autocomplete="new-password" divlclass='col-lg-12'
                                                req></x-uilogin-input>

                                            <x-uilogin-input wire:model.live='passwordConfirmation'
                                                name="passwordConfirmation" id="password_confirmation" type="password"
                                                label="yes" autocomplete="new-password" divlclass='col-lg-12'
                                                req></x-uilogin-input>


                                            <x-uilogin-button :name="__('uilogin.Change_Password')" class="bg-primary text-white"
                                                divlclass="d-grid gap-2"
                                                wire:click.prevent='changePassword'></x-uilogin-button>
                                        @endif
                                    @endif

                                @endif

                            </div>






                            <x-uilogin-cancel-back :route="route('uilogin.login')" wire:navigate
                                label="cancel_back"></x-uilogin-cancel-back>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
