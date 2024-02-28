<?php
/**
 * 读取配置文件参数
 * `ini(null)`返回全部配置 
 * `ini('MYSQL','默认值')` 返回一级配置[数组]
 * `ini('MYSQL.HOST')` 返回三级配置[字符串]
 */
if(!function_exists('ini')){
  function ini($keys, $def=''){
    static $config = [];
    if (!$config) {
      $config = @parse_ini_file(base_path().'/.env',true) ?? [];
    }
    if($keys === null){
      return $config;
    }
    @[$one,$two] = explode('.', $keys);
    @[$one=>$item] = $config;
    return $two === null ? $item ?? $def : $item[$two] ?? $def;
  }
}