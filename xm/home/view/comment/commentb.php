<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>【小米CC9怎么样，好不好】用户评价-小米商城</title>
    <link href="<?=HOME_CSS?>commenta.css" rel="stylesheet">
    <link rel="icon" href="/logo.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/logo.ico" type="image/x-icon" />
</head>
<body>
    <!--head页首开始-->
<?php $this->header() ?>

<div class="xm-product-box">
    

    <div class="nav-bar-container">
        <h2>小米CC9</h2>

        <div class="nav-bar-container-left">
            <span>丨</span>
             <a href="">小米CC9e</a>
            <span>丨</span>
             <a href="">小米CC9 美图定制版</a>
        </div>

        <div class="bar-container-right">
             <a href="index.php?c=goods&a=index&id=<?=$id?>">概述</a>
            <span>|</span>
             <a href="">参数</a>
            <span>|</span>
             <a href="">F码通道</a>
            <span>|</span>
             <a href="index.php?c=goods&a=comment&id=<?=$gid?>">用户评价</a>
            <a class="btn-small" href="index.php?c=cart&a=shop&id=<?=$gid?>">立即购买</a>
        </div>
        
    </div><!--nav-bar-container结束-->
</div>


<!--评论内容开始-->
<div class="m-comment-wrap">
    <div class="m-comment-wrap-container">
        <div class="m-comment-nav">
            <h2>大家认为</h2>
            <div class="nav-box">
                <a class="item cur" href="">全部
                    <?php if (!empty($result1)): ?>
                        <?php echo '('.$result1.')';  ?>
                    <?php endif ?>
                </a>
                <a class="item" href="">非常喜欢
                    <?php if (!empty($result1)): ?>
                        <?php echo '('.$result1.')';  ?>
                    <?php endif ?>

                </a>
                <a class="item" href="">拍照好</a>
                <a class="item" href="">效果很好</a>
                <a class="item" href="">手感很棒</a>
                <a class="item" href="">服务周到</a>
                
            </div>
            
        </div><!--m-comment-nav-->
        <div class="row">
            <!--左边评论内容-->
            <div class="h-comment-main">
                <div class="comment-top">
                    <h2>热门评价</h2>
                    <a href="">
                        <div></div>
                        只显示带图评价
                    </a>
                    
                </div>
                <div class="m-ccomment-box">
                    <ul>
                        暂无评论
                        
                    </ul>
                    
                    
                </div>
                
            </div>

            <!--右边内容-->
            <div class="h-comment-fr">
                <div class="m-comment-summary">
                    <div class="num">
                        <p class="percent-num">
                            <span class="m-num"><?=$result1?></span>人购买后满意
                        </p>
                        
                    </div>
                    <div class="m-percent-box">
                        <p class="percent" style="width: 0%">满意度95.9%</p>
                    </div>
                    
                </div>
            </div>
            
        </div>
        
    </div>
    
</div><!--m-comment-wra结束（评论内容）-->

<!--foot页脚开始-->
<?php $this->footer() ?>
        
<!-----------------------------------------------------------------------------------------------------------------------------                                                      页脚到此结束 ------------------------------------------------------------------------------------------------------------------------------>
    
</body>
</html>