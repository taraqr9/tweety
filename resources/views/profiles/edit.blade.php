<x-app>
    <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">
                Userame
            </label>

            <input type="text" class="form-control bg-gray-400" name="username" id="username"
                value="{{ $user->username }}" aria-describedby="helpId" placeholder="">

            @error('username')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                Name
            </label>

            <input type="text" class="form-control bg-gray-400" name="name" id="name" value="{{ $user->name }}"
                aria-describedby="helpId" placeholder="">

            @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                Email
            </label>

            <input type="email" class="form-control bg-gray-400" name="email" id="email" value="{{ $user->email }}"
                aria-describedby="helpId" placeholder="">

            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                Password
            </label>

            <input type="password" class="form-control bg-gray-400" name="password" id="password"
                aria-describedby="helpId" required>

            @error('password')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password_confirmation">
                Password Confirmation
            </label>

            <input type="password" class="form-control bg-gray-400" name="password_confirmation"
                id="password_confirmation" aria-describedby="helpId" required>

            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">

            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="avatar">
                Avatar
            </label>

            <div class="flex">
                <input type="file" class="form-control bg-gray-400" name="avatar" id="avatar" aria-describedby="helpId">

                <img src="{{ $user->avatar}}" alt="Your avatar" width="40">
            </div>

            @error('avatar')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
                
        </div>

        <div class="mb-6 mt-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                Submit
            </button>
        </div>


    </form>
</x-app>
