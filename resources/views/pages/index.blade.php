@extends('master')

@section('content')

@include('handlebars.property')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron">
              <h1>Hello from Searchy!</h1>
              <p>Available Search for Now is Property Search...</p>
                 <form class="form-inline">
                   <div class="form-group">
                     <input type="text" class="form-control input-lg" id="search" placeholder="the veranda...">
                   </div>
                   <button type="submit" id="search-btn" class="btn btn-lg btn-success">Search</button>
                   <img src="assets/images/ajax-loader-black.gif" id="quick-loader" alt=""/>
                 </form>
            </div>
        </div>
    </div>

    <div class="row result-row">
        <div class="col-md-8 col-md-offset-2">
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
</div><!--/.container-->

@stop