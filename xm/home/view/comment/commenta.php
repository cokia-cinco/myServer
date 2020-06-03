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
             <a href="">概述</a>
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
                        
                        <?php foreach ($result as $key => $value): ?>
                            <li class="com-item">
                            <a class="user-img" href="">
                                <img src="<?=HOME_IMG?>comment/tx1.jpg" alt="">
                            </a>
                            <div class="comment-info">
                                <a href="">有波</a>
                                <p><?=date("Y年m月d日 H:i:s",$value['createtime'])?></p>
                                
                            </div>
                            <!-- <div class="comment-eval">
                                <img src="img/comment/xl.png" alt="">
                                超爱
                            </div> -->
                            <div class="comment-txt">
                                <a href="" target="_blank"><?=$value['msg']?></a>
                            </div>
                            <!-- <div class="m-img-list">
                                <div class="img-item item-one">
                                    <img src="img/comment/zp1.jpg" alt="" style="width: 330px;margin-top: -192.5">
                                </div>
                            </div> -->
                            <!-- <div class="comment-handler">
                                <a href="">
                                    <img src="img/comment/z.png" alt="">
                                </a>
                            </div> -->
                            <div class="comment-input">
                                <input class="comment" type="text" placeholder="回复楼主">
                                <a class="answer-btn" href="">回复</a>
                            </div>
                            <!-- <div class="comment-answer">
                                <div class="answer-item">
                                    <img class="answer-img" src="img/comment/logo.png" alt="">
                                    <div class="answer-content">
                                        <h3>官方回复</h3>
                                        <p>圆圆的月亮，圆圆的饼，中秋佳节等着你，美好的祝福，美好的心，美好情意滋润你。米祝你中秋节快乐。感谢您对小米的支持。
                                            <a href="">
                                                <img src="img/comment/z.png" alt="">
                                            </a>
                                        </p>
                                    </div>
                                    
                                </div>
                                
                            </div> -->
                            
                        </li><!--一个评论结束-->
                        <?php endforeach ?>
                        
                    </ul>
                    <div class="comment-more">
                        <a href="">加载更多</a>
                    </div>
                    
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
                        <p class="percent" style="width: 95.9%">满意度95.9%</p>
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