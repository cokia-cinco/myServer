
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>小米手机原装配件-小米商城</title>
    <link href="<?=HOME_CSS?>goodslist.css" rel="stylesheet">
    <link rel="icon" href="<?=HOME_IMG?>logo.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?=HOME_IMG?>logo.ico" type="image/x-icon" />

    <style>
        body,ul,ol,dl,dd,h1,h2,h3,h4,h5,h6,div,p,fieldset{ margin: 0; padding: 0; }
        body{ font: 14px arial 微软雅黑; background: #fff; }
        li{list-style:none;}
        a{text-decoration: none;}
        table{border-collapse: collapse;}
        em{font-style:normal;}
        input{outline: none}
        li{list-style-type:none;}
        a{text-decoration:none;} 
        a:hover{
            color: #ff6700;
        }
        li{
            list-style-type:none;
        }
        
    </style>
</head>
<body>
<!--head页首开始-->
<?php $this->header() ?>


<div class="breadcrumbs">
    <div class="breadcrumbs-container">
        <span><a href="">首页</a> &gt; <a href="index.php?c=goods&a=allclass">所有商品</a> </span>
    </div>
</div>
<div class="container">
    <div class="filter-box">
        <div class="filter-list-wrap">
            <dl class="filter-list">
                <dt>分类：</dt>
                <?php foreach ($res as $key => $value): ?>
                    <dd><a style="color:#333" href="index.php?c=goods&a=class&pid=<?=$value['id']?>"><?=$value['cname']?></a></dd>
                <?php endforeach ?>
            </dl>
        </div>
    </div>
</div>



<div class="content">
    <div class="container">
        <div class="order-list-box">
            <ul class="order-list">
                <li style="border-left:none;padding-left: 0;">
                    <a style="color:#333" href="">推荐</a>
                </li>
                <li>
                    <a style="color:#333" href="">新品</a>
                </li>
                <li>
                    <a style="color:#333" href="">价格</a>
                </li>
                <li>
                    <a style="color:#333" href="">销量</a>
                </li>
            </ul>
            
        </div>  
        <div class="goods-list-box">
            <div class="goods-list">
                <?php foreach ($list as $key => $value): ?>
                    <div class="goods-item">
                    <div class="figure-img">
                        <a href="index.php?c=cart&a=shop&id=<?=$value['id']?>">
                            <img src="<?= imgPath(UPLOAD, $value['iname']) ?>" alt="">
                        </a>
                    </div>
                    <p class="desc"></p>
                    <h2 class="title"><a href=""><?=$value['gname']?></a></h2>
                    <p class="price"><?=$value['price']?>元</p>
                    <div class="thumbs">
                        <ul class="thumb-list">
                            <li>
                                <img src="<?= imgPath(UPLOAD, $value['iname'])?>" onmouseover="changesrc(this)" width="30">
                            </li>
                        </ul>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
            <div class="page">
                 <?php echo $page->show() ?> 
            </div>
        </div>
    </div>
    
</div>

    


<!--foot页脚开始-->
<?php $this->footer() ?>
        
<!-----------------------------------------------------------------------------------------------------------------------------                                                      页脚到此结束 ------------------------------------------------------------------------------------------------------------------------------>




</body>
</html>