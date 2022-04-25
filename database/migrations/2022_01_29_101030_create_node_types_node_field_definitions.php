<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Dcourtin\YellowCms\Models\NodeType;
use Dcourtin\YellowCms\Models\NodeFieldDefinition;

class CreateNodeTypesNodeFieldDefinitions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('node_types_node_field_definitions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(NodeType::class);
            $table->foreignIdFor(NodeFieldDefinition::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('node_types_node_field_definitions');
    }
}
