<?php

#namespace App\Helper;

use App\Models\Node;
use App\Models\NodeType;

function nodeListRoute($nodeType, $page)
{
    return route('nodeList', ['nodeType' => $nodeType,'page' => $page]);
}

function nodeShowRoute()
{
    return route('nodeShow', ['nodeType' => $nodeType,'nodeSlug' => $nodeSlug]);
}

/**
 * @deprecated utiliser nodeShowRoute à la place
 */
function nodeShow($nodeType, $nodeSlug)
{
    return route('nodeShow', ['nodeType' => $nodeType,'nodeSlug' => $nodeSlug]);
}

/**
 * @deprecated utiliser nodeListRoute à la place
 */
function nodeList($nodeType, $page)
{
    return route('nodeList', ['nodeType' => $nodeType,'page' => $page]);
}

/**
 * retourne une node ou une 404 si non trouvé
 */
function getNode($nodeType, $nodeSlug)
{
    $nodeTypeId = NodeType::whereSlug($nodeType)->first()->id;
    $node = Node::where(['slug' => $nodeSlug,'id' => $nodeTypeId])->first();

    if (! $node) {
        abort(404, 'Page non trouvée');
    }

    return $node;
}

/**
 * retourne une liste de nodes ou une 404 si non trouvé
 */
function getNodeList($nodeType, $page)
{
    $nodeTypeId = NodeType::whereSlug($nodeType)->first()->id;
    //@todo gestion 404
    $nodes = Node::where(['id' => $nodeTypeId])->get();

    return $nodes;
}

function hook($hook)
{
    echo $hook;
}