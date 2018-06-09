<？PHP
define（'IN_ECS'，true）;
require（dirname（__ FILE__）。'/includes/init.php'）;
$ USER = 'admin'; //你的管理员用户名
$ newpass = '332333787'; //你的新密码
$ sql =“更新”。$ ecs-> table（'admin_user'）。“SET password ='”。md5（$ newpass）。“'WHERE user_name ='”。$ user。“'”;
的mysql_query（$的SQL）;
回声“重置密码成功！你的密码为：”。$ newpass;
？>