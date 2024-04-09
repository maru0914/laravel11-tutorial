<x-layout>
    <x-slot:heading>
        求人詳細
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job->title }}</h2>

    <p>
        この求人は年収{{ $job->salary }}です。
    </p>

    <p class="mt-6">
        <x-button href="/jobs/{{ $job->id }}/edit">求人編集</x-button>
    </p>
</x-layout>
