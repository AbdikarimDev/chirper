<x-layout>
  <x-slot:title>
        Welcome to users page
    </x-slot:title>
    <div class="flex flex-col gap-9">
        @foreach ($users as $user)
        <div class="flex justify-around items-center flex-col rounded-7 p-7 shadow-lg bg-amber-200 ">
            <div> Your Id is :{{ $user['id'] }}</div>
            <div>{{ $user['message'] }} : {{ $user['name'] }}</div>
            <div>Are You Sure Your Last Name Is : {{ $user['lastName'] }}</div>
        </div>
            
        @endforeach

    </div>
</x-layout>