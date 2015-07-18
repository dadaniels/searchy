@extends('master')

@section('content')

@include('handlebars.property')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron">
              <h1>Hello from Searchy!</h1>
              <p>Available Search for Now is Property Search...</p>
                 <form class="form-inline" id="search-form" method="POST">
                   <div class="form-group custom-form-group">
                     <input type="text" class="form-control input-lg" name="name" id="search" placeholder="the veranda...">
                   </div>

                   <button type="submit" id="search-btn" class="btn btn-lg btn-success">Search</button>

                 <a role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                   Advance Filter
                 </a>

                 <div class="collapse" id="collapseExample">
                   <div class="well form-inline">
                        <div class="form-group">
                            <input type="email" class="form-control input-sm" name="bedrooms" placeholder="number of bedrooms...">
                        </div>
                         <div class="form-group">
                            <input type="email" class="form-control input-sm" name="bathrooms" placeholder="number of bathrooms...">
                        </div>
                         <div class="form-group">
                            <input type="email" class="form-control input-sm" name="storeys" placeholder="number of storeys...">
                        </div>
                         <div class="form-group">
                            <input type="email" class="form-control input-sm" name="garages" placeholder="number of garages...">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control input-sm" name="lower_price" placeholder="lower price...">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control input-sm" name="higher_price" placeholder="higher price...">
                        </div>
                   </div>
                 </div>

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