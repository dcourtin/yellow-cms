<?php

namespace Dcourtin\YellowCms\Http\Controllers;

use Illuminate\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NodeController extends Controller
{

    public function nodeList($nodeType,$page)
    {
        $nodeList  = getNodeList($nodeType, $page);
        return view("nodes/$nodeType/index" );
    }

    public function nodeShow($nodeType, $nodeSlug)
    {
        //la fonction node est issu du fichier app\helpers
        return view("nodes/$nodeType/show",['node'=> getNode($nodeType,$nodeSlug)] );
    }
}