<?php
/**
 * 读取配置文件参数
 */
if(!function_exists('ini')){
  function ini($keys, $def=''){
      static $config = [];
      if (!$config) {
        $config = @parse_ini_file(base_path().'/.env',true) ?? [];
      }
      @[$one,$two] = explode('.', $keys);
      @[$one=>[$two=>$value]] = $config;
      return $value ?? $def;
  }
}