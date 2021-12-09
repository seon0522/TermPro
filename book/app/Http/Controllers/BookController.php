<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\BookMangement;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Type;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function bookMonth()
    {
        return view('book.bookmonth');
    }

    public function bookYear($year)
    {
        $dateMonth = array();

        for ($i = 1; $i <= 12; $i++){
            array_push($dateMonth,DB::table('book_mangement')->
            whereYear('created_at',$year)->whereMonth('created_at',$i)
                ->get()->count() );
        }

        return $dateMonth;
    }



//    네이버 책 검색
    function booksearch(Request $request)
    {

        $search = $request->query('search');

        $client_id = Env::get("CLIENT_ID_NAVER");
        $client_pw = Env::get("CLIENT_PW_NAVER");

//        검색어 존재시
        if (isset($search)) {

            $response = Http::withHeaders([
                'X-Naver-Client-Id' => $client_id,
                'X-Naver-Client-Secret' => $client_pw
            ])->get('https://openapi.naver.com/v1/search/book.json',
                ['query' => $search, 'display' => 30]);


            $data = json_decode($response, true);

            $item = $data["items"]; // 책 결과 부분만

            $bookscount = array();// 받은 모든 책 정보
            $book = array(); // 필요한 책 값

            foreach ($item as $key => $value) {
                $book['title'] = $value['title'];
                $book['image'] = $value['image'];
                $book['author'] = $value['author'];
                $book['description'] = $value['description'];
                $book['isbn'] = $value['isbn'];

//            객체로 집어넣기
                $bookscount[$key] = (object)$book;
            }


            $searchResult = $bookscount;

            return view('book.search', ['searchss' => $searchResult]);
        }

        return view('book.search');
//
    }

    public function searchPage()
    {

        return view('book.search');
    }


//    내 독후감 인덱스
    public function index()
    {

        $data = BookMangement::latest()->paginate(5);

        return view('book.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

//    책 목록 선택 시, ( 이미지, 이름 )들고오기.
//    독후감 생성
    public function create(Request $request)
    {

//        dd($request);
        $book = $request;

        return view('book.create', ["book" => $book]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

//    독후감 저장
    public function store(Request $request)
    {

        $bookInsert = new BookMangement();

        $bookInsert->title = $request->title;
        $bookInsert->author = $request->author;
        $bookInsert->text = $request->bookinfo;
        $bookInsert->isbn = $request->isbn;
        $bookInsert->image = $request->image;
        $bookInsert->user_id = Auth::id();

        $bookInsert->save();

        return redirect()->route('book.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    //    독후감 상세
    public function show($id)
    {
        //
        $book = BookMangement::find($id);

//        dd($book);

        return view('book.show', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    //    독후감 수정
    public function edit($id)
    {

        $book = BookMangement::find($id);

        return view('book.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    //    독후감 수정(내부)
    public function update(Request $request, $id)
    {
        $book = BookMangement::find($id);

        $book->text = $request->bookinfo;

        $book->save();

        return redirect()->route('book.show', ['book' => $book->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

//    독후감 삭제
    public function destroy($id)
    {
        //
        $book = BookMangement::find($id);

        $book->delete();

        return redirect()->route('book.index');
    }
}


