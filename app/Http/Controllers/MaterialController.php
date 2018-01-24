<?php

namespace App\Http\Controllers;

use App\model\Material;
use Illuminate\Http\Request;
use Validator;
use DB;
class MaterialController extends Controller
{
    //材料首页
    public function index()
    {
        $material=Material::all();
        return view('material.index',compact('material'));
    }
    //材料删除
    public function del(Request $request)
    {
        $id=$request->input('id');
        $rs=Material::where('id',$id)->delete();
        if ($rs)
        {
            return ['info'=>1];
        }else {
            return ['info'=>0];
        }
    }
    //材料添加
    public function add(Request $request)
    {
        if($request->isMethod('get'))
        {
            return view('material.add');
        }
        elseif ($request->isMethod('post'))
        {
            //定义验证规则
            $rules = [
                'name'=>'required',
                'description'=>'required',
                'price'=>'required',
                'stock'=>'required|integer',
            ];
            //定义错误提示
            $msg = [
                'name.required'=>'name cannot be null',
                'description.required'=>'description cannot be null',
                'price.required'=>'price cannot be null',
                'stock.required'=>'stock cannot be null',
                'stock.integer'=>'stock must be integer',

            ];
            $validator =  Validator::make($request->all(),$rules,$msg);//返回一个对象
            if($validator->passes()){
                //通过验证
                $res = Material::create($request->all());
                if($res){
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
    //材料修改
    public function update(Request $request,Material $material)
    {

        if($request->isMethod('get'))
        {
            $id=$request->id;
            $material=Material::where('id',$id)->first();
            return view('material.update',compact('material'));
        }elseif ($request->isMethod('post'))
        {
            //定义验证规则
            $rules = [
                'name'=>'required',
                'description'=>'required',
                'price'=>'required',
                'stock'=>'required|integer',
            ];
            //定义错误提示
            $msg = [
                'name.required'=>'name cannot be null',
                'description.required'=>'description cannot be null',
                'price.required'=>'price cannot be null',
                'stock.required'=>'stock cannot be null',
                'stock.integer'=>'stock must be integer',
            ];
            $validator =  Validator::make($request->all(),$rules,$msg);
            if($validator->passes()){
                //通过验证
                $res = $material->update($request->all());
                if($res){
                    return ['info'=>1];
                }else {
                    return ['info'=>0,'error'=>'更新失败'];
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
