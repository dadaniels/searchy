@extends('master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron">
              <h1>Hello Searchy!</h1>
              <p>Available Search for Now is Property Search...</p>
                 <form class="form-inline">
                   <div class="form-group">
                     <input type="text" class="form-control input-lg" id="search" placeholder="the veranda...">
                   </div>
                   <button type="submit" class="btn btn-lg btn-success">Search</button>
                 </form>
            </div>
        </div>
    </div>

    <div class="row result-row">
    <div class="col-md-8 col-md-offset-2">
        <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
        </table>
    </div>
    </div>
</div><!--/.container-->

@stop