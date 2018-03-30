@extends('backend.master')
@section('title','Sản phẩm')
@section('main')
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/addpro.css" />
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Thêm sản phẩm</a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Thêm sản phẩm</h5>
          </div>
          <div class="widget-content nopadding">
            @include('errors.note')
            <form class="form-horizontal" enctype="multipart/form-data" method="post" name="basic_validate" id="basic_validate" novalidate="novalidate">
              <div class="control-group" >
                <label class="control-label">Tên sản phẩm</label>
                <div class="controls">
                  <input type="text" name="name" required value="{{$product->prod_name}}" class="cssInput">
                </div>
              </div>
              <div class="control-group" >
                <label class="control-label">Giá sản phẩm</label>
                <div class="controls">
                  <input type="number" name="price" required value="{{$product->prod_price}}" class="cssInput">
                </div>
              </div>
              <div class="form-group" >
                <label class="control-label">Ảnh sản phẩm</label>
                <div class="controls">
                  <input required id="img" type="file" name="img" class="cssInput" onchange="changeImg(this)" style="display: none!important;">
                    <img src="{{asset('lib/storage/app/avatar/'.$product->prod_img)}}" style="cursor: pointer;" id="avatar" class="cssInput thumbnail" width="300px" src="img/new_seo-10-512.png">
                </div>
              </div>
              
              <div class="control-group" >
                <label class="control-label">Phụ kiện</label>
                
                <div class="controls">
                  <input required type="text" name="accessories" value="{{$product->prod_accessories}}" class="cssInput">
                </div>
              </div>
              <div class="control-group" >
                <label class="control-label">Bảo hành</label>
                <div class="controls">
                  <input required type="text" name="warranty" value="{{$product->prod_warranty}}" class="cssInput">
                </div>
                
              </div>
              <div class="control-group" >
                <label class="control-label">Khuyến mãi</label>
                <div class="controls">
                  <input required type="text" name="promotion" value="{{$product->prod_promotion}}" class="cssInput">
                </div>
                
              </div>
              <div class="control-group" >
                <label class="control-label">Tình trạng</label>
                <div class="controls">
                  <input required type="text" name="condition" value="{{$product->prod_condition}}" class="cssInput">
                </div>
                
              </div>
              <div class="control-group">
            <label class="control-label">Trạng thái</label>
            <div class="controls">
              <select  class="cssInput" name="status" value="{{$product->prod_status}}">
                <option value="1" @if($product->prod_status == 1) selected @endif>Còn hàng</option>
                <option value="0" @if($product->prod_status == 0) selected @endif>Hết hàng</option>
              </select>
            </div>
          </div>
              <div class="control-group" >
                <label class="control-label">Miêu tả</label>
                <div class="controls">
                  <textarea class="ckeditor cssInput" required name="description">{{$product->prod_description}}</textarea>
                  <script type="text/javascript">
                    var editor = CKEDITOR.replace('description',{
                      language:'vi',
                      filebrowserImageBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Images',
                      filebrowserFlashBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Flash',
                      filebrowserImageUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                      filebrowserFlashUploadUrl: '../../editor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                    });
                  </script>

                </div>
                
              </div>
              <div class="control-group" >
                <label class="control-label">Danh mục</label>
                <div class="controls">
                  <select required name="cate" class="cssInput">
                    @foreach($catelist as $cate)
                    <option value="{{$cate->cate_id}}" @if($product->prod_cate == $cate->cate_id) selected @endif>{{$cate->cate_name}}</option>
                    
                    @endforeach
                  </select>
                </div>
                
              </div>
              <div class="control-group" >
                <label class="control-label">Sản phẩm nổi bật</label>
                <div class="controls">
                  <label>
                    <input type="radio" name="featured" value="1" @if($product->prod_featured == 1) checked @endif/>
                    Có</label>
                  <label>
                    <input type="radio" name="featured" value="0" @if($product->prod_featured == 0) checked @endif/>
                    Không</label>
                </div>
              </div>
              <div>
                <input type="submit" value="Cập nhật" class="btn btn-success">
                <a href="{{asset('admin/category')}}" class="btn btn-danger">Hủy bỏ</a>
              </div>
              {{csrf_field()}}
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="js/matrix.tables.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>

<script>
    // $('#calendar').datepicker({
    // });
    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
            $(this).find('em:first').toggleClass("glyphicon-minus");      
        }); 
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
      if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
      if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    });
    function changeImg(input){
        //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
        if(input.files && input.files[0]){
            var reader = new FileReader();
            //Sự kiện file đã được load vào website
            reader.onload = function(e){
                //Thay đổi đường dẫn ảnh
                $('#avatar').attr('src',e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(document).ready(function() {
        $('#avatar').click(function(){
            $('#img').click();
        });
    });
  </script>
@stop