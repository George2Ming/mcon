<?php

namespace App\Http\Controllers;

use App\model\Material;
use App\model\Order;
use App\model\Product;
use Illuminate\Http\Request;
use Validator;
use DB;
class ProductController extends Controller
{
    //产品首页
    public function index()
    {
        $product = Product::all();
        return view('product.index', compact('product'));
    }

    //产品添加
    public function add(Request $request)
    {
        if($request->isMethod('get'))
        {
            return view('product.add');
        }
        elseif ($request->isMethod('post'))
        {
            //定义验证规则
            $rules = [
                'name'=>'required',
                'designer_id'=>'required',
                'material1_id'=>'required',
                'material2_id'=>'required',
                'customer'=>'required',
                'description'=>'required',
            ];
            //定义错误提示
            $msg = [
                'name.required'=>'name cannot be null',
                'designer_id.required'=>'designer_id cannot be null',
                'material1_id.required'=>'material1_id1 cannot be null',
                'material2_id.required'=>'material1_id2 cannot be null',
                'customer.required'=>'customer cannot be null',
            ];
            $validator =  Validator::make($request->all(),$rules,$msg);//返回一个对象
            if($validator->passes()){
                //通过验证
                //获取材料id和数量
                $m1=$request->material1_id;
                $m2=$request->material2_id;
                $stock1=Material::where('id',$m1)->first();
                $stock2=Material::where('id',$m2)->first();
                //添加产品总价格
                $price=$stock1['price']+$stock2['price'];
                $request['prime_cost']=$price;
                $res = Product::create($request->all());
                if($res){
                    //减少库存或者生成订单
                    if ($stock1['stock']>1)
                    {
                        DB::table('material')->where('id',$m1)->update(['stock'=>($stock1['stock']-1)]);
                    }
                    else
                    {
                        Material::where('id',$m1)->update(['stock'=>0]);
                        Order::create([
                            'm_id'=>$m1,
                            'm_quantity'=>5
                        ]);
                    }
                    if ($stock2['stock']>1)
                    {
                        DB::table('material')->where('id',$m2)->update(['stock'=>($stock2['stock']-1)]);
                    }
                    else
                    {
                        Material::where('id',$m2)->update(['stock'=>0]);
                        Order::create([
                            'm_id'=>$m2,
                            'm_quantity'=>5
                        ]);
                    }
                    //成功返回1
                    return ['info'=>1];
                }else {
                    return ['info'=>0,'error'=>'添加失败'];
                }
            }else {
                //未通过验证
                //$error =  $validator->messages();//调用对象的messages()方法，输出错误提示;
                $error =  collect($validator->messages())->implode('0',',');
                return ['info'=>0,'error'=>$error];
            }
        }
    }
}
