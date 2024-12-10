<div>


    <meta name="csrf-token" content="{{ csrf_token() }}">


    <div class="d-flex mt-5" style="height: 600px; ">

        <div class="container  m-auto px-5  ">


            <div>

                <div class=" fw-bolder h4 text-dark d-flex justify-content-center align-items-center">
                    <div>


                        <div class="text-center pt-2">
                            <strong>{{__('uilogin.login_system')}}</strong>
                        </div>

                    </div>



                </div>
            </div>


            <div class="row justify-content-center mt-4">
                <div class="col-md-6">
                    <div class="card ">

                        <div class="card-header d-flex justify-content-between">
                            <span> {{ __('uilogin.login_system') }} </span>
                            <a class="text-decoration-none" href="#">{{ __('uilogin.about_system') }}</a>
                        </div>


                        @include('layouts._alert-session')
                        <div class="card-body">

                            <form wire:submit="authenticate">


                                <x-uilogin-input wire:model="user_name" name="user_name" label="yes"
                                    divlclass="col-lg-12" dir="ltr" required autofocus> </x-uilogin-input>


                                <x-uilogin-input wire:model="password" type="password" name="password" label="yes"
                                    divlclass="col-lg-12" dir="ltr" required> </x-uilogin-input>


                                <x-uilogin-checkbox wire:model='remember' name="remember"
                                    label="yes"></x-uilogin-checkbox>


                                <x-uilogin-button :name="__('uilogin.Login')" divlclass="d-grid gap-2"
                                    class="bg-primary text-white"></x-uilogin-button>



                            </form>


                            <div class="d-md-flex justify-content-between">
                                <div class="mb-4" id="change_id">
                                    <a href="{{route('uilogin.forgetpassword')}}" id="btn1"
                                        class="text-decoration-none ">{{ __('uilogin.Forgot Your Password') }}</a>
                                </div>

                                <a href="{{ route('uilogin.register') }}" wire:navigate
                                    class="text-decoration-none">{{ __('uilogin.register_new_account') }}</a>

                            </div>
                            <div class="my-4">

                                <a href="{{route('support.create')}}" class="text-decoration-none">{{ __('uilogin.get-help') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>


</div>
