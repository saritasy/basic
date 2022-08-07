<?php
    namespace app\models;
    use yii\db\ActiveRecord;

    class Company extends ActiveRecord
    {
        private $Name;
        private $Description;
        private $Location;
        private $Type;

        public function rules(){
            return[
                    [['Name'],'required']
            ];
        }
    }
?>