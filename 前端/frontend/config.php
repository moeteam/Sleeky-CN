<?php 
// 配置文件 - 这里控制着您网站的外观和信息。更多详细信息请参阅文档。

// 常规

// 首页标题
define('title', '又一个使用 YOURLS 的短网址'); 

// 简单标题，显示于页脚
define('shortTitle', '短网址');

// 显示在首页的描述
define('description', '本工具为您提供网址缩短服务，您只需粘贴长链接，再点击缩短按钮，最后分享缩短后的短网址到各大社交平台，一气呵成！一切就是这么简单，这么快速。'); 

// 网站图标
define('favicon', '/frontend/assets/img/favicon.ico');

// 网站 Logo，显示在首页
define('logo', '/frontend/assets/img/logo-black.png');

// 启用 reCAPTCHA V3
// 获取 reCAPTCHA V3 密钥: https://www.google.com/recaptcha/admin/create
define("enableRecaptcha", false);

// reCAPTCHA V3 Site Key
define("recaptchaV3SiteKey", 'YOUR_SITE_KEY_HERE');

// reCAPTCHA V3 Secret Key
define("recaptchaV3SecretKey", 'YOUR_SECRET_KEY_HERE');

// 是否启用自定义别名
// true 或 false
define('enableCustomURL', true);

// 可选
// 设置要使用的主色调。默认: #007bff
// 推荐颜色:
// #f44336: 红色, #9c27b0: 紫色, #00bcd4: 蓝绿色, #ff5722: 橙色
define('colour', '#007bff');

// 可选
// 设置要使用的背景图像，如要启用，取消注释下方的 define
// 默认: unsplash.com 的每日随机图片
// 更多有关 unsplash 图像的嵌入方式参见: https://source.unsplash.com
// define('backgroundImage', 'https://source.unsplash.com/daily');

// 页脚

// 显示在页脚的链接。每行一个链接。
// 新建行需依照以下结构:
// "标题" => "链接",
$footerLinks = [
    "关于"   =>  "https://sleeky.flynntes.com/",
    "联系" =>  "https://moeteam.net/",
    "使用条款"   =>  "https://yourls.org/",
    "管理面板"   =>  "/admin"
];

?>
