<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($book->title) }}
        </h2>
    </x-slot>

    <form action="{{ route('book.update', ['book'=>$book->id]) }}" method="post">
        @method('patch')
        @csrf
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-2">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-lg-n1" style="border: solid 1px red">
                    <div class="p-6 bg-white border-b border-gray-200 mb-2" style="border: solid 1px black">

                        <img src="{{$book->image}}" class="flex-shrink-0 me-3" alt="...">
                        <div>
                            <h5 class="mt-0">Title</h5>
                            <h5 class="mt-0">{{$book->title}}</h5>
                            <h5 class="mt-0">Author</h5>
                            <h5 class="mt-0">{{$book->author}}</h5>
                            <h5 class="mt-0">글 작성</h5>
                            <textarea name="bookinfo">{{$book->text}}</textarea>
                        </div>
                        <button type="submit">수정</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
