<?php

function upload () {
  if (!isset($_FILES['avatar'])) {
    $GLOBALS['message'] = '请选择文件';
    // 客户端提交的表单内容中没有文件域
    return;
  }

  $avatar = $_FILES['avatar'];
  // $avatar =>array(5) {
  //   ["name"]=> string(11) "icon-02.png"
  //   ["type"]=> string(9) "image/png"
  //   ["tmp_name"]=> string(27) "C:\Windows\Temp\phpC516.tmp"
  //   ["error"]=> int(0)
  //   ["size"]=> int(4398)
  // }
  if ($avatar['error'] !== UPLOAD_ERR_OK) {
    // 服务端没有接收到上传的文件
    $GLOBALS['message'] = '上传失败';
    return;
  }

  //接收到了文件

  //将文件从临时目录( ["tmp_name"]="C:\Windows\Temp\phpC516.tmp")移动到网站范围之内
  $source = $avatar['tmp_name'];
  //文件存放路径(目标路径),移动的目标路径中文件夹一定是一个已经存在的目录
  $target = './uploads/' . $avatar['name'];
  $moved = move_uploaded_file($source, $target);

  if (!$moved) {
    $GLOBALS['message'] = '上传失败';
    return;
  }
  // 移动成功（上传整个过程成功）
  $GLOBALS['message'] = '上传成功';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  upload();
  var_dump($_FILES['avatar']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>文件上传</title>
</head>
<body>
  <!-- 如果一个表单中有文件域(文件上传),必须将表单的method设置为post,enctype设置为multipart/form-data -->
  <!-- enctype默认是urlencoded格式(key1=value1) -->
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="avatar">
    <button>上传</button>
    <?php if (isset($message)): ?>
    <p style="color: hotred"><?php echo $message; ?></p>
    <?php endif ?>
  </form>
</body>
</html>
