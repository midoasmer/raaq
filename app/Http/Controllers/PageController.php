<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::all();
        return view('dashboard.page.index', compact('pages'));
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
        if (Page::create(['name' => $request->name])) {
            return redirect()->back()->with('success', 'تم حفظ البيانات بنجاح');
        }
        return redirect()->back()->with('error', 'حدث خطأ اثناء الحفظ الرجاء المحاولة مره اخرى');
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if (Page::where('id', $request->id)->update([
            'name' => $request->name,

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
        if (Page::where('id', $request->id)->delete()) {
            return redirect()->back()->with('success', 'تم حذف الصفحة بنجاح');
        }

        return redirect()->back()->with('error', 'حدث خطأ اثناء حذف الصفحة');
    }
}
