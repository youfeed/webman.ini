# Youloge.ini Webman 配置文件读取插件

> 其实代码只有几行，但是如果你写在`app/functions.php`配置文件无法使用，如果你写在`support/helpers.php`里面是有效的但是你项目`composer update`会被重置，建议老大给这个函数变成内置


#### 使用

- 根目录增加一个 `.env`配置文件
- 以下保留字不得用作 env文件的键：null、yes、no、true、false、on、off、none。此外，密钥中不得使用以下保留字符：{}|&~!()^"。
```
[MYSQL]
HOST=127.0.0.1
...
[REDIS]
HOST=127.0.0.1
...
```

> 在`config/database.php`  HOST=>ini('MYSQL.HOST','127.0.0.1'); // 读取配置文件 如果未找到则返回 `127.0.0.1`