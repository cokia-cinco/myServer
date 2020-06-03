<?php 

/**
 * 分页类
 * date 2019-10-18
 * author s90
 */

class Page
{
    protected $total; // 总条数
    protected $num; // 每页显示数
    protected $allPage; // 总页数
    protected $url; // URL路径
    protected $page; // 页码


    public function __construct($total, $num = 10, $Cname='user', $Aname='index',$pid='0')
    {
        $this->total = $total;// 总条数
        $this->num = $num;// 每页显示数
        $this->getAllPage(); // 计算总页数
        $this->pid = $pid;
        $this->getUrl($Cname, $Aname,$pid);
        $this->getPage();
    }


    // 计算总页数
    protected function getAllPage()
    {
        $this->allPage = ceil($this->total / $this->num);
        if ($this->allPage == 0) {
            $this->allPage = 1;
        }
    }

    // 获取当前的URL路径
    protected function getUrl($Cname, $Aname,$pid)
    {
        $this->url = $_SERVER['PHP_SELF'] . '?c='.$Cname.'&a='.$Aname.'&pid='.$pid;
    }

    // 获取当前页码
    protected function getPage()
    {
        $page = empty($_GET['p'])?1:$_GET['p'];
        // 判断范围
        $page = max($page, 1);
        $page = min($this->allPage, $page);

        $this->page = $page;
    }

    // 生成分页的HTML代码
    public function show()
    {
        if (!empty($_GET['n'])) {
            // 获取搜索条件
            $pms = '&n='.$_GET['n'];
        } else {
            $pms = '';
        }

        $html = '共'.$this->total.'条，';
        $html .= '当前'.$this->page. '/'. $this->allPage.'页';
        $html .= '&nbsp; | &nbsp;';

        $html .= '<a href="'.$this->url.'&p=1'.$pms.'">首页</a>';
        $html .= '&nbsp; | &nbsp;';

        $html .= '<a href="'.$this->url.'&p='.($this->page - 1 ).$pms.'">上一页</a>';
        $html .= '&nbsp; | &nbsp;';

        $html .= '<a href="'.$this->url.'&p='.($this->page + 1 ).$pms.'">下一页</a>';
        $html .= '&nbsp; | &nbsp;';

        $html .= '<a href="'.$this->url.'&p='.$this->allPage.$pms.'">尾页</a>';
        $html .= '&nbsp; | &nbsp;';
        
        return $html;
    }

    public function limit()
    {
        // (当前页 - 1) * 每页显示数
        $limit = (($this->page - 1) * $this->num) .','.$this->num;
        return $limit;
    }


}


