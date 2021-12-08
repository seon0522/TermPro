<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('나의 독서량') }}
        </h2>
    </x-slot>
    <div id="app">
        <vue-chart></vue-chart>
    </div>
</x-app-layout>

