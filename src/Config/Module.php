<?php

namespace Soon\Config;

class Module
{
    public static function pkgProperties(): array
    {
        $data['menuGroup'] = ['code'=>'group', 'name'=>'Group Name','icon'=>'','uri'=>''];
        $data['menuItem'] = ['code'=>'group', 'name'=>'Group Name','icon'=>'','uri'=>''];
        $data['admin'] = '';
        return $data;
    }
}
