@section('content')

    @extends('page.layouts.master1')
<script type="text/css">
    .table>tbody>tr>td, .table>tfoot>tr>td{
        vertical-align: middle;
    }
    @media screen and (max-width: 600px) {
        table#cart tbody td .form-control{
            width:20%;
            display: inline !important;
        }
        .actions .btn{
            width:36%;
            margin:1.5em 0;
        }

        .actions .btn-info{
            float:left;
        }
        .actions .btn-danger{
            float:right;
        }

        table#cart thead { display: none; }
        table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
        table#cart tbody tr td:first-child { background: #333; color: #fff; }
        table#cart tbody td:before {
            content: attr(data-th); font-weight: bold;
            display: inline-block; width: 8rem;
        }



        table#cart tfoot td{display:block; }
        table#cart tfoot td .btn{display:block;}

    }
</script>

    <div class="container" style="background-color: white">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
            <tr>

                <th style="width:50%">Product</th>
                <th style="width:10%">Price</th>
                <th style="width:8%">Quantity</th>
                <th style="width:22%" class="text-center">Subtotal</th>
                <th style="width:10%"></th>

            </tr>
            </thead>
            @foreach($pizza as $key => $pizza)

            <tbody>
            <tr>

                <td data-th="Product">
                    <div class="row">

                        <div class="col-sm-2 hidden-xs"><img src="{{asset($pizza->image)}}" alt="..." class="img-responsive"/></div>
                        <div class="col-sm-10">
                            <h4 class="nomargin">{{$pizza->name}}</h4>
                            <p>{{$pizza->description}}</p>
                        </div>
                    </div>
                </td>
                <td data-th="Price">{{$pizza->price}}</td>
                <td data-th="Quantity">
                    <input type="number" class="form-control text-center" value="1">
                </td>
                <td data-th="Subtotal" class="text-center">{{$pizza->price}}</td>
                <td class="actions" data-th="">
                    <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                    <button  class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                </td>
            </tr>
            </tbody>
            @endforeach
            <tfoot>
            <tr class="visible-xs">
                <td class="text-center"><strong></strong>{{number_format($pizza->price)}}</td>
            </tr>
            <tr>
                <td><a href="/menu" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong>16</strong></td>
                <td><a href="/checkout/cartId={id}" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
            </tr>
            </tfoot>
        </table>
    </div>




@endsection
