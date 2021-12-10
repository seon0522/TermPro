<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("독후감 작성 중") }}
        </h2>
    </x-slot>
    <div class="py-12">
        <form action="{{ route('book.store') }} " method="post">
            @csrf
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pb-2">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-lg-n1">
                    <div class="p-6 bg-white border-b border-gray-200 mb-2">

                        <input type="hidden" name="image" value="{{$book->image}}">
                        <input type="hidden" name="title" value="{{$book->title}}">
                        <input type="hidden" name="author" value="{{$book->author}}">
                        <input type="hidden" name="isbn" value="{{$book->isbn}}">
                        <div class="flex-shrink-1  me-3 w-30" >
                            @if($book->image == null)
                                <img id="image" src="storage/noimage/no_img.png" style="height:200px;" alt="...">
                            @else
                                <img id="image" src="{{$book->image}}" style="height:200px;" alt="...">
                            @endif
                        </div>

                        <div class="m-3">
                            <h5 class="mt-0">Title</h5>
                            <h5 class="mt-0">{{$book->title}}</h5>
                            <h5 class="mt-0">Author</h5>
                            <h5 class="mt-0">{{$book->author}}</h5>
                        </div>
                            <div class="card bg-light mb-3" style="max-height: 18rem;">
                                <div class="card-header">독후감</div>
                                <div class="card-body">
                                    <textarea name="bookinfo" rows="5"  style="width:100%;"></textarea>
                                </div>
                            </div>

                            <h5 class="mt-0"><button type="submit"> 등록 </button></h5>


                    </div>
                </div>

            </div>
        </form>
    </div>
</x-app-layout>
