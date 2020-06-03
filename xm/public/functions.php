<?php 
// 定义各种函数工具

function redirect($msg, $url = '', $time = 3)
{
    // 显示提示信息
    echo '<h2 style="color:#ccc">'.$msg.'</h2>';

    // 判断url是否为空,为空则回到来源页面
    if ($url == '') {
        $url = $_SERVER['HTTP_REFERER'];
    }

    // 跳转到指定页面
    echo '<meta http-equiv="refresh" content="'.$time.';url='.$url.'">';
}


/**
 * [yzm 验证码]
 * @param  integer $width  [验证码宽度]
 * @param  integer $height [验证码高度]
 * @param  integer $type   [验证码字符类型]
 * @param  integer $length [验证码字符个数]
 * @return 返回验证码图片
 */
function yzm($width=100, $height=40, $type=1, $length=4)
{
    $img = imagecreatetruecolor($width, $height);
    //分配颜色,在外部生成两个函数 深色darkColor() 浅色lightColor()
    imagefill($img,0,0,lightColor($img));

    //画干扰点
    for ($i=0; $i < floor($width); $i++) { 
        $x = mt_rand(0,$width);
        $y = mt_rand(0,$height);
        imagesetpixel($img,$x,$y,darkColor($img));
    }

    //画干扰线
    for ($i=0; $i < floor($height/10); $i++) {
        $x1 = mt_rand(0,$width);
        $x2 = mt_rand(0,$width);
        $y1 = mt_rand(0,$height);
        $y2 = mt_rand(0,$height);
        imageline($img,$x1,$y1,$x2,$y2,darkColor($img));
    }
    $str = '1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
    // echo $str[61];
    switch ($type) {
        //纯数字
        case 1:$start = 0;$end = 9;break;
        //纯字母
        case 2:$start = 10;$end = 61;break;
        //混合型
        case 3:$start = 0;$end = 61;break;
    }
    $sjstr = '';
    for($i=0;$i<$length;$i++){
        $sj = mt_rand($start,$end);
        $sjstr .= substr($str,$sj,1);
    }
    // echo $sjstr;
    //将这个字串放入到SESSION中,将来会用到
    $_SESSION['vcode'] = $sjstr;

    //平均分配字符位置
    $w = floor($width / $length);//平均分配字符位置
    for ($i=0; $i < $length; $i++) { 
        $x = $w * $i + 5; //每个字符的位置
        $y = mt_rand( ceil($height/2), $height);
        imagettftext(
            $img,
            floor($width/8), //字体大小随着宽度而变化,越宽越大
            mt_rand(-20,20), //倾斜角度
            $x,$y, //写入位置
            darkColor($img), //字的颜色
            realpath('../public/font/'.mt_rand(1,3).'.ttf'),//随机字体
            $sjstr[$i] //每回写一个
        );
    }
 
    header("content-type:image/png");
    imagepng($img);
    imagedestroy($img);
}
//深色
function darkColor($img)
{
    return imagecolorallocate($img,mt_rand(0,100),mt_rand(0,100),mt_rand(0,100));
}
//浅色
function lightColor($img)
{
    return imagecolorallocate($img,mt_rand(200,255),mt_rand(200,255),mt_rand(200,255));
}







//getLevel()  转换管理员级别

function getLevel($type){
    switch ($type) {
        case '999':
            $grade="超级管理员";
            break;
        case '99':
            $grade="管理员";
            break;
        case '9':
            $grade="页面管理员";
            break;
    }
    return($grade);
}













/**
 * 处理文件上传
 * @param  string  $myfile 上传域的name值 (默认myfile)
 * @param  int     $size   允许上传文件的大小 (字节/默认10M)
 * @param  array   $type   允许上传的文件主类型 (image/text)
 * @param  string  $dir    文件保存目录 默认 ./uploads/
 * @return bool/string    返回false上传出错/返回文件名称
 */
function up($myfile = 'myfile', $size = 10485760, $type = ['image', 'text'], $dir = './uploads/')
{
    if (empty($_FILES)) {
        echo '可能设置错误!<br>清检查表单设置 或 检查 php.ini 里的 post 设置';
        return false;
    }

    // 获取上传信息
    $fileName = $_FILES[$myfile]['name'];
    $fileType = $_FILES[$myfile]['type'];
    $fileSize = $_FILES[$myfile]['size'];
    $fileError = $_FILES[$myfile]['error'];
    $fileTmp = $_FILES[$myfile]['tmp_name'];

    // 判断错误
    if ($fileError > 0) {
        echo '文件上传出错<br>';
        switch ($fileError) {
            case 1:
                echo '上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值';
                break;
            case 2:
                echo '上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值';
                break;
            case 3:
                echo '文件只有部分被上传';
                break;
            case 4:
                echo '没有文件被上传';
                break;
            case 6:
                echo '找不到临时文件夹';
                break;
            case 7:
                echo '文件写入失败';
                break;
        }
        return false;
    }

    // 自由限制文件大小
    if ($fileSize > $size) {
        echo '文件超过限制大小!';
        return false;
    }

    // 文件类型的限制
    list($mainType) = explode('/' ,$fileType);
    // 在调用的类型列表中 搜索指定的值
    if ( ! in_array($mainType, $type)) {
        echo '文件类型不合法!';
        return false;
    }

    // 生成保存的文件名
    // 先获取源文件后缀
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    // 生成新的文件名
    $saveName = date('Ymd'). uniqid() . '.' . $ext;
    // 保存路径
    $savePath = rtrim($dir, '/') . '/' . date('Y/m/d/');

    // 检测并生成目录
    if (!file_exists($savePath)) {
        mkdir($savePath, 0777, true);
    }
    // 拼接路径 + 文件名
    $saveFile = $savePath . $saveName;

    // 移动临时文件到指定的位置
    if (move_uploaded_file($fileTmp, $saveFile)) {
        // echo '上传成功!';
        return $saveName;
    } else {
        // echo '上传失败!!!';
        return false;
    }
}












/**
 * 获取图片路径信息
 * @param  string $url      根文件夹路径
 * @param  string $filename 图片名称
 * @return 获取完整路径
 */
function imgPath($url, $filename)
{
    $img_path = $url;
    $img_path .= substr($filename, 0, 4).'/';
    $img_path .= substr($filename, 4, 2).'/';
    $img_path .= substr($filename, 6, 2).'/';
    $img_path .= $filename;
    return $img_path;
}














/**
 * 生成唯一的订单号 20110809111259232312
 * 2011-年日期
 * 08-月份
 * 09-日期
 * 11-小时
 * 12-分
 * 59-秒
 * 2323-微秒
 * 12-随机值
 * @return string
 */
function ordernum() {
    list($usec, $sec) = explode(" ", microtime());
    $usec = substr(str_replace('0.', '', $usec), 0 ,4);
    $str  = rand(10,99);
    return date("YmdHis").$usec.$str;
}