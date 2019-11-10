@extends('product.layout')
   
@section('content')
 <div class="row">
  <div class="col-md-8">
    <h4>Product List</h4>
  </div>
  <div class="col-md-4 text-right">
    <a href="{{  route('product.create')  }}" class="btn btn-success mb-2">Add</a> 
  </div>
</div>
 
 <div class="row">
      <div class="col-12">          
        <table class="table table-bordered" id="laravel_crud">
         <thead>
            <tr>
               <th>Id</th>
               <th>Title</th>
               <th>Product Code</th>
               <th>Description</th>
               <th>Created at</th>
               <th colspan="2" class="text-center">Action</th>
            </tr>
         </thead>
         <tbody>
            @if(count($products) > 1)
                @foreach($products as $product)
                <tr>
                   <td>{{ $product->id }}</td>
                   <td>{{ $product->title }}</td>
                   <td>{{ $product->product_code }}</td>
                   <td>{{ $product->description }}</td>
                   <td>{{ $product->created_at }}</td>
               
                   <td class="text-center">
                   <a href="{{  route('product.edit', $product->id)  }}" class="btn btn-primary">Edit</a></td>
                   <td class="text-center">
                   <form action="{{  route('product.destroy', $product->id)  }}" method="post">
                   {{ csrf_field() }}
                   @method('DELETE')
                   <button class="btn btn-danger" type="submit">Delete</button>
                   </form>
                   </td>
                   </tr>
            @endforeach

            @else
              <tr>
               <td colspan="10" class="text-center">There are no product available yet!</td>
              </td>
            </tr>
            @endif
         </tbody>
        </table>
     </div> 
 </div>
 @endsection  