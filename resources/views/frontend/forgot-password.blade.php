@extends('frontend.layouts.app')
@section('content')
    <!-- login section start from here -->

    <div>
        <div class="container mx-auto ">

            <form class="w-96 mx-auto p-5 border rounded-md my-5 " method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="mb-3 flex justify-center">
                    <img src="{{ asset('frontend/assets/logo.png') }}" alt="" srcset="">
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="email" name="email" id="floating_email"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-primary peer"
                        placeholder=" " required />
                    <label for="floating_email"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email
                        address</label>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                </div>


                <button type="submit"
                    class="text-white bg-primary hover:bg-secondary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm w-full sm:w-auto px-3 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get
                    Account</button>

                <div class="flex justify-end">
                    <div class="text-sm italic">

                        Want to LogIn ? <a href="{{ route('login') }}"
                            class="text-primary hover:text-secondary text-sm">LogIn</a>
                    </div>


                </div>
                <div class="flex justify-end mt-2">
                    <!-- <hr class="my-2 mt-5"> -->
                    <div class="text-sm italic">

                        Need an Account ? <a href="{{ route('register') }}" class="text-primary text-sm">SignUp</a>

                    </div>
                </div>
            </form>

        </div>
    </div>

    <!-- login section ends here -->


    <!-- login section ends here -->
@endsection
