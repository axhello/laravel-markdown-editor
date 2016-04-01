# laravel-markdown-editor
一个基于 laravel 5 的markdown 编辑器

本项目基于 [editor.md](https://github.com/pandao/editor.md/) 二次开发完成

#使用详细教程
Editor.md: https://pandao.github.io/editor.md/

#Installation

1.在 composer.json 的 require里 加入

```
"axhello/laravel-markdown-editor": "dev-master"
```
2.执行 composer update

3.在config/app.php 的 providers 数组加入一条

```
'Axhello\Editor\MDEditorServiceProvider::class'
```
4.在config/app.php 的 aliases 数组加入一条

```
'MDEditor' => Axhello\Editor\Facade\MDEditorFacade::class,
```
5.执行 php artisan vendor:publish

执行完上面的命令后，会生成配置文件和视图文件到你的 config/ 和 views/vendor 目录

#Usage
1.在需要编辑器的地方插入以下代码

首先引入head代码

```
@include('editor::head')
```
然后用一个id为`mdEditor`的标签包裹着textarea

```
<div id="mdEditor">
	{!! Form::textarea('content', '', ['class' => 'form-control') !!}
</div>

//或者是这样

<div id="mdEditor">
	 <textarea></textarea>
</div>

```

然后刷新页面，这时候编辑器就出来了！

2.配置图片上传，打开config/editor.php 配置文件，修改里面的 uploadUrl 配置项

例如我更改editor.php的Url为

```
'uploadUrl'=>'post/uploads'
```

然后在路由中配置Url,注意`uploads`为你 public 下的目录

```
Route::post('/post/uploads', function (){
    $data = \Axhello\Editor\MdEditor::uploadImgFile('uploads');
    return json_encode($data);
});
```

**完成以上这些配置，你就可以在线插入图片啦**