@extends('master')

@section('content')

@include('handlebars.property')

<div class="container">
    <div class="row">

        <div class="col-md-4">
            <div class="jumbotron">
              <h1>Searchy!</h1>
                 @include('chunks.search')
            </div>
        </div>
        <div class="col-md-8">
        <div class="panel panel-default">
              <div class="panel-heading clearfix">
                <h3 class="panel-title pull-left"><i class="glyphicon glyphicon-home"></i>&nbsp;Property List</h3>
                 <img src="assets/images/ajax-loader-black.gif" class="pull-right" id="quick-loader" alt=""/>
              </div>
              <div class="panel-body">
                <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>Property Name</th>
                              <th>Price</th>
                              <th>Bedrooms</th>
                              <th>Bathroom</th>
                              <th>Storeys</th>
                              <th>Garages</th>
                            </tr>
                          </thead>
                          <tbody id="properties"></tbody>
                    </table>
              </div>
            </div>


        </div>

    </div>

</div><!--/.container-->

@stop