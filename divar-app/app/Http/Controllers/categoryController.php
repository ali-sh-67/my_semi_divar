<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories=category::root()->get();
        return view('category.index')->with('categories',$categories);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
//        return 'create';
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        $category = new Category;
        $category->name = $request->name;
        $category->name_en = $request->name_en;
        $category->parent_id = $request->parent_id;
        if ($category->save()) {
            return view('category.store')->with(['category' => $category]);

            $this->validate($request, [
                'name' => 'required|min:1|max:70|string|unique:categorys',
            ]);
        }
        return; //422

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'show_category';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $category=category::find($id);
        return view('category.edit')->with('category',$category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update (StoreRequest $request, $id)
    {
        $category = category::where('id', $id)->first();

        if ($category->id != $request->parent_id) {
            $category->name = $request->name;
            $category->parent_id = $request->parent_id;
            if ($category->save()) {

                $categories=category::root()->get();
                return view('category.index')->with('categories',$categories);
            }
            redirect(view('category.edit')); // 422
        }

        return; // 401
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'destroy_category';
    }
}
