##数据库结构
* admin 管理员表
    *  aid
    *  aname
    *  apass
* user  用户表
    *  uid
    *  uname
    *  upass   
    *  sigin 签名档
* category  分类表
    *  cid
    *  cname
    *  pid
* shows  内容表
    *  sid
    *  cid     分类 ->category
    *  stitle  标题
    *  scon    内容
    *  simages 图片
    *  stime   日期
    *  hits    点击量
    *  goods   获赞数
    *  posid   推荐位 ->position
    *  statu   审核状态 ->0未审核，1审核中，2审核通过，3审核未通过
    *  username 创建该文章的用户
    *  userrole 创建该文章的用户的角色 -> 0管理员 1普通会员
* position  推荐位表
    *  posid   
    *  posname
* guanzhu  关注表
    *  gid
    *  uid1  关注者
    *  uid2  被关注者
* love  收藏
    *  lid
    *  sid  被收藏的文章id
    *  uid   收藏者
* message  留言
    *  mid 
    *  mcon  留言内容
    *  mtime 留言时间
    *  pid   父级留言id
    *  sid   被留言的文章
    *  uid1  留言者
    *  uid2  被留言者
    *  floor 留言的楼层 默认0层
* message
    

        
## 逻辑

* 后台
    * 进入后台主页，先检测是否登陆，如果没有登陆，转入后台登陆方法
    * 登陆方法检测登陆状态，如果已登陆，提示信息转入后台主页，否则加载登陆页
    * 注册用户，管理员和普通用户分两个表，互不冲突
* 前台
    * 