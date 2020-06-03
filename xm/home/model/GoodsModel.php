<?php  
class GoodsModel
{
    private $db; // 保存DB对象

    public function __construct($table)
    { 
        // 实例化DB
        $this->db = DB::table($table);
    }
 
    public function getAllclass($limit, $where2)
    {
        $sql = "
            SELECT I.iname, G.id, G.gname, G.price, G.like, G.sale
            FROM goods G, image I
            WHERE I.goods_id = G.id AND I.cover = 1 AND G.state = 1 $where2   LIMIT $limit
        ";
        // var_dump($sql);
        // die();
        return $this->db->query($sql);
    }

    public function getCount($where1)
    {
        if ($where1 == null) {
            // $sql = "select id,count(id) AS total from goods $where";
            // return $this->db->query($sql);

            $row = $this->db
                ->field(['id'],['count(id) AS total'])
                ->select();
        } else {
            //  $sql = "select id,count(id) AS total from goods $where1";
            // $row = $this->db->query($sql);
            $row = $this->db
                ->field(['id'],['count(id) AS total'])
                ->where($where1)
                ->select();
        }
        
        return $row[0]['total'];
    }
























}