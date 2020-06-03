<?php 

//  分类模型类
class CategoryModel
{
    private $db; // 保存DB对象

    public function __construct($table)
    {
        // 实例化DB
        $this->db = DB::table($table);
    }

    public function doAdd()
    {
        // var_dump($_POST);
        $name = $_POST['cname'];
        $pid = $_POST['pid'];
        $path = $_POST['path'];
        $display = $_POST['display'];
        // 判断分类名是否为空
        if (empty($name)) {
            redirect('分类名不能为空!');
            exit;
        }
        return $this->db->insert();
    }

    public function doMaxadd()
    {
        // var_dump($_POST);
        $name = $_POST['cname'];
        $pid = $_POST['pid'];
        $path = $_POST['path'];
        $display = $_POST['display'];
        // 判断分类名是否为空
        if (empty($name)) {
            redirect('分类名不能为空!');
            exit;
        }
        return $this->db->insert();
    }

    public function doDel($id)
    {
        return $this->db->delete($id);
    }

    public function doDisplay($arr)
    {
        $row = $this->db->update($arr);
        return $row;
    }

    public function getAll($pid,$limit,$where)
    {
        
        $where =  "pid = ' {$pid}'".$where;
        // var_dump($where);
        // die;
        $row = $this->db
            ->where($where)
            ->limit($limit)
            ->select();
        return $row;
    }

    public function getPname($pid)
    {
        return $this->db
            ->field(['cname'])
            ->find($pid, 'id');
    }

    public function getPPID($pid)
    {
        $row = $this->db
            ->field(['pid'])
            ->find($pid, 'id');
        return $row['pid']; // 爷爷的ID
    }

    public function getChild($cons)
    {
        $row = $this->db
            ->field(['id'])
            ->where("path like '{$cons}%'")
            ->select();
        return $row;
    }

    public function getOne()
    {   
        $id = $_GET['pid'];
        return $this->db->find($id);
    }

    public function doEdit()
    {
        $data = $_POST;
        // var_dump($data);
        // die;
        // 各种验证...
        
        // 编辑用户
        $result = $this->db->update($data);
        return $result;
    }

    public function getCount($where,$pid)
    {
        if ($where === null) {
            $row = $this->db
                ->field(['id'],['count(id) AS total'])
                ->where("pid={$pid}")
                ->select();
        } else {
            $row = $this->db
                ->field(['id'],['count(id) AS total'])
                ->where("pid={$pid}".$where)
                ->select();
        }
        
        return $row[0]['total'];
    }
















}


