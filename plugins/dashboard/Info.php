<?php

return [
    'name'          =>  'Dashboard',
    'description'   =>  'Akses cepat pada modul dan berita.',
    'author'        =>  '',
    'version'       =>  '1.1',
    'compatibility' =>  '4.0.*',
    'icon'          =>  'home',
    'pages'         =>  ['Main' => 'main'] ,
    'install'       =>  function () use ($core) {
    },
    'uninstall'     =>  function() use($core)
    {
    }
];
