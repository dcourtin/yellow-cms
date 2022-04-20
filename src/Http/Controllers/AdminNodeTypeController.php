<?php

namespace Dcourtin\YellowCms\Http\Controllers;

use Dcourtin\YellowCms\Models\NodeType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminNodeTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('yellowcms::admin/node_type/index', ['nodeTypes' => NodeType::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(
            'yellowcms::admin/node_type/edit',
            [
                'pageTitle' => 'Nouveau type de contenu',
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($id = $request->get('id')) {
            $nodeType = NodeType::findOrFail($id);
        } else {
            $nodeType = new NodeType();
        }

        $nodeType->name = $request->get('name');
        $nodeType->slug = $request->get('slug') ?? Str::slug($nodeType->name);
        $nodeType->description = $request->get('description');
        $nodeType->save();

        return redirect()->route('node_type_show', ['id' => $nodeType->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('yellowcms::admin/node_type/show', ['nodeType' => NodeType::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('yellowcms::admin/node_type/edit', ['nodeType' => NodeType::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return view('yellowcms::admin/node_type/edit', ['nodeType' => NodeType::find($id)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        NodeType::find($id)->delete();

        return redirect()->route('node_type_index')->with('success', 'Node type deleted!');
    }
}
