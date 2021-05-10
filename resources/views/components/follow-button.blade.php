@if (current_user()->isNot($user))
<form method="POST" action="/profiles/{{ $user->name }}/follow">
    @csrf

    <button class="bg-blue-500 rounded-full shadow py-2 px-2 text-white text-xs"> 
        {{ current_user()->following($user) ? 'Unfollow Me' : 'Follow Me'}}
    </button>
</form>
@endif