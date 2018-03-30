@extends('backend.master')
@section('title','Sản phẩm')
@section('main')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Sản Phẩm</a> </div>
  </div>
  <div class="container-fluid">
    
    <div class="row-fluid">
      <div class="span12">
        <a href="{{asset('admin/product/add')}}" class="btn btn-success">Thêm sản phẩm</a>
        <div class="widget-box">
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th><h5>ID</h5></th>
                  <th><h5>Tên</h5></th>
                  <th><h5>Giá</h5></th>
                  <th><h5>Ảnh</h5></th>
                  <th><h5>Danh mục</h5></th>
                  <th><h5>Sửa</h5></th>
                  <th><h5>Xóa</h5></th>
                </tr>
              </thead>
              <tbody>
                @foreach($prodList as $prod)
                <tr class="odd gradeX">
                  <td style="text-align: center;">{{$prod->prod_id}}</td>
                  <td style="text-align: center;">{{$prod->prod_name}}</td>
                  <td style="text-align: center;">{{number_format($prod->prod_price,0,',','.')}}</td>
                  <td style="text-align: center;"><img style="height: 100px;" src="{{asset('lib/storage/app/avatar/'.$prod->prod_img)}}"></td>
                  <td style="text-align: center;">{{$prod->cate_name}}</td>
                  <td style="text-align: center;" class="center"><a href="{{asset('admin/product/edit/'.$prod->prod_id)}}" class="btn btn-primary"> <i class="icon-edit"></i> Sửa</a></td>
                  <td style="text-align: center;" class="center"><a href="{{asset('admin/product/delete/'.$prod->prod_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa {{$prod->prod_name}}')" class="btn btn-warning "> <i class=" icon-trash"></i> Xóa</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="js/matrix.tables.js"></script>
@stop