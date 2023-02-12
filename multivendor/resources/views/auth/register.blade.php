<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <p id="err" class="err"></p>

            <div class="step1" id="step1">

                <div>
                    <x-jet-label for="name" value="{{ __('Full Name') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" id="fname" type="text" name="name" :value="old('firstname')" required autofocus autocomplete="first name" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="name" value="{{ __('Surname') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" id="lname" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="last name" />
                </div>

            </div>


            <div class="step2" id="step2">

                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" id="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" id="pwd" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-jet-input id="password_confirmation" id="cpwd" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

            </div>


            <div class="step3" id="step3">

                <div class="mt-4">
                    <x-jet-label for="name" value="{{ __('Mobile phone Number') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" id="tel" type="text" name="tel" :value="old('tel')" required autofocus autocomplete="tel" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="name" value="{{ __('Gender') }}" />
                    <select name="gender" id="gender" class="block mt-1 w-full" required autofocus>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                    {{-- <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" /> --}}
                </div>

            </div>

            <div class="step4" id="step4">

                <div class="mt-4">
                    <x-jet-label for="name" value="{{ __('Address Line 01') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" id="a1" type="text" name="addressl1" :value="old('address')" required autofocus autocomplete="address line1" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="name" value="{{ __('Address Line 02') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" id="a2" type="text" name="addressl2" :value="old('address')" required autofocus autocomplete="address line2" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="name" value="{{ __('Address Line 03') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full"  type="text" name="addressl3" :value="old('address')" autofocus autocomplete="address line3" />
                </div>

            </div>


            <div class="step5" id="step5">

                <div class="mt-4">
                    <x-jet-label for="name" value="{{ __('City') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" id="city" type="text" name="city" :value="old('city')" required autofocus autocomplete="city" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="name" value="{{ __('Country') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" id="country" type="text" name="country" :value="old('country')" required autofocus autocomplete="country" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="name" value="{{ __('Postal Code') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" id="pcode" name="postalcode" :value="old('postalcode')" required autofocus autocomplete="postalcode" />
                </div>

            </div>

            <div class="step6" id="step6">
                <div class="mt-4">
                    <x-jet-label for="name" value="{{ __('Role') }}" />
                    <select name="roleid" id="role" class="block mt-1 w-full" required autofocus>
                        <option value="">Select One</option>
                        <option value="2">Seller</option>
                        <option value="3">Customer</option>
                    </select>
                    {{-- <x-jet-input id="name" class="block mt-1 w-full" type="text" name="tel" :value="old('tel')" required autofocus autocomplete="name" /> --}}
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms" required />

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-jet-button class="ml-4" id="rebtn">
                        {{ __('Register') }}
                    </x-jet-button>
                </div>
            </div>

        </form>
        <div class="flex items-center justify-end mt-4">
            <button class="btn-next" onclick="prestep()" id="prebtn">Previous</button>
            <button class="btn-next" onclick="changestep()" id="nextbtn">Next</button>
        </div>

        <style>

            .step2{
                display: none;
            }
            .step3{
                display: none;
            }
            .step4{
                display: none;
            }
            .step5{
                display: none;
            }
            .step6{
                display: none;
            }

            .btn-next{
                padding: 15px;
                margin: 15px;
                background: #0d1b2a;

                width: 100px;
                color: white;
                border-radius: 14px;
            }

            .btn-next:hover{
                background: #415a77;  /* fallback for old browsers */

                width: 150px;
            }

            #prebtn{
                display: none;
            }

            .err{
                color: red;
            }



        </style>


        <script>

            let steps = 2;
            let prstep = 1;


            function changestep() {
                var st = "step"+steps;
                var pr = "step"+prstep;

                document.getElementById(st).style.display = 'inline';
                document.getElementById(pr).style.display = 'none';
                steps = steps + 1;
                prstep = prstep + 1;

                if (steps == 7) {
                    document.getElementById('nextbtn').style.display = 'none';
                    cheacknull();
                }else{
                    document.getElementById('nextbtn').style.display = 'inline';
                }

                if (prstep == 1) {
                    document.getElementById('prebtn').style.display = 'none';
                }else{
                    document.getElementById('prebtn').style.display = 'inline';
                }
            }

            function prestep() {
                steps = steps - 1;
                prstep = prstep - 1;
                var st = "step"+steps;
                var pr = "step"+prstep;



                document.getElementById(st).style.display = 'none';
                document.getElementById(pr).style.display = 'inline';


                if (prstep == 1) {
                    document.getElementById('prebtn').style.display = 'none';
                }else{
                    document.getElementById('prebtn').style.display = 'inline';
                }

                if (steps == 7) {
                    document.getElementById('nextbtn').style.display = 'none';
                }else{
                    document.getElementById('nextbtn').style.display = 'inline';
                }



            }


            function cheacknull() {
                if (document.getElementById('fname').value == "" &&
                document.getElementById('lname').value == "" &&
                document.getElementById('email').value == "" &&
                document.getElementById('pwd').value == "" &&
                document.getElementById('cpwd').value == "" &&
                document.getElementById('tel').value == "" &&
                document.getElementById('gender').value == "" &&
                document.getElementById('a1').value == "" &&
                document.getElementById('a2').value == "" &&
                document.getElementById('city').value == "" &&
                document.getElementById('country').value == "" &&
                document.getElementById('pcode').value == "" )
                {
                    document.getElementById('err').innerHTML = "Fill all the filds";
                    document.getElementById('rebtn').style.display = 'none';
                }else{
                    document.getElementById('err').innerHTML = "";
                    document.getElementById('rebtn').style.display = 'inline';
                }
            }


        </script>



    </x-jet-authentication-card>
</x-guest-layout>
