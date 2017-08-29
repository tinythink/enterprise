## 需求

仿造地址：http://www.yixinss.com/

详细需求
http://note.youdao.com/noteshare?id=6fc8683e1eb513ea1e3270bd817f317b&sub=E298BF9BE3804D699140AF990F67C0B7

## 技术选型

思考了很多的技术选型和架构设计，最终选择了服务器端渲染和API服务公用的形式去开发，
服务器采用Php7.x分支的laravel5.4框架 + mysql5.7 + web端 + APP（React Native）

## 环境依赖
### windows下建议安装[phpstudy](http://www.phpstudy.net/phpstudy/phpStudy20161103.zip)集成环境
已经内置了php各种版本，apache,nginx,mysql等需要的软件

- 使用php7.0需要安装VC14
链接：http://pan.baidu.com/s/1kV9Ojrh 密码：dq3m

- 打开phpstudy 配置php扩展 打开openssl扩展，重启Phptudy。

### mac下使用 lavravel推荐的环境
- 参考mac下配置Php7.0 + mysql

- 或者[参考laravel官方环境配置文档](http://laravelacademy.org/post/6665.html)

### 需要composer安装依赖
[composer下载](https://getcomposer.org/download/)


## 代码资源

- [Gitlab克隆代码](https://github.com/tinythink/enterprise.git)

- 代码clone下来后

- 进入代码主目录： 

    composer install

- 复制的env配置文件

    `cp .env.examples .env`

- 然后执行 

    `php artisan key:generate
`
- 修改配置文件 配置数据库用户名、密码、项目名称、缓存等配置

	`在.env文件内修改`
	
- 数据迁移
```php
php artisan migrate
```
- 填充数据
	`php artisan db:seed`
启动本地服务 `php artisan serve`  如果没有报错然后再浏览器端 访问` 127.0.0.1:8000`
