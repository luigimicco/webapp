<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Template;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $ipp = $request->ipp ?? 10; // items per page
        $search = $request->search ?? '';

        if ($search) {
            $items = Template::where('nome', 'LIKE', '%'.$search.'%')
            ->sortable(['id'])->paginate($ipp);
        } else {
          $items = Template::sortable(['id'])->paginate($ipp);
        }

        return view('admin.templates.index', compact('items', 'ipp', 'search'));        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.templates.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       
        $request->validate([
            'name' => 'required|string|max:255',
        ], [
            'required' => 'Il contenuto è obbligatorio',
        ]);        

        $data = $request->all();
        $data['active'] = false;
        $template = new Template();
        $template->fill($data);
        $template->save();

        return redirect()->route('admin.templates.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Template $template)
    {
        return view('admin.templates.show', compact('template'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Template $template)
    {
        return view('admin.templates.form', compact('template'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Template $template)
    {
        $request->validate(
            [
                'name' => 'required|string',
            ]
        );

        $data = $request->all();
        $template->update($data);

        return redirect()->route('admin.templates.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Template $template)
    {
        $template->delete();
        return redirect()->route('admin.templates.index')->with('alert-message', 'Profilo eliminato con successo.')->with('alert-type', 'success');
    }
}
