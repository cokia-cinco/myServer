<?php 

// 商品模型类
class GoodsModel
{
    private $db; // 保存DB对象

    public function __construct($table)
    {
        // 实例化DB
        $this->db = DB::table($table);
    }

    public function getAll($limit,$where2)
    {
        // SQL + 执行
        $sql = "
            SELECT g.id,g.istop, g.gname, g.price, g.stock, g.sale, g.is_new, g.state, c.cname, i.iname
            FROM `goods` AS g, `category` AS c, `image` AS i
            WHERE g.cate_id = c.id AND g.id = i.goods_id AND i.cover = '1'   $where2 limit $limit
        ";

        $list = $this->db->query($sql);
        return $list;
        // return $this->db->select();
    }

    public function doAdd()
    {
        // var_dump($_FILES);
        // die();
        // var_dump($_POST);
        // die();
        #获得输入值
        $name=$_POST['gname'];
        $cate_id=$_POST['cate_id'];
        $price=$_POST['price'];
        $slogan=$_POST['slogan'];
        $original_cost=$_POST['original_cost'];
        // $image=$_POST['goodsIMG'];
        $stock=$_POST['stock'];



        
        $istop=intval(@$_POST['istop']);
        $msg=$_POST['msg'];

        #判断有效性
        if($name==""){
            echo "<script>alert('产品名称不能为空');history.go(-1);</script>";
            die ();
        }
        // if($_FILES==""){
        //  echo "<script>alert('产品图片不能为空');history.go(-1);</script>";
        //  die ();
        // }
        if($price==""){
            echo "<script>alert('产品价格不能为空');history.go(-1);</script>";
            die ();
        }
        if($stock==""){
            echo "<script>alert('产品库存不能为空');history.go(-1);</script>";
            die ();
        }
        $stock = intval($stock);
        if(!is_int($stock)){
            echo "<script>alert('请输入整数的库存');history.go(-1);</script>";
            die ();
        }

        // 1. 上传图片,图片处理成功后,得到图片名称
        $saveName = up('goodsIMG', 10485760, ['image'], UPLOAD);
        // var_dump($saveName);
        // die();
        // 如果上传失败,则返回上级页面
        // 如果上传成功,则得到图片名
        if (!$saveName) {
            redirect('上传图片失败!');
            exit;
        }

        // 2. 商品的信息 写入商品表
        // 其他商品的数据验证  自己玩
        $_POST['msg'] = htmlentities($_POST['msg']);

        $id = $this->db->insert();
        // var_dump(DB::table('image'));die;
        // var_dump($id);
        // die;
        // 商品写入成功,得到商品的自增ID
        if ($id > 0) {
            $goodsID = $id;
            // 3. 将图片信息 写入图片表  (需要图片名/商品ID)
            $arr = [
                'iname' => $saveName,
                'goods_id' => $goodsID,
                'cover' => 1,
            ];
            // var_dump($arr);
            // die();

            // 写入图片信息
            // var_dump(DB::table('image'));
            $imgID = DB::table('image')->insert($arr);
            // var_dump($imgID);
            // die();
            if (!$imgID) {
                // 图片表写入失败
                //      删除上传好的图片
                $savePath = imgPath(UPLOAD, $saveName);
                // var_dump($savePath);
                @unlink($savePath);
                //      删除商品表里刚刚插入的新商品
                $this->GM->delete($goodsID);
                redirect('商品图片插入失败,请重新选择合适的图片 + 商品','', 999);
                exit;
            }
            // 图片写入成功
            // redirect('商品及图片写入完成', 'index.php?c=goods');
            // END ... 商品添加完成
        } else {
            // 商品写入失败
            // 删除上传的图片
            $savePath = imgPath(UPLOAD, $saveName);
            // var_dump($savePath);
            @unlink($savePath);
            // redirect('商品写入失败,请重试!','',999);
            // exit;
        }
        return $id;


 
    }



    public function getOne()
    {
        $id = $_GET['id'];
        // var_dump($this->db->find($id));
        // die();
        return $this->db->find($id);
    }




    public function doEdit()
    {
        $data = $_POST;
        // var_dump($data);
        // die();
        
        
        // 编辑用户
        $result = $this->db->update($data);
        return $result;
    }

    public function isTop()
    {
        $v=$_GET['v'];
        $id=$_GET['id'];
        // var_dump($v,$id);
        // die();
        $data=array('istop'=>$v,'id'=>$id);
        $result= $this->db->update($data);
        return $result;
        // var_dump($result);
        // die();
    }

    public function editImg()
    {
        $goods_id = $_GET['goods_id'];
        // var_dump($goods_id);
        
        // 查出该商品中的所有图片
        $list = DB::table('image')
            ->where("goods_id = '{$goods_id}'")
            ->select();
        // var_dump($list);
        return $list;

    }

    public function getGname($goods_id)
    {
        $row = $this->db->field('gname')->find($goods_id);
        return $row['gname'];
    }

    public function cover()
    {
        // 接收商品ID
        $goods_id = $_GET['goods_id'];
        // 接收图片ID
        $image_id = $_GET['image_id'];

        // $v=$_GET['v'];
        // $id=$_GET['id'];
        // var_dump($v,$id);
        // die();
        
        // 将该商品的所有的图片的 cover 设置为0
        $sql = "UPDATE `image` SET `cover`='0' WHERE `goods_id`='{$goods_id}'";
        DB::table('image')->execute($sql);
    
        
        // 把当前图片的cover 设置为 1 
        $arr = [
            'id' => $image_id,
            'cover' => 1
        ];
        DB::table('image')->update($arr);

        // header('location:'.$_SERVER['HTTP_REFERER']);
    }

    public function addimg()
    {
        // 获取商品ID
        $goods_id = $_POST['goods_id'];
        // var_dump($goods_id);
        // die();
        
        // 上传图片
        $saveName = up('goodsIMG', 10485760, ['image'], UPLOAD);
        // 成功 图片名
        // 失败 回去重新做
        if (!$saveName) {
            redirect('上传图片失败.请重试!');
            exit;
        }

        // 收集图片数据, 此图不是第一张图片,所以必须是非封面
        $arr = [
            'iname' => $saveName,
            'goods_id' => $goods_id,
            'cover' => 0
        ];

        return $imgID = DB::table('image')->insert($arr);
    }

    public function delImg()
    {
        $id = $_GET['id'];
        $row = DB::table('image')
            ->field(['iname','cover'])
            ->where("id = '{$id}'")
            ->select();
        // var_dump($row);
        
        $filename = $row[0]['iname'];
        $cover = $row[0]['cover'];

        // 判断 是否是封面图
        if ($cover == 1) {
            echo "<script>alert('封面图不能进行删除');history.go(-1);</script>";
            exit;
        }

        // 判断是否删除了数据
        $result = DB::table('image')->delete($id);
        if ($result) {
            // 获取图片路径
            $img_path = imgPath(UPLOAD, $filename);
            @unlink($img_path);  
        } 

        return $result;
        
    }

    public function doState()
    {
        $id = $_GET['id'];
        $state = $_GET['state'];
        // var_dump($id,$state);
        // die();
        if ($state==0) {
            $state=1;
        } else {
           $state=0;
        }
        

        $arr = [
            'id' => $id,
            'state' => $state
        ];
        return $this->db->update($arr);
    }


    public function getCount($where1)
    {
        if ($where1 === null) {
            $row = $this->db
                ->field(['id'],['count(id) AS total'])
                ->select();
        } else {
            $row = $this->db
                ->field(['id'],['count(id) AS total'])
                ->where($where1)
                ->select();
        }
        
        return $row[0]['total'];
    }


  













}

?>