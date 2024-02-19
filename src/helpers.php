<?php
/**
 * 读取配置文件参数
 */
if(!function_exists('ini')){
  function ini($keys, $def='') : string
  {
      static $config = [];
      if (!$config) {
        try {
          $config = parse_ini_file(base_path().'/.env',true);
        } catch (\Throwable $th) {
          $config = [];
        }
      }
      @[$one,$two] = explode('.', $keys);
      @[$one=>[$two=>$value]] = $config;
      return $value ?? $def;
  }
}