<?php

namespace Dcourtin\YellowCms\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    use HasFactory;

    public function nodeType()
    {
        return $this->belongsTo(NodeType::class);
    }

    public function hasNodeFields()
    {
        return $this->NodeFields->count() > 0;
    }

    public function nodeFields()
    {
        return $this->hasMany(NodeField::class);
    }

    public function getField($fieldName)
    {
        $field = $this->nodeFields()->where([
            'field_name' => $fieldName,
        ])->first();



        return $field;
    }
}
