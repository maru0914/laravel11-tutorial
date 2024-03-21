<x-layout>
    <x-slot:heading>
        求人一覧
    </x-slot:heading>

    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="/jobs/{{$job['id']}}" class="text-blue-500 hover:underline">
                    <strong>{{ $job['title'] }}:</strong> 年収{{ $job['salary'] }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
