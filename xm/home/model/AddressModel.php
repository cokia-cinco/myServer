<?php  
class AddressModel
{
    private $db; // 保存DB对象

    public function __construct($table)
    {
        // 实例化DB
        $this->db = DB::table($table);
    }

    public function getAll()
    {
        $uid = $_SESSION['home']['id'];
        $where = "`user_id`='$uid'";
        // var_dump($uid);
        // die();
        return $this->db
        ->where($where)
        ->select();
    }

    public function addaddress()
    {
        $data = $_POST;
        // var_dump($data);
        // die();
        $postcode = (int)$data['postcode'];

        // 手机号 格式是否正确
        $phone = $_POST['phone'];
        $preg = '/^1[3456789]\d{9}$/';
        if (!preg_match($preg, $phone)) {
            echo "<script>alert('请输入有效11位的手机号码！');history.go(-1);</script>";
            // redirect('请输入有效11位的手机号码');
            die();
        }

        if (!is_int($postcode)) {
            echo "<script>alert('请输入正确的6位邮编号码');history.go(-1);</script>";
            die();
        }

        if (strlen($data['postcode'])!=6) {
            echo "<script>alert('请输入正确的6位邮编号码');history.go(-1);</script>";
            die();
        } else {
            # code...
        }
        

        
        $data['user_id'] = $_SESSION['home']['id'];
        // var_dump($data);
        
        return $this->db->insert($data);
    }

    public function getOne()
    {
        $id = $_GET['id'];
        return $this->db->find($id);
    }

    public function editaddress()
    {
        $data = $_POST;
        // 各种验证...
        
        // 编辑用户
        $result = $this->db->update($data);
        return $result;
    }

    public function del($id)
    {
        return $this->db->delete($id);
    }












}