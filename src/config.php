<?php
// +----------------------------------------------------------------------
// | ApiResp配置文件 - 状态码规范
// +----------------------------------------------------------------------
// | 此文件定义了API接口响应的状态码及其对应含义，以规范接口返回状态信息。
// | 其中状态码分通用与业务两类，业务状态码按业务模块划分，规则如下：
// | 10开头 - 用户管理
// | 11开头 - 短信服务
// | 12开头 - 订单处理
// | 13开头 - 商品管理
// | 14开头 - 充值与支付
// | 15开头 - 角色与权限
// | 16开头 - 菜单配置
// | 17开头 - 公告与消息
// | 18开头 - 数据字典
// | 19开头 - 系统配置
// | 20开头 - 文件与资源
// | 21开头 - 内容发布
// | 22开头 - 促销活动
// | 23开头 - 通知公告
// | 24开头 - 报表统计
// | 25开头 - 客户服务
// | 26开头 - API接口
// | （可根据实际需求调整和补充）
// +----------------------------------------------------------------------

return [
    // 通用状态码（可根据实际需求调整和补充）
    0 => '成功',
    1 => '失败',
    2 => '系统繁忙，请稍后再试',
    3 => '请求参数错误',
    4 => '数据验证失败',
    5 => '权限不足',
    6 => '资源不存在',

    // 业务状态码（可根据实际需求调整和补充）
    // 用户管理（10开头）
    1000 => '用户注册成功，可正常登录',
    1001 => '用户名已存在，请更换用户名',
    1002 => '用户登录成功，已获取会话信息',
    1003 => '用户密码错误，请重新输入',
    1004 => '用户信息更新成功，数据已同步',
    1005 => '用户查询失败，该用户不存在',
    1006 => '用户删除成功，相关数据已清理',
    1007 => '用户角色分配成功，权限已更新',
    1008 => '用户冻结成功，暂时无法登录',
    1009 => '用户解冻成功，可正常使用账号',

    // 短信服务（11开头）
    1100 => '短信验证码发送成功，请注意查收',
    1101 => '短信发送失败，手机号码格式不正确',
    1102 => '短信发送过于频繁，请稍后再试',
    1103 => '短信验证码验证通过，操作继续',
    1104 => '短信验证码验证失败，验证码错误',
    1105 => '短信服务临时故障，无法发送短信',
    1106 => '短信模板不存在，发送失败',
    1107 => '短信内容超长，发送失败',
    1108 => '短信发送通道配置错误',
    1109 => '短信接收号码黑名单限制，发送失败',

    // 订单处理（12开头）
    1200 => '订单创建成功，等待支付处理',
    1201 => '库存不足，无法创建订单，请调整商品数量',
    1202 => '订单支付成功，交易完成',
    1203 => '订单取消成功，已退款（如有）',
    1204 => '订单支付失败，支付渠道异常，请检查后重试',
    1205 => '订单查询失败，订单不存在或已被删除',
    1206 => '订单发货成功，物流信息已更新',
    1207 => '订单收货确认成功，交易结束',
    1208 => '订单修改成功，信息已更新',
    1209 => '订单合并成功，订单已整合',

    // 商品管理（13开头）
    1300 => '商品添加成功，已上架销售',
    1301 => '商品名称重复，无法添加，请修改名称',
    1302 => '商品库存修改成功，库存数量已更新',
    1303 => '商品下架成功，已停止销售',
    1304 => '商品信息更新失败，数据格式错误',
    1305 => '商品列表获取失败，暂无商品数据',
    1306 => '商品图片上传成功，已关联商品',
    1307 => '商品分类设置成功，已归类',
    1308 => '商品价格调整成功，价格已变更',
    1309 => '商品标签添加成功，已标记',

    // 充值与支付（14开头）
    1400 => '充值成功，账户余额已更新',
    1401 => '支付失败，余额不足，请充值后再试',
    1402 => '支付渠道连接超时，请重新尝试支付',
    1403 => '充值金额超出限制，调整后再试',
    1404 => '支付记录查询失败，无对应记录',
    1405 => '支付密码错误，请重新输入',
    1406 => '支付退款成功，金额已退回原账户',
    1407 => '支付手续费计算错误',
    1408 => '充值渠道维护中，暂时无法充值',
    1409 => '支付订单已关闭，无法继续支付',

    // 角色与权限（15开头）
    1500 => '角色创建成功，可分配权限',
    1501 => '权限分配失败，权限不存在或已被占用',
    1502 => '角色删除成功，相关权限已解除',
    1503 => '角色更新失败，角色名称已存在',
    1504 => '角色列表获取失败，暂无角色数据',
    1505 => '权限列表获取失败，权限配置异常',
    1506 => '角色权限继承设置成功',
    1507 => '角色权限克隆成功',
    1508 => '角色权限同步成功，数据已更新',
    1509 => '角色权限审核通过，已生效',

    // 菜单配置（16开头）
    1600 => '菜单添加成功，已显示在对应位置',
    1601 => '菜单名称过长，不符合规范，请修改',
    1602 => '上级菜单不存在，无法添加子菜单',
    1603 => '菜单排序修改成功，已重新排序',
    1604 => '菜单删除成功，相关子菜单已一并删除',
    1605 => '菜单树结构获取失败，数据获取异常',
    1606 => '菜单链接设置成功，可正常跳转',
    1607 => '菜单图标上传成功，已显示图标',
    1608 => '菜单权限设置成功，已限制访问',
    1609 => '菜单缓存更新成功，已应用新配置',

    // 公告与消息（17开头）
    1700 => '公告发布成功，已推送至相关用户',
    1701 => '消息发送失败，用户未订阅相关频道',
    1702 => '公告内容格式错误，审核未通过',
    1703 => '消息已读标记更新成功',
    1704 => '未读消息列表获取失败，无未读消息',
    1705 => '消息删除失败，消息不存在或权限不足',
    1706 => '公告推送记录查询成功',
    1707 => '消息模板设置成功，可用于发送',
    1708 => '消息分类设置成功，已归类',
    1709 => '消息优先级设置成功，已调整顺序',

    // 数据字典（18开头）
    1800 => '数据字典项添加成功，可正常使用',
    1801 => '数据字典编码重复，添加失败',
    1802 => '数据字典项更新成功，数据已更新',
    1803 => '数据字典项删除成功，已移除该项',
    1804 => '数据字典列表获取失败，暂无数据',
    1805 => '数据字典数据同步失败，数据源异常',
    1806 => '数据字典项引用检查成功，无关联引用',
    1807 => '数据字典项批量添加成功',
    1808 => '数据字典项版本更新成功',
    1809 => '数据字典项描述修改成功',

    // 系统配置（19开头）
    1900 => '系统配置保存成功，已生效',
    1901 => '系统配置项名称冲突，修改失败',
    1902 => '系统配置读取失败，配置文件损坏',
    1903 => '系统配置更新成功，已应用新配置',
    1904 => '系统配置列表获取失败，无相关配置数据',
    1905 => '系统配置备份失败，存储空间不足',
    1906 => '系统配置恢复成功，已还原到指定版本',
    1907 => '系统配置加密存储成功',
    1908 => '系统配置解密成功，可查看内容',
    1909 => '系统配置项默认值设置成功',

    // 文件与资源（20开头）
    2000 => '文件上传成功，可在对应位置查看',
    2001 => '文件格式不支持，上传失败',
    2002 => '文件大小超出限制，无法上传',
    2003 => '文件下载成功，已开始下载',
    2004 => '文件删除成功，已从存储中移除',
    2005 => '文件列表获取失败，暂无文件数据',
    2006 => '文件路径修改成功，已更新路径',
    2007 => '文件权限设置成功，已限制访问',
    2008 => '文件类型识别成功，已确定类型',
    2009 => '文件压缩成功，已生成压缩包',

    // 内容发布（21开头）
    2100 => '文章发布成功，已展示在相应页面',
    2101 => '文章标题不符合规范，发布失败',
    2102 => '文章内容审核未通过，需修改后重新提交',
    2103 => '文章更新成功，已更新展示内容',
    2104 => '文章删除成功，已从发布平台移除',
    2105 => '文章列表获取失败，暂无文章数据',
    2106 => '文章分类设置成功，已归类到相应分类',
    2107 => '文章标签添加成功，已添加相关标签',
    2108 => '文章推荐设置成功，已设置为推荐文章',
    2109 => '文章阅读量统计成功，已更新阅读数据',

    // 促销活动（22开头）
    2200 => '促销活动创建成功，已开始生效',
    2201 => '促销活动时间设置冲突，创建失败',
    2202 => '促销活动规则更新成功，已应用新规则',
    2203 => '促销活动结束，已停止生效',
    2204 => '促销活动列表获取失败，暂无活动数据',
    2205 => '参与促销活动失败，不符合参与条件',
    2206 => '促销活动优惠计算成功，已确定优惠金额',
    2207 => '促销活动库存校验成功，库存充足',
    2208 => '促销活动分享设置成功，可分享活动链接',
    2209 => '促销活动报名成功，已加入活动',

    // 通知公告（23开头）
    2300 => '通知公告发布成功，已推送至相关人员',
    2301 => '通知公告接收人不存在，发布失败',
    2302 => '通知公告内容为空，无法发布',
    2303 => '通知公告查看记录更新成功',
    2304 => '通知公告历史记录获取失败，无相关记录',
    2305 => '通知公告删除失败，权限不足或公告不存在',
    2306 => '通知公告置顶设置成功，已置顶显示',
    2307 => '通知公告有效期设置成功，已确定有效时间',
    2308 => '通知公告重要性标记成功，已标记重要程度',
    2309 => '通知公告回复功能设置成功，可接收回复',

    // 报表统计（24开头）
    2400 => '报表生成成功，可查看分析数据',
    2401 => '报表生成失败，数据不足无法生成',
    2402 => '报表格式设置错误，重新设置后再试',
    2403 => '报表数据更新成功，已更新报表数据',
    2404 => '报表列表获取失败，暂无报表数据',
    2405 => '报表导出失败，导出功能异常',
    2406 => '报表模板设置成功，已应用新模板',
    2407 => '报表数据筛选成功，已筛选出目标数据',
    2408 => '报表数据排序成功，已按要求排序',
    2409 => '报表数据汇总成功，已完成数据汇总',

    // 客户服务（25开头）
    2500 => '工单创建成功，客服人员已受理',
    2501 => '工单类型选择错误，创建失败',
    2502 => '客户信息不完整，无法创建工单',
    2503 => '工单已处理完成，状态已更新',
    2504 => '工单列表获取失败，暂无工单数据',
    2505 => '工单回复失败，权限不足或工单不存在',
    2506 => '工单转交成功，已转交给其他客服',
    2507 => '工单优先级调整成功，已设置新优先级',
    2508 => '工单满意度评价成功，已记录评价',
    2509 => '工单关闭原因记录成功，已保存关闭原因',

    // API接口（26开头）
    2600 => '接口调用成功，返回正常数据',
    2601 => '接口参数错误，检查参数后再调用',
    2602 => '接口无权限访问，申请权限后再试',
    2603 => '接口已停用，暂不可用',
    2604 => '接口调用频率过高，超出限制，请稍后再试',
    2605 => '接口返回数据格式错误，解析失败',
    2606 => '接口请求方法不支持，更换方法后再试',
    2607 => '接口版本不兼容，升级客户端后再试',
    2608 => '接口内部逻辑错误，联系管理员',
    2609 => '接口数据加密传输成功，已加密数据',
];