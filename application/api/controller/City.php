<?php
namespace app\api\controller;

use think\Controller;

class City extends Controller
{
  	public function read()
    {
      	$name = input('name');
      	$model = model('City');
      	$data = $model->getCitycode($name);
      	if($data){
          	$code = 200;
        } else {
          	$code = 404;
        }
      	$data = [
          	'code'=> $code,
          	'data'=> $data
         ];
      	return json($data);
    }
}