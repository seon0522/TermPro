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
                @if(isset($data))
                    @foreach($data as $book)
                        <a href="{{route('book.show', ['book'=>$book->id])}}"
                           style="text-decoration:none; color: #6b7280">
                            <div class="px-2 pt-2 bg-white ">
                                <div class="d-flex position-relative p-2 m-2" style="border:solid #F5F5F5">
                                    <div class="flex-shrink-1  me-3 w-20">
                                        @if($book->image == null)
                                            <img id="image" src="storage/noimage/no_img.png" style="height:100px;"
                                                 alt="...">
                                        @else
                                            <img id="image" src="{{$book->image}}" style="height:100px;" alt="...">
                                        @endif
                                    </div>
                                    <div >
                                        <h5 class="mt-0">제목: {{$book->title}}</h5>
                                        <h5 class="mt-0">저자: {{$book->author}}</h5>
                                        <h5 class="mt-0">글쓴 날: {{$book->created_at}}</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                    <div class="d-flex justify-content-center">
                        {{ $data->links() }}
                    </div>
                @else
                    <div class="py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            {{--            border-b border-gray-200"--}}
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="px-2 pt-2 bg-white ">
                                    당신의 책을 기록해 보세요
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

        </div>
    </div>


</x-app-layout>


