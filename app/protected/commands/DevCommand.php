 <?php
/**
 * @file   DevCommand.php
 * @author snowh4r3
 * @date   Mon Apr 14 22:22:35 2014
 * 
 * @brief  导入一些数据库的数据
 * 
 * 
 */

class DevCommand extends CommonCommand {
    public function run(){
        $this->actionAddAdmin();
    }

    public function actionAddAdmin(){
        $aid = Common::getMaxID();
        $field  = array(
            'aid' => $aid,
            'login_name' => 'snowh4r3',
            'login_passwd' => 'admin',
            'salt' => 'admin',
            'email' => 'local',
            'sex' => 1,
            'admin_tel' => 1234,
            'real_name' => '黄',
            'admin_status' => 0,
            'admin_level' => 1,
            'reg_ip' => '12.23.12.31',
            'reg_date' => time(),
            'last_ip' => '12.23.12.31',
            'last_visit' => time(),
            'last_location' => 'N/A',
        );
        for ($i = 0; $i<200; $i++) {
            $model = new Admin();
            $salt=rand(1000,9999);
            foreach($field as $k => $v) {
                switch ($k) {
                case 'aid':
                    $model->$k = $v+$i;
                    break;
                case ($k == 'sex' or $k == 'admin_status' or $k == 'admin_lever') :
                    if($i%2 == 0)
                        $model->$k = 0;
                    else
                        $model->$k = 1;
                    break;
                case ($k == 'admin_tel' or $k == 'reg_date' or $k == 'last_visit') :
                    $model->$k = $v+$i;
                    break;
                case ($k == 'email'):
                    $model->$k = $v.$i."@local.com";
                    break;
                case ($k == 'salt'):
                    $model->$k = $salt;
                    break;
                case ($k == 'login_passwd'):
                    $model->$k = sha1('admin'.$salt);
                    break;


                default:
                    $model->$k = $v.$i;
                }
            }
            $model->save();
        }
    }
}
