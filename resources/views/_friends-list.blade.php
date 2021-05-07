<h3 class="font-bold text-xl mb-4">Following</h3>

<ul>
    @foreach (auth()->user()->follows as $user)
        <li class="mb-4">
            <div class="flex items-center text-sm ">
                <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
                    <img src="{{ $user->avatar }}" alt="" class="rounded-full mr-2"
                    width="40"
                    height="40">
                </a>
                <a href="{{ route('profile', $user) }}">
                    {{ $user->name }}
                </a>
            </div>
        </li>
    @endforeach


</ul>
