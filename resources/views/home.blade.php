<x-layout>
    <x-slot:title>
        Welcome
    </x-slot:title>

    <div class="max-w-2xl mx-auto">
         @foreach ($chirps as $chirp)
        <div class="card bg-base-100 shadow mt-8">
           
       
            <div class="card-body">
                <div>
                    <div>{{ $chirp['Author'] }}</div>
                    <div>{{ $chirp['Message'] }}</div>
                    <div>{{ $chirp['Time'] }}</div>
                </div>
            
            </div>
           
        </div> 
        @endforeach
    </div>
</x-layout>