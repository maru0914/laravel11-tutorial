<x-layout>
    <x-slot:heading>
        求人作成
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">求人作成</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">以下の情報を入力してください！</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">職種</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="title" id="title" placeholder="リードエンジニア"/>

                            <x-form-error name="title"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="salary">給料</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="salary" id="salary" placeholder="年収650万円"/>

                            <x-form-error name="salary"/>
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">キャンセル</button>
            <x-form-button>作成</x-form-button>
        </div>
    </form>

</x-layout>
