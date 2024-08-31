<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Question;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::all();
//        $questions = Question::paginate(15);
        $questions = Question::all();
        return view('dashboard.question.index', compact('pages', 'questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Question::create(['question' => $request->question, 'page_id' => $request->page_id])) {
            return redirect()->back()->with('success', 'تم حفظ البيانات بنجاح');
        }
        return redirect()->back()->with('error', 'حدث خطأ اثناء الحفظ الرجاء المحاولة مره اخرى');
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if (Question::where('id', $request->id)->update([
            'question' => $request->question,
            'page_id' => $request->page_id
        ])) {
            return redirect()->back()->with('success', 'تم حفظ البيانات بنجاح');
        }
        return redirect()->back()->with('error', 'حدث خطأ اثناء الحفظ الرجاء المحاولة مره اخرى');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        if (Question::where('id', $request->id)->delete()) {
            return redirect()->back()->with('success', 'تم حذف الاختيار بنجاح');
        }

        return redirect()->back()->with('error', 'حدث خطأ اثناء حذف الصفحة');
    }
}
