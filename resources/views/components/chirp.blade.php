@props(['chirp'])

<div class="card bg-base-100 shadow " style="display:'flex'; flex-directtion:'row';gap:10px;margin-bottom:20px">
    <div class="card-body">
        <div class="flex space-x-3" style="display:'flex'; flex-directtion:'row';gap:10px; background-color:'#000;">
            @if($chirp->user)
            <img style="width: 60px; height:60px;"
                src="https://avatars.laravel.cloud/{{ urlencode($chirp->user->email) }}"
                alt="{{ $chirp->user->name }}'s avatar"
                class="w-10 h-10 rounded-full object-cover "
                />
            @else
                <img style="width: 60px; height:60px;" src="https://avatars.laravel.cloud/f61123d5-0b27-434c-a4ae-c653c7fc9ed6?vibe=stealth"
                    alt="Anonymous User" class="w-10 h-10 rounded-full object-cover " />
            @endif

            <div class="min-w-0">
                <div class="flex items-center gap-1">
                    <span class="text-sm font-semibold">
                        {{ $chirp->user ? $chirp->user->name : 'Anonymous' }}
                    </span>

                    <span class="text-base-content/60">·</span>

                    <span class="text-sm text-base-content/60">
                        {{ $chirp->created_at->diffForHumans() }}
                    </span>
                </div>

                <p class="mt-1">
                    {{ $chirp->message }}
                </p>
            </div>
        </div>
    </div>
</div>