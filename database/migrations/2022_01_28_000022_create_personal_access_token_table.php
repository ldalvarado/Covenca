<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalAccessTokenTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'personal_access_tokens';

    /**
     * Run the migrations.
     * @table personal_access_tokens
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable($this->tableName)){
            Schema::create($this->tableName, function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->bigIncrements('id');
                $table->string('tokenable_type', 191);
                $table->unsignedBigInteger('tokenable_id');
                $table->string('name', 191);
                $table->string('token', 64);
                $table->text('abilities')->nullable()->default(null);
                $table->timestamp('last_used_at')->nullable()->default(null);
    
                $table->unique(["token"]);
    
                $table->index(["tokenable_type", "tokenable_id"], 'personal_access_tokens_tokenable_type_tokenable_id_index');
                $table->nullableTimestamps();
            });
    
        }
            }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
