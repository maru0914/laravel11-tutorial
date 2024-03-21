<x-layout>
    <x-slot:heading>
        求人詳細
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>

    <p>
        この求人は年収{{ $job['salary'] }}です。
    </p>
</x-layout>
