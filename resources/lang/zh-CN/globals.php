<?php

//-------- For enums in Seeders --------
return [
    'company_status' => [
        'active'   => '活跃',
        'inactive' => '不活跃',
    ],
    'roles' => [
        'admin'             => '管理员',
        'business'          => '商家',
        'nonprofit'         => '非盈利组织',
        'person'            => '买家',
    ],

    'verification' => [
        'yes' => '是',
        'no'  => '否',
    ],

    'type_user'               => [
        'normal'        => '正常',
        'trusted'       => '信赖',
    ],
    'type_preferences'        => [
        'string'             => '字符串',
        'date'               => '日期',
        'json'               => 'Json',
        'number'             => '数字',
    ],
    'person_sex'            => [
        'female'          => '女性',
        'male'            => '男性',
    ],
    'type_categories'        => [
        'group'                 => '组',
        'store'                 => '仓库',
    ],
    'product_conditions'    => [
        'new'                    => '崭新',
        'refurbished'            => '翻新',
        'used'                   => '二手',
    ],
    'order_status'            => [
        'cancelled'             => '已取消', /*orden eliminada por el usuario*/
        'closed'                => '已关闭', /**/
        'open'                  => '开放', /*orden abienta, en carrito, order,wish list*/
        'paid'                  => '已付款', /**/
        'pending'               => '待办中', /**/
        'received'              => '已收到', /**/
        'sent'                  => '已发送', /**/
    ],
    'participant_status'    => [
        'cancelled'             => '已取消',
        'registered'            => '已注册',
        'winner'                => '获胜者',
    ],
    'source_types'            => [
        'tag'                     => '标签',
        'order'                   => '订单',
        'free_product'            => '免费商品',
        'order_detail'            => '订单详情',
        'paypal'                  => 'paypal',
    ],
    'product_features'        => [
        'color'                 => '颜色',
        'weight'                => '重量',
        'dimensions'            => '尺寸',
        'volume'                => '体积',
        'video'                 => '视频',
        'brand'                 => '品牌',
        'model'                 => '模型',
        'size'                  => '大小',
    ],
    'product_types'                => [
        'item'                    => '物品',
        'key'                     => '注册码',
        'software'                => '软件',
        'software_key'            => '软件注册码',
        'gift_card'               => '礼品卡',
        'freeproduct'             => '免费商品',
    ],
    'filters' => [
        'categories'   => '分类',
        'category'     => '分类',
        'brand'        => '品牌',
        'brands'       => '品牌',
        'color'        => '颜色',
        'conditions'   => '状况',
        'condition'    => '状况',
        'model'        => '模型',
        'price'        => '价格',
        'price_range'  => '价格区间',
        'size'         => '大小',
    ],
    'action_types'            => [
        //Orders
        ['id' => 1, 'source_type' => '订单', 'action' => '开放'],
        ['id' => 2, 'source_type' => '订单', 'action' => '等待中'],
        ['id' => 3, 'source_type' => '订单', 'action' => '评论'],
        ['id' => 8, 'source_type' => '订单', 'action' => '已关闭'],
        ['id' => 9, 'source_type' => '订单', 'action' => '已取消'],
        ['id' => 10, 'source_type' => '订单', 'action' => '已收到'],
        ['id' => 11, 'source_type' => '订单', 'action' => '已发送'],
        ['id' => 14, 'source_type' => '订单', 'action' => '评价'],
        ['id' => 15, 'source_type' => '订单', 'action' => '处理中'],
        //Checkout
        ['id' => 6, 'source_type' => '订单', 'action' => '重载点数'],
        ['id' => 7, 'source_type' => '订单', 'action' => '检验订单'],
        //Order Details
        ['id' => 4, 'source_type' => '订单详情', 'action' => '创建'],
        ['id' => 5, 'source_type' => '订单详情', 'action' => '更新'],
        //Free Products
        ['id' => 12, 'source_type' => '免费商品', 'action' => '检验订单'],
        //PayPal
        ['id' => 13, 'source_type' => 'paypal', 'action' => '购买点数'],
    ],
    //------------ Globals Traductions----------------
    'product_features'        => [
        'brand'                    => '品牌',
        'color'                    => '颜色',
        'dimensions'               => '尺寸',
        'model'                    => '模型',
        'size'                     => '大小',
        'video'                    => '视频',
        'volume'                   => '体积',
        'weight'                   => '重量',
    ],
    // --- contain the field to increase (product table) and the constant value, which will be sum to the actual value.
    'product_value_counters' => [
        'view' => '1',
        'sale' => '1',
    ],
    '404_error' => [
        'title'      => '没有找到该页面！',
        'message_01' => '您访问的页面已被移动、删除或不存在。请返回或访问其他页面。',
        'link_01'    => '您在',
        'message_02' => '或直接前往我们的',
        'link_02'    => '主页',
    ],
    'footer' => [
        'title_info'             => '资料',
        'customer_service'       => '顾客服务',
        'privacy_terms'          => '隐私政策与条款',
        'orders_returns'         => '订单 & 退货',
        'title_buy'              => '为什么选择我们',
        'shipping_returns'       => '运输 & 返还',
        'secure_shopping'        => '安全购物',
        'international_shipping' => '国际运输',
        'free_products'          => '每天免费产品',
        'business_sellers'       => '商家',
    ],
    //------------ Globals Traductions----------------
    'product_features'    => [
        'brand'         => '品牌',
        'color'         => '颜色',
        'dimensions'    => '尺寸',
        'model'         => '模型',
        'size'          => '大小',
        'video'         => '视频',
        'volume'        => '体积',
        'weight'        => '重量',
    ],
    // --- contain the field to increase (product table) and the constant value, which will be sum to the actual value.
    'product_value_counters' => [
        'view' => '1',
        'sale' => '1',
    ],
    '404_error' => [
        'title'      => '没有找到该页面！',
        'message_01' => '您访问的页面已被移动、删除或不存在。请返回或访问其他页面。',
        'link_01'    => '您在',
        'message_02' => '或直接前往我们的',
        'link_02'    => '主页',
    ],
  'faq'                    => '常见问题',
  'cancel'                 => '取消',
  'contact'                => '联系我们',
  'file'                   => '文件',
  'help'                   => '帮助',
  'home'                   => '首页',
  'notices'                => '消息',
  'privacy'                => '政策',
  'products'               => '商品',
  'refine'                 => '精炼', /* ? */
  'refine_by'              => '精炼', /* ? */
  'search'                 => '搜索',
  'searching'              => '搜索中',
  'terms'                  => '条款',
  'type'                   => '类型',
  'back_top'               => '返回顶部',
  'next'                   => '下一页',
  'previous'               => '前一页',
  'click_here'             => '点击这里',
  'delete'                 => '删除',
  'edit'                   => '修改',
  'new'                    => '新建',
  'save'                   => '保存',
  'search_suggestion'      => '搜索建议',
  'disable'                => '不可用',
  'enable'                 => '可用',
  'active'                 => '活跃',
  'brand'                  => '品牌',
  'inactive'               => '不活跃',
  'status'                 => '状态',
  'integerValidate'        => '必须是一个整数',
  'numberValidate'         => '必须是数字',
  'required'               => '必需的',
  'required_image'         => '图片必需',
  'urlValidate'            => '必须是一个有效的网址',
  'error'                  => '对不起，出现了一个错误！',
  'fileErrorFormat'        => '文件类型无效',
  'not_access'             => '您没有权限访问这里。',
  'in'                     => '在',
  'no'                     => '不',
  'sub'                    => '子',
  'to'                     => '到',
  'total'                  => '总共',
  'yes'                    => '是',
  'action'                 => '行动', /* ? */
  'category'               => '分类',
  'description'            => '介绍',
  'error_not_available'    => '内容不可用',
  'file_does_not_exist'    => '文件不存在',
  'filter'                 => '筛选',
  'filtered'               => '筛选',
  'filter_results'         => '筛选结果',
  'induced_error'          => '请遵循指示以获得更好的服务。',
  'name'                   => '名字',
  'no_results'             => '没有结果',
  'personalize'            => '个性化',
  'search_for'             => '搜索',
  'searchResults'          => '搜索结果',
  'see_more'               => '查看更多',
  'more'                   => '更多',
  'send_to'                => '发送到',
  'subcategories'          => '子分类',
  'with'                   => '与',
  'worn_points'            => '花费点数',
  'rate'                   => '评价',
  'due_date'               => '截止至',
  'quantity'               => '数量',
  'popular_tags'           => '热门标签',
  'actions_label'          => '行动',
  'sign_in_label'          => '登录',
  'reference_label'        => '参考',
  'change_label'           => '更改',
  'file_upload_error'      => '上传文件大小不能超过 :MaxFilesize',
  'twitter_label'          => 'Twitter',
  'google_label'           => 'Google+',
  'facebook_label'         => 'Facebook',
  'about'                  => '关于我们',
  'all'                    => '全部',
  'comment'                => '评论',
  'delivery'               => '送货',
  'events'                 => '即将到来的活动',
  'free'                   => '免费',
  'freeproducts'           => '免费商品',
  'newsletter'             => '新闻',
  'top_rated'              => '最高评价',
  'image'                  => '图片',
  'points_earned'          => '获得点数',
  'close_label'            => '关闭',
  'customer_name'          => '买家名字',
  'full_report'            => '完整报告',
  'filtered'               => '筛选',
  'location'               => '位置',
  'suggested_categories'   => '推荐分类',
  'suggested_products'     => '推荐商品',
  'barcode_error_msg'      => '信息无效，不能生成条形码',
  'max_label'              => '最大',
  'min_label'              => '最小',
  'go_label'               => '去',
  'max_price_label'        => '最高价',
  'min_price_label'        => '最低价',
  'your_search'            => '您的搜索',
  'your_filter'            => '您的筛选条件',
  'message_no_filter'      => '试试更改一下筛选条件，以得到更好的结果',
  'message_no_results_01'  => '没有搜索到任何商品',
  'message_no_results_02'  => '试试删除一个筛选条件，以得到更好的结果',
  'go_back_label'          => '返回',
  'result_for'             => '结果',
  'in_label'               => '在',
  'by_label'               => '通过',
  'company_label'          => '公司',
  'social_label'           => '社交',
  'power_by_label'         => '技术支持 ',
  'epikfy_ecommerce'       => 'Epikfy e-commerce',
  'validation_error_label' => '验证错误',
  'success_label'          => '成功',
  'newsletter_email_error' => '邮箱必需',
  'reach_us_msg'           => '随时与我们交流！我们会尽快联系您',
  'send_a_email_label'     => '发送邮件',
  'share_on_facebook'      => '在Facebook分享',
  'share_on_twitter'       => '在Twitter分享',
];