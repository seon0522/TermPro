<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('글 작성') }}
        </h2>

        <h5>
            1. 책을 검색 한 후, 독후감을 쓸 책을 골라주세요
            <form action="{{route('book.search')}}" method="get">
                <input type="text" id="search" name="search">
                <button type="submit">검색</button>
            </form>
        </h5>
    </x-slot>

    @if(isset($searchss))
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                {{--            border-b border-gray-200"--}}
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    @foreach($searchss as $value)
                        <div class="px-2 pt-2 bg-white ">
                            <form action="{{route('book.create')}}">
                                <input type="hidden" name="image" value="{{$value->image}}">
                                <input type="hidden" name="title" value="{{$value->title}}">
                                <input type="hidden" name="author" value="{{$value->author}}">
                                <input type="hidden" name="isbn" value="{{$value->isbn}}">

                                <div class="d-flex position-relative p-2 m-2" style="border:solid #F5F5F5">
                                    <img id="image" src="{{$value->image}}" class="flex-shrink-0 me-3" alt="...">
                                    <div>
                                        <h5 class="mt-0">{{$value->title}}</h5>
                                        <h5 class="mt-0">{{$value->author}}</h5>
                                        <p name="description">{{$value->description}}</p>
                                        <button type="submit" class="btn btn-outline" style="border:solid #F5F5F5">작성
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endforeach

                </div>
            </div>
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
</x-app-layout>





