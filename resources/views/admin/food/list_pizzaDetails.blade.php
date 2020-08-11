
@section('content')
    @extends('page.layouts.master')
<section class="home-slider owl-carousel img" style="background-image: url(page/images/bg_1.jpg);">

    <div class="slider-item" style="background-image: url(page/images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">

                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">Pizza Details</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Pizza</span></p>
                </div>

            </div>
        </div>
    </div>
</section>

<div class="colorlib-product">
    <div class="container">
        <div class="row row-pb-lg product-detail-wrap">
            <div class="col-sm-8">
                <div>
                    <img src="{{asset($oPorduct->image)}}">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="product-desc">
                    <h3>{{$oPorduct->name}}</h3>
                    <p class="price">
                        <span>{{number_format($oPorduct->price)}} VNĐ</span> 
                        
                    </p>
                    
                    <div class="size-wrap">
                        <div class="block-26 mb-2">
                            <h4>Size</h4>
                    <select class="w-100" id="select_size">
                            <option value="0">Vui lòng chọn size</option>
                        @foreach($oPorduct->productdetails as $key => $size)
                                <option value="{{$size->id}}">{{$size->size}}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="block-26 mb-4">
                        <h4>Tình Trạng</h4>
                        <p id="status_size" data-quantity="0">Vui lòng chọn size</p>
                    </div>
                    </div>
            <div class="input-group mb-4">
                <span class="input-group-btn">
                    <button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                <i class="icon-minus2"></i>
                    </button>
                    </span>
                <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                <span class="input-group-btn ml-1">
                    <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                    <i class="icon-plus2"></i>
                </button>
                </span>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                            <p class="addtocart"><a href="{{ Auth::check() ? 'javascript:void(0)' : route('login') }}" class="btn btn-primary {{ Auth::check() ? 'add-to-cart' : '' }} btn-addtocart text-white"><i class="icon-shopping-cart"></i> Thêm Vào Giỏ Hàng</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-12 pills">
                        <div class="bd-example bd-example-tabs">
                          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Thông tin sản phẩm</a>
                            </li>
                          </ul>
                          <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane border fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                              {!!$oPorduct->description!!}
                            </div>
                          </div>
                        </div>
                 </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script_home')
<script>
     $(document).ready(function(){
        @if(Session::has('message'))
            @if (Session::get('class') == 'error')
                toastr.error('{{ Session::get('message') }}')
            @else
                toastr.success('{{ Session::get('message') }}')
            @endif
        @endif
         
     })
</script>
<script>
    var _token = '{{ csrf_token() }}'
    $(document).ready(function(){
    var quantity=0;
        $('.quantity-right-plus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());
            
            // If is not undefined
                
               
                currentQuantity = $('#status_size').attr('data-quantity')
                
                if( (quantity + 1) <= currentQuantity ){
                    $('#quantity').val(quantity + 1);
                }
                
                // Increment
            
        });
            $('.quantity-left-minus').click(function(e){
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());
            
            // If is not undefined
            
                // Increment
                if(quantity>0){
                    $('#quantity').val(quantity - 1);
                }
        });
        $('#select_size').on('change', function(){
            var id = $(this).val()
            if(id <= 0){
                $('#status_size').text('Vui lòng chọn size')
            }
            else{
                $.ajax({
                url: '{{ route("home.product.getSize") }}',
                method: 'GET',
                data:{
                    id : id
                },
                success: function (result) {
                    if(result.quantity > 0){
                        $('#status_size').text('Còn ' + result.quantity + ' sản phẩm')
                        $('#status_size').attr('data-quantity', result.quantity)
                    }
                    else{
                        $('#status_size').text('Size hiện tại đã hết hàng')
                    }
                }
            })
            }
            
        })
        $('.add-to-cart').on('click', function(){
            var quantity = $('#quantity').val(),
                sizeId = $('#select_size').val(), 
                productId = '{{$oPorduct->id}}'
            if(sizeId <= 0){
                toastr.clear()
                toastr.error('Vui Lòng chọn size')
            }else{
                $.ajax({
                    url: '{{ route("home.product.addCart") }}',
                    method: 'POST',
                    data:{
                        sizeId : sizeId,
                        productId : productId,
                        quantity : quantity,
                        _token : _token
                    },
                    success: function (result) {
                        toastr.clear()
                        toastr.success('Thêm vào giỏ hàng thành công')
                    },
                    error: function (errors) {
                        toastr.clear()
                    }
                        
                })
            }
        })
        
    });
</script>
@endsection