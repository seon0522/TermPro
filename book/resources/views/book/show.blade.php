<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($book->title) }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-lg-n1" >

                <div class="px-2 pt-2 bg-white ">
                    <div class="d-flex position-relative p-2 m-2" style="border: solid 1px red">
                        <div class="flex-shrink-1  me-3 w-20" >
                            @if($book->image == null)
                                <img id="image" src="storage/noimage/no_img.png" style="height:100px;" alt="...">
                            @else
                                <img id="image" src="{{$book->image}}" style="height:100px;" alt="...">
                            @endif
                        </div>
                        <div class="w-80">
                            <h5 class="mt-0">{{"$book->title"}}</h5>
                            <h5 class="mt-0">{{"$book->author"}}</h5>
                        </div>

                    </div>
                    <div class=" p-2 m-2" style="border:solid #F5F5F5">
                        <h5 class="mt-0">독후감</h5>
                        <div>{{$book->text}}</div>
                    </div>
                </div>
                <div class="d-flex position-relative p-2 m-2">
                    <form id="form" class="ml-4 w-auto"
                          action="{{ route('book.edit', ['book'=>$book->id]) }}">
                        <button type="submit" class="btn btn-outline" style="border:solid #F5F5F5">수정</button>
                    </form>
                    <form id="form" class="ml-4 w-auto" method="post"
                          action="{{ route('book.destroy', ['book'=>$book->id]) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-outline" style="border:solid #F5F5F5">삭제</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
