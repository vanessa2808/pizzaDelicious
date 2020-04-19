@section('content')
    @extends('admin.layouts.master')
@section('title', 'admin')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Đơn hàng</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="justify-content-between d-flex">
                        <h3 class="card-title px-3 align-self-center">Thông tin đơn hàng</h3>
                        <a href="{{ route('admin.orders.editOrders', ['id'=>$idOrders->id])}}" class="btn btn-primary">Cập nhật</a>
                    </div>
                    <div class="card-body d-flex">
                        <div class="col-6">
                            <div> Mã Đơn Hàng : {{$oOrder->id}}</div>
                            <div> Mã Bill : {{$oOrder->tracking_number}}</div>
                            <div> Thanh Toán : 
                                @if($oOrder->payment_type == 1)
                                    Thanh toán khi nhận hàng
                                @else 
                                    Thanh toán qua thẻ tín dụng
                                @endif
                            </div>
                            <div> Trạng thái : {{$oOrder->status->name}}</div>
                        </div>
                        <div class="col-6">
                            <div> Tên người nhận : {{$oOrder->recipient}} - (ID: {{$oOrder->user_id}})</div>
                            <div> Số điện thoại : {{$oOrder->phone_number}}</div>
                            <div> Địa chỉ : {{$oOrder->address}}</div>
                            <div> Tổng tiền : <span class="font-weight-bold">{{number_format($oOrder->total)}}</span> VND</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Danh sách sản phẩm</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Sản Phẩm</th>
                        <th>Size</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Thành Tiền</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($oOrder->orderdetails as $key => $orderdetail)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$orderdetail->productdetail->product->name}}</td>
                            <td>{{$orderdetail->productdetail->size}}</td>
                            <td>{{$orderdetail->quantity}}</td>
                            <td>{{number_format($orderdetail->price)}}</td>
                            <td>{{number_format($orderdetail->price * $orderdetail->quantity)}}</td>
                            
                            <td>
                                <a href="#" class="btn btn-danger rounded-circle ml-3"><i class="fas fa-trash-alt text-white"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Sản Phẩm</th>
                        <th>Size</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Thành Tiền</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function(){
        $('#example1').DataTable();
        @if(Session::has('message'))
            @if (Session::get('class') == 'error')
                toastr.error('{{ Session::get('message') }}')
            @else
                toastr.success('{{ Session::get('message') }}')
            @endif
        @endif
        
    })
</script>
@endsection
