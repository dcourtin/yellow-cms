<?php

namespace Dcourtin\YellowCms\Http\Controllers;


use Dcourtin\YellowCms\Models\Node;
use Dcourtin\YellowCms\Models\NodeType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminNodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($nodeTypeId)
    {
        $orderBy = 'created_at';
        $order = 'DESC';
        if ($nodeTypeId) {
            $nodeQuery = Node::where(['node_type_id' => $nodeTypeId]);
            $nodeType = NodeType::find($nodeTypeId);
            if ($order == 'DESC') {
                $nodes = $nodeQuery->orderByDesc($orderBy)->get();
            } else {
                $nodes = $nodeQuery->orderBy($orderBy)->get();
            }
        }

        return view('admin/node/index', [
            'pageTitle' => isset($nodeType) ? $nodeType->name : 'Nodes',
            'nodes' => $nodes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($nodeTypeId)
    {
        $nodeType = NodeType::findOrFail($nodeTypeId);

        return view(
            'node/edit',
            [
                'pageTitle' => 'Nouveau contenu de type : '.$nodeType->name,
                'nodeType' => $nodeType,
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
            $node = Node::findOrFail($id);
        } else {
            $node = new Node();
            $node->node_type_id = $request->get('node_type_id');
        }

        $node->title = $request->get('title');
        $node->slug = $request->get('slug') ?? Str::slug($node->title);
        $node->content = $request->get('content');
        $node->status = $request->get('status', 'draft');
        $node->save();

        return redirect()->route('node_show', ['id' => $node->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route('node_edit', ['id' => $id]);
        $node = Node::findOrFail($id);

        return view('admin/node/show', ['node' => $node]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $node = Node::findOrFail($id);

        return view(
            'admin/node/edit',
            [
            'pageTitle' => $node->title ,
            'node' => $node, ]
        );
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
