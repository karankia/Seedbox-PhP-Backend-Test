<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServerInvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('server_invs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Auth_Token')->default('--No Token yet--');
            $table->string('COMSPEC')->default('')->default('C:Windowssystem32cmd.exe');
            $table->string('CONTEXT_DOCUMENT_ROOT')->default('C:/xampp/htdocs');
            $table->string('CONTEXT_PREFIX')->default('');
            $table->string('DOCUMENT_ROOT')->default('');
            $table->string('GATEWAY_INTERFACE')->default('CGI/1.1');
            $table->string('HTTP_ACCEPT')->default('');
            $table->string('HTTP_ACCEPT_ENCODING')->default('');
            $table->string('HTTP_ACCEPT_LANGUAGE')->default('');
            $table->string('HTTP_CONNECTION')->default('');
            $table->string('HTTP_HOST')->default('localhost');
            $table->string('HTTP_UPGRADE_INSECURE_REQUESTS')->default('');
            $table->string('MIBDIRS')->default('');
            $table->string('PATH')->default('');
            $table->string('PHPRC')->default('');
            $table->string('PHP_PEAR_SYSCONF_DIR')->default('');
            $table->string('PHP_SELF')->default('');
            $table->string('QUERY_STRING')->default('');
            $table->string('REMOTE_ADDR')->default('');
            $table->string('REMOTE_PORT')->default('56604');
            $table->string('REQUEST_METHOD')->default('');
            $table->string('REQUEST_SCHEME')->default('');
            $table->string('REQUEST_TIME')->default('1560109549');
            $table->string('REQUEST_TIME_FLOAT')->default('1560110000');
            $table->string('REQUEST_URI')->default('');
            $table->string('SCRIPT_FILENAME')->default('');
            $table->string('SCRIPT_NAME')->default('');
            $table->string('SERVER_ADDR')->default('');
            $table->string('SERVER_ADMIN')->default('postmaster@localhost');
            $table->string('SERVER_NAME')->default('localhost');
            $table->string('SERVER_PORT')->default('80');
            $table->string('SERVER_PROTOCOL')->default('');
            $table->string('SERVER_SIGNATURE')->default('');
            $table->string('SERVER_SOFTWARE')->default('Apache/2.4.39 (Win64) OpenSSL/1.0.2s PHP/7.1.30');
            $table->string('status')->default('');
            $table->string('System_Root')->default('');
            $table->string('TMP')->default('');
            $table->string('WINDIR')->default('');
            $table->string('HTTP_USER_AGENT')->default('');
            $table->string('HTTP_REFERER')->default('');
            $table->string('HTTP_CACHE_CONTROL')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('server_invs');
    }
}
