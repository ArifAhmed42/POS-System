@extends('layouts.app')

@section('content')




<div class = "container">

    <div class ="row">
        <div class = "col-12">
        <form action="{{ route('contacts.update', $product->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                        
                                        <div class="form-group">
                                        <label for="product_name">Product Name</label>
                                        <input required type="text" name="product_name" class="form-control" id="product_name"  aria-describedby="emailHelp" placeholder="Enter Product Name">
                                    
                                    </div>

                                <input type="hidden"></input>

                                    <div class="form-group">
                                        <label for="product_inventory">Product Quantity</label>
                                        <input required type="int" name="product_inventory" class="form-control" id="product_inventory"  aria-describedby="emailHelp" placeholder="Enter Product Quantity">
                                    </div>

                                    <div class="form-group">
                                        <label for="productImage">Upload Product Image</label>
                                        <input type="file" class="form-control-file" id="productImage">
                                    </div>

                                    <button type="submit" class="btn btn-primary mb-4">Edit</button>
                            
                            </form>

        </div>
    
    </div>

</div>



@endsection