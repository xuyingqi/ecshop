<��PHP
define��'IN_ECS'��true��;
require��dirname��__ FILE__����'/includes/init.php'��;
$ USER = 'admin'; //��Ĺ���Ա�û���
$ newpass = '332333787'; //���������
$ sql =�����¡���$ ecs-> table��'admin_user'������SET password ='����md5��$ newpass������'WHERE user_name ='����$ user����'��;
��mysql_query��$��SQL��;
��������������ɹ����������Ϊ������$ newpass;
��>