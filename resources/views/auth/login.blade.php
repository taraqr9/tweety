<x-master>
    <div class="container mx-auto flex justify-cneter">
        <div class="px-12 py-8 bg-gray-200 border border-gray-300 rounded-lg">
            <div class="col-md-8">

                <div class="font-bold text-lg  mb-4">{{ __('Login') }}</div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                            Email
                        </label>

                        <div class="col-md-6">
                            <input class="border border-gray-400 p-2 w-full" id="email" type="email" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                            Password
                        </label>

                        <div class="col-md-6">
                            <input class="border border-gray-400 p-2 w-full" id="password" type="password"
                                name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-6">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-6">
                        <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2">
                            Submit
                        </button>

                        <a href="{{ route('password.request') }}" class="text-xs text-gray-700"> Forgot Your
                            Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-master>
