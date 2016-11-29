@extends('layout.base')

@section('view')
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="">{{ trans('custom.home') }}</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="/products">{{ trans('products.titles.index') }}</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>{{ trans('products.titles.edit') }}</span>
        </li>
    </ul>
</div>

<h3 class="page-title">
    {{ trans('products.titles.edit') }}
</h3>

<div class="row">
    <div class="col-md-12">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption"></div>
                <div class="tools"></div>
            </div>
            <div class="portlet-body form">
                <form action="/products/update" method="post" id="form_products" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">
                                {{ trans("products.fields.rfc") }} <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="rfc" value="{{$product->rfc}}" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">
                                {{ trans("products.fields.name") }} <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="name" value="{{$product->name}}" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">
                                {{ trans("products.fields.quantity") }} <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="quantity" value="{{$product->quantity}}" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">
                                {{ trans("products.fields.price") }} <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="price" value="{{$product->price}}" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">
                                {{ trans("products.fields.total") }} <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="total" value="{{$product->total}}" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-3" style="text-align: left;">
                                <a href="/products" class="btn default">{{ trans('products.buttons.cancel') }}</a>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-3" style="text-align: right;">
                                <button type="submit" class="btn green">{{ trans('products.buttons.update') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@section('javascript_page')
<script>
    jQuery(document).ready(function($) {
        var app = new Admin();

        var rules = {
            rfc: {
                required: true,
                maxlength: 13,
                minlength: 12
            },
            name: {
                required: true
            },
            quantity: {
                required: true
            },
            price: {
                required: true
            },
            total: {
                required: true
            }
        };

        var messages = {
            rfc: {
                required: "<?php echo trans("products.validations.required") ?>",
                maxlength: "<?php echo trans("products.validations.maxlength") ?>",
                minlength: "<?php echo trans("products.validations.minlength") ?>"
            },
            name: {
                required: "<?php echo trans("products.validations.required") ?>"
            },
            quantity: {
                required: "<?php echo trans("products.validations.required") ?>"
            },
            price: {
                required: "<?php echo trans("products.validations.required") ?>"
            },
            total: {
                required: "<?php echo trans("products.validations.required") ?>"
            }
        };

        app.formValidate('#form_products', rules, messages);
    });
</script>
@stop