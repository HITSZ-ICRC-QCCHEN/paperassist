<?php
/**
 * Created by PhpStorm.
 * User: Hu JiangLu
 * Date: 2015/9/22
 * Time: 20:14
 */

class Session_check{
//检查用户是否登录
    public function isLogin()
    {
        if (empty($_SESSION['id'])) {//检查一下session是不是为空
            if (empty($_COOKIE['username']) || empty($_COOKIE['password'])) {//如果session为空，并且用户没有选择记录登录状态
                return false;
            } else
                return true;
        }
    }
}
?>