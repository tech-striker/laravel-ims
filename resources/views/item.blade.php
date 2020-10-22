<!DOCTYPE html>
<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
    <script src="{{ asset('public/js/multiselect.js') }}"></script>
    <script src="{{ asset('public/js/custom.js') }}"></script>
</head>


<div clas="data_wrapper">
    <div class="container">
        <h1>Items Management Page</h1>
        <div class="inner_wrapper">
            <div class="row">
                <div class="col-xs-12 add-item">
                    <div class="main_iteem_value">
                        <div class="item_data">
                            <input type="text" name="name" id="name" class="item-input">
                            <input type="submit" id="add" class="btn btn-success" value="Add">
                        </div>
                        <h2>Selected Items:</h2>
                    </div>
                </div>
                <div class="col-xs-5">
                    <select name="from" id="multiselect" class="form-control" size="8" >
                        @foreach ($data as $user)
                        @if ($user->column == 1)
                        <option value="{{$user->name}}">{{$user->name}}</option>
                        @endif
                        @endforeach

                    </select>
                </div>
                <div class="col-xs-2 control-arrow">
                    
                    <button type="button" id="multiselect_rightSelected" class="btn btn-block"><i class="glyphicon glyphicon-chevron-right"></i></button>
                    <button type="button" id="multiselect_leftSelected" class="btn btn-block"><i class="glyphicon glyphicon-chevron-left"></i></button>
                    
                </div>
                <div class="col-xs-5">
                    <select name="to" id="multiselect_to" class="form-control" size="8" >
                        @foreach ($data as $user)
                        @if ($user->column == 2)
                        <option value="{{$user->name}}">{{$user->name}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
