<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($book->title) }}
        </h2>
    </x-slot>
    <div class="py-12">
        <form action="{{ route('book.store') }} " method="post">
        @csrf
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-lg-n1" style="border: solid 1px red">
                <div class="p-6 bg-white border-b border-gray-200 mb-2" style="border: solid 1px black">

                        <input type="hidden" name="image" value="{{$book->image}}">
                        <input type="hidden" name="title" value="{{$book->title}}">
                        <input type="hidden" name="author" value="{{$book->author}}">
                        <input type="hidden" name="isbn" value="{{$book->isbn}}">

                        <img src="{{$book->image}}" class="flex-shrink-0 me-3" alt="...">
                        <div>
                            <h5 class="mt-0">Title</h5>
                            <h5 class="mt-0">{{$book->title}}</h5>
                            <h5 class="mt-0">Author</h5>
                            <h5 class="mt-0">{{$book->author}}</h5>

                            <h5 class="mt-0">글 작성</h5>
                            <textarea name="bookinfo"></textarea>
                            <button type="submit"> 등록 </button>
                        </div>
                </div>
            </div>

        </div>
        </form>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-lg-n1" style="border: solid 1px red">
                <div class="p-6 bg-white border-b border-gray-200 mb-2" style="border: solid 1px black">
                </div>

            </div>

        </div>

    </div>
</x-app-layout>
