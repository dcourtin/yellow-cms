<?php

namespace Dcourtin\YellowCms\Http\Controllers;

class AdminNodeController extends Controller
{
    public function nodeList($nodeType, $page, $status = 'publish')
    {
        $nodeList = getNodeList($nodeType, $page);

        return view("nodes/$nodeType/index");
    }

    public function nodeShow($nodeType, $nodeSlug)
    {
        return view("nodes/$nodeType/show", ['node' => getNode($nodeType, $nodeSlug)]);
    }
}
