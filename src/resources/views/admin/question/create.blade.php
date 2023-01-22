<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quizy-Question-Create') }}
        </h2>
    </x-slot>


    <div class="flex justify-center items-center font-sans text-gray-900 antialiased">
        <div class="w-full sm:max-w-md my-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form action="{{ route('admin.question.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- id-->
                <div class="mb-6 hidden">
                    <x-input-label for="issue_number" :value="__('問題タイトル番号')" />
                    <x-text-input id="issue_number" class="block mt-1 w-full" type="text" name="issue_number"
                        value="{{ $id }}" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Question-->
                <div class="mb-6">
                    <x-input-label for="question" :value="__('設問(漢字)')" />
                    <x-text-input id="question" class="block mt-1 w-full" type="text" name="question"
                        :value="old('question')" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Question-->
                <div class="mb-6">
                    <x-input-label for="question_en" :value="__('設問(ローマ字)')" />
                    <x-text-input id="question_en" class="block mt-1 w-full" type="text" name="question_en"
                        :value="old('question_en')" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Choice_1-->
                <div class="mb-6">
                    <x-input-label for="choice_1" :value="__('選択肢-1')" />
                    <x-text-input id="choice_1" class="block mt-1 w-full" type="text" name="choice_1"
                        :value="old('choice_1')" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Choice_2-->
                <div class="mb-6">
                    <x-input-label for="choice_2" :value="__('選択肢-2')" />
                    <x-text-input id="choice_2" class="block mt-1 w-full" type="text" name="choice_2"
                        :value="old('choice_2')" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Choice_3-->
                <div class="mb-6">
                    <x-input-label for="choice_3" :value="__('選択肢-3')" />
                    <x-text-input id="choice_3" class="block mt-1 w-full" type="text" name="choice_3"
                        :value="old('choice_3')" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- answer -->
                <x-input-label :value="__('答えの選択肢')" />
                <div class="mb-6 flex">
                    <div class="w-full">
                        <x-radio-input id="answer_1" class="" type="radio" name="answer" value="1"
                        required autofocus />
                        <x-input-label for="answer_1" :value="__('選択肢-1')" class="mt-1 px-4 py-3 cursor-pointer border border-solid border-gray-300 -mr-1 text-black bg-white block text-center peer-checked:bg-blue-400 peer-checked:text-white"/>
                    </div>
                    <div class="w-full">
                        <x-radio-input id="answer_2" class="" type="radio" name="answer" value="2"
                        required autofocus />
                        <x-input-label for="answer_2" :value="__('選択肢-2')" class="mt-1 px-4 py-3 cursor-pointer border border-solid border-gray-300 -mr-1 text-black bg-white block text-center peer-checked:bg-blue-400 peer-checked:text-white"/>
                    </div>
                    <div class="w-full">
                        <x-radio-input id="answer_3" class="" type="radio" name="answer" value="3"
                        required autofocus />
                        <x-input-label for="answer_3" :value="__('選択肢-3')" class="mt-1 px-4 py-3 cursor-pointer border border-solid border-gray-300 -mr-1 text-black bg-white block text-center peer-checked:bg-blue-400 peer-checked:text-white"/>
                    </div>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- picture-->
                <div class="mb-6">
                    <x-input-label for="picture" :value="__('設問の画像')" />
                    <x-text-input id="picture" class="block mt-1 w-full" type="file" name="picture"
                        :value="old('picture')" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="max-w-7xl mx-auto">
                    <div class="p-6 overflow-hidden sm:rounded-lg flex justify-center items-center gap-10">
                        <button class="border border-solid border-purple-600 shadow-sm rounded-md w-40 h-16">
                            <a class="w-full h-full flex justify-center items-center"
                                href="{{ route('admin.question', ['id' => $id]) }}">{{ __('設問一覧へ戻る') }}</a>
                        </button>
                        <button
                            class="border border-solid border-purple-600 shadow-sm py-3 px-8 rounded-md bg-purple-600 text-white w-40 h-16"
                            type="submit">
                            作成する
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
