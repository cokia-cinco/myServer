<?php  
class DB
{
    // 保存 PDO 的数据库操作对象
    private $link = null;
    // 保存操作的表名
    private $table = null;
    // 保存所有的字段
    private $fields;
    // 保存主键名称
    private $pk;
    // 保存要查询的字段
    private $keys;
    // 保存要查询的条件
    private $where;
    // 保存要排序的条件
    private $order;
    // 保存要分页的条件
    private $limit;
    // 保存要分组的条件
    private $group;
    // 保存要分组筛选的条件
    private $having;
    // 保存DB对象,静态属性
    private static $obj = null;
    public $sql;


    /**
     * 初始化 DB
     */
    private function __construct($table)
    {
        // 连接数据库的相关设置
        $this->connect();
        // 设置操作的表名
        $this->setTable($table);
        // 得到表的表结构
        $this->getField();
    }

    /**
     * 连接数据库 并保存数据库连接操作
     */
    protected function connect()
    {
        //PDO使用
        $this->link = new PDO(DSN,USER,PASS);
        //设置操作的字符集
        $this->link->query('set names utf8');
        //设置连接属性
        $this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);//报错
        $this->link->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);//关联数组
    }

    /**
     * 设置操作的数据表  并保存表名
     * @param  string $table 需要操作的表名
     */
    protected function settable($table)
    {
        $this->table = $table;
    }

    private function getfield()
    {
        // 查询表结构
        $sql = "desc `{$this->table}`";
        $list = $this->link->query($sql);
        // var_dump($list);
        
        // 遍历得到全部的字段名字
        $fields = [];
        foreach ($list as $val) {
            $fields[] = $val['Field'];
            // 获取主键, 并保存
            if ($val['Key'] == 'PRI') {
                $this->pk = $val['Field'];
            }
        }
        // 获取所有字段, 并保存
        $this->fields = $fields;
    }

    //查询多条数据
    public function select()
    {
        // 判断有无字段数据
        $keys = '*';
        if (!empty($this->keys)) {
            $keys = $this->keys;
            $this->keys = null;//每次清除查询条件
        }

        // 判断有无where条件
        $where = '';
        if (!empty($this->where)) {
            $where = 'where '.$this->where;
            $this->where = null;//每次清除查询条件
        }

        // 判断有无group条件
        $group = '';
        if (!empty($this->group)) {
            $group = 'group by '.$this->group;
            $this->group = null; // 每次清除查询条件
        }

        // 判断有无having条件
        $having = '';
        if (!empty($this->having)) {
            $having = 'having '.$this->having;
            $this->having = null; // 每次清除查询条件
        }

        // 判断有无order条件
        $order = '';
        if (!empty($this->order)) {
            $order = 'order by '.$this->order;
            $this->order = null;//每次清除查询条件
        }

        // 判断有无limit条件
        $limit = '';
        if (!empty($this->limit)) {
            $limit = 'limit '.$this->limit;
            $this->limit = null;//每次清除查询条件
        }

        //sql
        $sql = "select {$keys} from {$this->table} {$where} {$group} {$having} {$order} {$limit}";
        // var_dump($sql);
        $result = $this->query($sql);
        return $result;
    }

    /**
     * 查询单条数据
     * @param  mixed $findValue 指定要查询的值
     * @param  str $findKey   指定要查询的字段,无指定则默认主键
     * @return array / false
     */
    public function find($findValue, $findKey = null)
    {
        // 判断有无参2
        if ($findKey == null) {
            $findKey = $this->pk;
        }

        // 判断有无字段数据
        $keys = '*';
        if (!empty($this->keys)) {
            $keys = $this->keys;
            $this->keys = null;//每次清除查询条件
        }

        // sql 
        $sql = "select {$keys} from `{$this->table}` where `{$findKey}`='{$findValue}' limit 1";

        // 接收查询到的二维数组
        $data = $this->query($sql);
        // var_dump($data);
        
        // 判断结果是否为空,为空则返回false
        if (empty($data)) return false;

        // 返回的数据是二维数组,需要取指定的数据
        return $data[0];
    }
    /**
     * 新增
     * @param  array  $data 要插入的数据
     * @return 自增ID 或 false
     */
    public function insert($data = [])
    {
        // 判断 $data 的赋值,如果为空则使用$_POST里的值
        if (empty($data)) $data = $_POST;
        // var_dump($data);
        // die();
        
        // 筛选data中的数据
        foreach ($data as $k => $v) {
            if (in_array($k, $this->fields)) {
                $list[$k] = $v;
            }
        }
        // echo '<hr>';
        // var_dump($list);exit;

        // 生成SQL中的 aluekey 和 v 的值
        $keys = implode("`,`", array_keys($list));
        $values = implode("','", array_values($list));
        // var_dump($keys, $values);
        // die();
        
        // SQL
        $sql = "INSERT INTO `{$this->table}` (`{$keys}`) VALUES ('{$values}')";
        $this->sql = $sql;
        // 执行添加操作,并返回自增ID 或 false
        return $this->execute($sql);
    }

    /**
     * 删除指定的数据
     * @param  str $delValue 指定删除的字段值
     * @param  str $delKey   指定删除的字段条件
     * @return bool true/false
     */
    public function delete($delValue, $delKey = null)
    {
        // 判断有无参2
        if ($delKey == null) {
            $delKey = $this->pk;
        }
        // sql 
        $sql = "delete from `{$this->table}` where `{$delKey}`='{$delValue}'";

        // 执行返回结果
        return $this->execute($sql);
    }

    public function update($data = [])
    {
        //判断赋值
        if (empty($data)) $data = $_POST;

        // 筛选数据
        foreach ($data as $k => $v) {
            if (in_array($k, $this->fields) && ($k != $this->pk)) {
                $list[] = "`{$k}`='{$v}'";
            }
        }
        // var_dump($list);

        // 生成 set 条件
        $set = implode(',', $list);
        // var_dump($set);

        // sql
        $sql = "update `{$this->table}` set {$set} where `{$this->pk}`='{$data[$this->pk]}'";
        // var_dump($sql);
         // echo $sql;
         // die();
        
        // 执行sql
        return $this->execute($sql);
    }

    public function query($sql)
    {
        // var_dump($sql);
        $stmt = $this->link->query($sql);
        return $stmt->fetchAll();
    }

    public function execute($sql)
    {
        $result = $this->link->exec($sql);

        if ($result == 0) {
            //  增删改失败
            return false;
        } else {
            if ($this->link->lastInsertId() > 0) {
                // 新增成功, 返回自增ID
                return $this->link->lastInsertId();
            } else {
                // 删/改 成功
                return true;
            }
        }
    }






























/*####################################################查询因素######################################*/

    /**
     * 获取要查询的where条件,对象链操作
     * @param  str $where 查询的条件
     * @return $this
     */
    public function where($where)
    {
        // 设置要查询的条件,并保存为属性
        $this->where = $where;
        return $this;
    }

    /**
     * 获取要查询的分组条件,对象链操作
     * @param  str $group 分组的条件
     * @return $this
     */
    public function group($group)
    {
        // 设置要分组的条件,并保存为属性
        $this->group = $group;
        return $this;
    }

    /**
     * 获取要查询的分组筛选条件,对象链操作
     * @param  str $having 分组筛选的条件
     * @return $this
     */
    public function having($having)
    {
        // 判断有无分组条件, 无则直接返回 $this,不进行操作
        if (!isset($this->group)) {
            return $this;
        }
        // 设置要分组筛选的条件,并保存为属性
        $this->having = $having;
        return $this;
    }

    /**
     * 获取要查询的排序条件,对象链操作
     * @param  str $order 排序的条件
     * @return $this
     */
    public function order($order)
    {
        // 设置要排序的条件,并保存为属性
        $this->order = $order;
        return $this;
    }

    /**
     * 获取要查询的分页条件,对象链操作
     * @param  str $limit 分页的条件
     * @return $this
     */
    public function limit($limit)
    {
        // 设置要分页的条件,并保存为属性
        $this->limit = $limit;
        return $this;
    }
    
    /**
     * 获取要查询的字段,对象链操作
     * @param  arr $arr 以数组的形式,指定要查询的字段
     * @return $this
     */
    public function field($arr, $func = [])
    {
        // 判断参数 是否是数组
        if ( ! is_array($arr) ) {
            return $this;
        }

        // 检测传递的字段数据,将非法数据排除掉
        foreach ($arr as $key => $val) {
            // 如果字段名不在字段列表之中
            if ( ! in_array($val, $this->fields)) {
                // 则删除掉非法的字段
                unset($arr[$key]);
            }
        }

        // 如果处理完的数组结果为空,则直接返回自己
        if (empty($arr)) {
            return $this;
        }
        // var_dump($arr);
        
        // 生成字段条件,存为属性,以备后续调用
        $this->keys = implode(',', $arr);

        // 判断 有无参2,用于对象链传参
        if (!empty($func) && is_array($func)) {
            $this->keys = $this->keys . ',' . implode(',', $func);
        }

        // 返回自己,用于连贯操作
        return $this;
    }

/*####################################################查询因素结束######################################*/















    /**
     *  设置操作的表名,得到对象
     * @param  string $table 操作的表名
     * @return null
     */
    public static function table($table)
    {
        /* 
       // 单例
       if (self::$obj === null) {
            // 实例化 PDO 对象
            self::$obj = new self($table);
        }
        // 返回 PDO对象
        return self::$obj;*/

        // 非单例
        if (empty($table)) {
            // 不传递表名,不能操作DB对象
            return false;
        }
        // 实例化 PDO 对象
        self::$obj = new self($table);
        return self::$obj;
    }

    /**
     * 封装__clone,使其无法被复制
     * @return null
     */
    private function __clone()
    {
        // 该对象无法被复制
    }

}
?>