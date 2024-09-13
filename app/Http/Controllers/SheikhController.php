<?php

namespace App\Http\Controllers;

use App\Models\Sheikh;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SheikhController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sheikhs = Sheikh::all();
        return view('dashboard.Sheikh.index', compact('sheikhs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Sheikh::create(
            [
                'name' => $request->name,
                'phone' => $request->phone,
                'country' => $request->country,
                'details' => $request->detail
            ])) {
            return redirect()->back()->with('success', 'تم حفظ البيانات بنجاح');
        }
        return redirect()->back()->with('error', 'حدث خطأ اثناء الحفظ الرجاء المحاولة مره اخرى');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sheikh $sheikh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sheikh $sheikh)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if (Sheikh::where('id', $request->id)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'country' => $request->country,
            'details' => $request->detail
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
        if (Sheikh::where('id', $request->id)->delete()) {
            return redirect()->back()->with('success', 'تم حذف بيانات المعالج بنجاح');
        }

        return redirect()->back()->with('error', 'حدث خطأ اثناء حذف بيانات المعالج');
    }
}
