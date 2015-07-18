<form class="form" id="search-form" method="POST">

    <input type="text" class="form-control input-sm" name="name" id="search" placeholder="the veranda...">
    <div class="search-controls">
     <button type="submit" id="search-btn" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-search"></i>&nbsp;Search</button>
        <a role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            <i class="glyphicon glyphicon-equalizer"></i>&nbsp;Advance Filter
        </a>
    </div>


    <div class="collapse" id="collapseExample">
        <div class="well">
           <div class="form-group">
           <label for="bedrooms" class="control-label">no. of bedrooms:</label>
           <input type="text" class="form-control input-sm" name="bedrooms" id="bedrooms" placeholder="5">
         </div>
        <div class="form-group">
            <label for="bathrooms" class="control-label">no. of bathrooms:</label>
            <input type="text" class="form-control input-sm" name="bathrooms" id="bathrooms" placeholder="2">
        </div>
        <div class="form-group">
            <label for="storeys" class="control-label">no. of storeys:</label>
            <input type="text" class="form-control input-sm" name="storeys" id="storeys" placeholder="2">
        </div>
        <div class="form-group">
            <label for="garages" class="control-label">no. of garages:</label>
            <input type="text" class="form-control input-sm" name="garages" id="garages" placeholder="2">
        </div>
        <div class="form-group">
            <label for="lower_price" class="control-label">price range:</label>
            <div class="form-inline">
                <input type="text" class="price-range form-control input-sm" name="lower_price" id="lower_price" placeholder="100000"> -
                <input type="text" class="price-range form-control input-sm" name="higher_price" id="higher_price" placeholder="500000">
            </div>


        </div>

        </div>
    </div>
</form>