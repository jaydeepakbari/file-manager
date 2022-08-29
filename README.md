# File manager
File Manager is a wonderful widget that allows you to manage images and folders, pick images and folders, and do a lot more.

![Preview](https://i.postimg.cc/0NG0bsv8/filemanager.png)

## Usage/Examples
```html
<div class="file-upload btn-file">
    <div class="file">
        <img src="https://via.placeholder.com/100x100?text=No%20Image">
    </div>
    <div class="tools"></div>
</div>
```

```javascript
$(".btn-file").fileManager({
    callback:function(files,el) {
        if(files.href){
            $(el).find("img").attr("src",files.href)
        } else {
            $(el).find("img").attr("src","https://via.placeholder.com/100x100?text=No%20Image")
        }
    }
});
```

## 🛠 Skills
PHP, Javascript, HTML, CSS...

## Features
- Choose single file
- Choose multiple files
- Delete files
- Create multiple files