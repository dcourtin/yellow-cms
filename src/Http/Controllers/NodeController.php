<?php

namespace Dcourtin\YellowCms\Http\Controllers;

class NodeController extends Controller
{
    public function nodeList($nodeType, $page)
    {
        $nodeList = getNodeList($nodeType, $page);

        return view("nodes/$nodeType/index");
    }

    public function nodeShow($nodeType, $nodeSlug)
    {
        return view("nodes/$nodeType/show", ['node' => getNode($nodeType, $nodeSlug)]);
    }
}
