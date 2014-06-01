<?php
class DwzUploadImage {
    /* 上传至哪个model */
    private $model;
    /* 上传表单的input中的name  */
    private $name;
    /* 上传图片的路径地址 */
    private $dir;

    /* 数据存路径的字段 */
    private $db_field;
    
    /* 基准目录 */
    public $basePath = '/assets/Uploads';

    /** 
     * @var 上传附件的扩展名
     */
    public $img_extension = array('jpg','png','bmp','jepg');

    /** 
     * @var 上传附件的大小 
     */
    public $img_size = 2097152;//2MB

    

    public function __construct($array){
        if(isset($array['model'])){
            if( $array['model'] instanceof CActiveRecord  || $array['model'] instanceof CFormModel )
                $this->model = $array['model'];
            else
                throw  new Exception('需要定义array中的model,且model是CActiveRecord或CFormModel的实例');
        }else{
                throw  new Exception('需要定义array中的model');
        }
            

        if(isset($array['name'])){
            $this->name = $array['name'];
        }else{
                throw  new Exception('请设置索引name:为上传的input中的name');
        }

        if(isset($array['dir'])){
            $this->dir = $array['dir'];
        }else{
            throw  new Exception('请设置索引dir:为上传后存储图片的路径');
        }

        if(isset($array['db_field'])){
            $this->db_field = $array['db_field'];
        }else{
            throw  new Exception('请设置索引db_field:为上传后存储图片的数据库字段');
        }
        
           

    }

    /** 
     * @todo 执行上传动作
     * 
     * @return array('status'=>0,'msg'=>'')
     *         如果SUCCESS 则msg 是上传成功后的url
     *            ERROR   则会调用DwzHelper直接报错
     *            NO_UPLOAD 则无消息
     */
    public function upload(){
        $image = CUploadedFile::getInstanceByName($this->name);
        if($image == null){
            return array('status'=>'NO_UPLOAD','msg'=>'');
        }
        if(!in_array($image->getExtensionName(),$this->img_extension)){
            $this->model->addError($this->db_field,'图片格式仅限jpg,png,bmp,jepg');
            DwzHelper::error($this->model);
        }
        if( $image->getSize() > $this->img_size) {
            $this->model->addError($this->db_field,'图片大小不要超2M');
            DwzHelper::error($this->model);
        }
        $local_dir = Yii::getPathOfAlias('webroot').$this->basePath.'/'.$this->dir.'/';
        if (!is_dir($local_dir)) {
            mkdir($local_dir,0777,true);
        }
        $name = $local_dir.$image->name;
        //文件名绝对路径
        $rs = $image->saveAs($name,true);
        if($rs){
            return array('status'=>'SUCCESS', 'msg'=>$this->basePath.'/'.$this->dir.'/'.$image->name);
        }else{
            return array('status'=>'ERROR','msg'=>'上传失败，未知错误' );
        }
    }

}

