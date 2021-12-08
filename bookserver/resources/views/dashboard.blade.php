<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('글 작성') }}
        </h2>
        <button onclick=location.href="{{ route('book.create') }}" type="button" class="btn btn-info hover:bg-blue-700 font-bold text-white">
            글쓰기
        </button>


    </x-slot>
</x-app-layout>

