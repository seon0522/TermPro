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
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-lg-n1">
                    <div class="p-6 bg-white border-b border-gray-200 mb-2">
                        @if($book->image == null)
                            <img id="image" class="flex-shrink-0 me-3" src="storage/noimage/no_img.png" alt="...">
                        @else
                            <img id="image" class="flex-shrink-0 me-3" src="{{$book->image}}"alt="...">
                        @endif
                        <div class="m-3">
                            <h5 class="mt-0">Title</h5>
                            <h5 class="mt-0">{{$book->title}}</h5>
                            <h5 class="mt-0">Author</h5>
                            <h5 class="mt-0">{{$book->author}}</h5>
                        </div>
                        <div class="card bg-light mb-3" style="max-height: 18rem;">
                            <div class="card-header">독후감</div>
                            <div class="card-body">
                                <textarea name="bookinfo" rows="5" style="width:100%;">{{$book->text}}</textarea>
                            </div>
                        </div>
                        <button type="submit">수정</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
