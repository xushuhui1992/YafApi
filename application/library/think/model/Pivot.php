<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2017 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

namespace think\model;

use think\Think;

class Pivot extends Think
{

    /** @var Think */
    public $parent;

    protected $autoWriteTimestamp = false;

    /**
     * 架构函数
     * @access public
     * @param Think         $parent 上级模型
     * @param array|object  $data 数据
     * @param string        $table 中间数据表名
     */
    public function __construct(Think $parent = null, $data = [], $table = '')
    {
        $this->parent = $parent;

        if (is_null($this->name)) {
            $this->name = $table;
        }

        parent::__construct($data);

        // 当前类名
        $this->class = $this->name;
    }

}
