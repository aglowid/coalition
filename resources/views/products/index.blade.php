@extends('layout.base')

@section('view')
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="">{{ trans('custom.home') }}</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>{{ trans('products.titles.index') }}</span>
        </li>
    </ul>
</div>

<!-- BEGIN PAGE TITLE-->
<h3 class="page-title">
    {{ trans('products.titles.index') }}
</h3>
<!-- END PAGE TITLE-->

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption"></div>
                <div class="tools" style="padding: 10px 0 10px;">
					<div class="dt-buttons">
						<a href="/products/create" class="dt-button buttons-print btn default" tabindex="0" aria-controls="sample_2">
							<i class="glyphicon glyphicon-plus"></i>
							<span>{{ trans('products.titles.new') }}</span>
						</a>
					</div>
                </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_2">
                    <thead>
                        <tr>
                            <td style="text-align: center">{{ trans("products.fields.rfc") }}</td>
                        <td style="text-align: center">{{ trans("products.fields.name") }}</td>
                        <td style="text-align: center">{{ trans("products.fields.quantity") }}</td>
                        <td style="text-align: center">{{ trans("products.fields.price") }}</td>
                        <td style="text-align: center">{{ trans("products.fields.total") }}</td>
                            <td style="text-align: center"></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr class="odd gradeX">
                                <td style="text-align: center; vertical-align: middle;">{{$product->rfc}}</td>
                                <td style="text-align: center; vertical-align: middle;">{{$product->name}}</td>
                                <td style="text-align: center; vertical-align: middle;">{{$product->quantity}}</td>
                                <td style="text-align: center; vertical-align: middle;">{{$product->price}}</td>
                                <td style="text-align: center; vertical-align: middle;">{{$product->total}}</td>
                                <td style="width: 100px; text-align: center; vertical-align: middle;">
                                    <a href="/products/{{$product->id}}/edit" class="btn btn-sm yellow-crusta"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="javascript:;" data-id="{{$product->id}}" class="btn btn-sm red deleteModal"><i class="glyphicon glyphicon-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>

@stop

@section('javascript_page')
<script>
    jQuery(document).ready(function($) {
        var app = new Admin();
        app.tableInit('.table', '<?php echo App::getLocale(); ?>');

        $(".deleteModal").on("click", function(){
            app.throwConfirmationModal('<?php echo trans('products.titles.delete'); ?>','<?php echo trans('products.notifications.delete_confirmation'); ?>','/products/delete', $(this).data("id"));
        });
    });
</script>
@stop
