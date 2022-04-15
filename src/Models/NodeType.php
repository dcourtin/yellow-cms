<?php

namespace Dcourtin\YellowCms\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NodeType extends Model
{
    use HasFactory;

    public function nodeTypeFields()
    {
        //return $this->hasMany(App\Modesl\NodeTypeField);
    }
}
