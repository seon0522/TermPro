<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('독후감') }}
        </h2>
    </x-slot>
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{--            border-b border-gray-200"--}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach($data as $book)
                    <a href="{{route('book.show', ['book'=>$book->id])}}">
                        <div class="px-2 pt-2 bg-white ">
                            <div class="d-flex position-relative p-2 m-2" style="border:solid #F5F5F5">
                                @if($book->image != null)
                                <img id="image" src="{{$book->image}}" class="flex-shrink-0 me-3" alt="...">
                                @else
                                <img id="image" src="..." class="flex-shrink-0 me-3" alt="...">
                                @endif
                                <div>
                                    <h5 class="mt-0">{{$book->title}}</h5>
                                    <h5 class="mt-0">{{$book->author}}</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>

            <div class="d-flex position-relative p-2 m-2">
                {{ $data->links() }}
            </div>

        </div>
    </div>


</x-app-layout>


