<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServerInv extends Model
{
    protected $fillable = ['Auth_Token',
        'COMSPEC',
        'CONTEXT_DOCUMENT_ROOT',
        'CONTEXT_PREFIX',
        'DOCUMENT_ROOT',
        'GATEWAY_INTERFACE',
        'HTTP_ACCEPT',
        'HTTP_ACCEPT_ENCODING',
        'HTTP_ACCEPT_LANGUAGE',
        'HTTP_CACHE_CONTROL',
        'HTTP_CONNECTION',
        'HTTP_HOST',
        'HTTP_REFERER',
        'HTTP_UPGRADE_INSECURE_REQUESTS',
        'HTTP_USER_AGENT',
        'MIBDIRS',
        'PATH',
        'PHPRC',
        'PHP_PEAR_SYSCONF_DIR',
        'PHP_SELF',
        'QUERY_STRING',
        'REMOTE_ADDR',
        'REMOTE_PORT',
        'REQUEST_METHOD',
        'REQUEST_SCHEME',
        'REQUEST_TIME',
        'REQUEST_TIME_FLOAT',
        'REQUEST_URI',
        'SCRIPT_FILENAME',
        'SCRIPT_NAME',
        'SERVER_ADDR',
        'SERVER_ADMIN',
        'SERVER_NAME',
        'SERVER_PORT',
        'SERVER_PROTOCOL',
        'SERVER_SIGNATURE',
        'SERVER_SOFTWARE',
        'status',
        'System_Root',
        'TMP',
        'WINDIR'];
}

