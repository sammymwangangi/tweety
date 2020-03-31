<h3 class="font-bold text-xl mb-4">Friends</h3>
<ul>
    @foreach(auth()->user()->follows as $user)
        <li class="mb-4">
            <div>
                <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
                    <img
                        src="{{$user->avatar}}"
                        alt="user"
                        style="width: 40px; height: 40px"
                        class="rounded-full mr-2"
                    >

                    {{$user->name}}
                </a>
            </div>
        </li>
    @endforeach
</ul>
