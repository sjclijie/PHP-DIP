<?php
/**
 * Created by PhpStorm.
 * User: Jaylee
 * Date: 16/2/29
 * Time: 23:18
 */

    class Instance {

        //仅有的属性,用于保存类名,接口名或者别名
        public $id;

        //构造函数,仅将传入的ID赋值给$id属性
        protected function __construct( $id ) {

        }

        //静态方法创建一个Instance实例
        public static function of($id){
            return new static( $id );
        }

        //静态方法,用于将引用解析成实际的对象,并确保这个对象的类型
        public static function ensure( $reference, $type = null, $container = null ) {

        }

        //获取这个实例所引用的实际对象,事实上它是调用yii\di\Container::get()来获取实际对象
        public function get( $container = null ){

        }
    }