<?php

/**
 *
 * @package    request
 * @version    Release: 1.0.1
 * @license    GPL3
 * @author     Ali YILMAZ <aliyilmaz.work@gmail.com>
 * @category   Request collector
 * @link       https://github.com/aliyilmaz/getOS
 *
 */
class request extends Mind
{
    /**
     * Request collector
     * @param null|string $name
     * @return array|string
     */
    public function request($name=''){

        $post = array();
        if(isset($_POST) OR isset($_GET) OR isset($_FILES)){

            foreach (array_merge($_POST, $_GET, $_FILES) as $n => $value) {

                if(is_array($value)){
                    foreach($value as $key => $all ){

                        if(is_array($all)){
                            foreach($all as $i => $val ){
                                $post[$n][$i][$key] = self::aliyilmaz('filter')->filter($val);
                            }
                        } else {
                            $post[$n][$key] = self::aliyilmaz('filter')->filter($all);
                        }
                    }
                } else {
                    $post[$n] = self::aliyilmaz('filter')->filter($value);
                }
            }
        }

        if(isset($post[$name])){
            return $post[$name];
        }

        return $post;
    }

}
