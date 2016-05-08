@extends('layouts.front')
@section('content')





    <div class="row" ng-controller="ListCtrl as products">
        <ul class="list-group list-inline product-list-ul">
            <li class="list-group-item" ng-repeat="product in products.products">
                <div class="product-div">
                    <p class="product-title">@{{ product.name }}</p>
                    <p>
                        <img src="http://fakeimg.pl/200x200/">
                    </p>
                    <span>
                        <a href="javascript:;" class="btn btn-info btn-sm"
                            ng-click="products.getDetail( product.slug )"
                        >
                            Details
                        </a>
                        <a href="#/product/@{{ product.slug }}" class="btn btn-success btn-sm">
                            Add To Cart
                        </a>
                    </span>

                    
                </div>
            </li>

        </ul>

    </div>
@stop