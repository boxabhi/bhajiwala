@extends('layout')


@section('content')

<div class="container mt-5">

    <a href="/"> <button class="btn btn-info">Back</button></a>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
        Add new vegetable
      </button>
 <div class="table-responsive">
     <div>
         <table class="table align-items-center mt-5">
             <thead class="thead-light">
                 <tr>
                     <th scope="col" class="sort" data-sort="name">Product name</th>
                     <th scope="col" class="sort" data-sort="budget">Prodcut Price</th>
                     <th scope="col" class="sort" data-sort="budget">Quantity</th>
                     <th scope="col" class="sort" data-sort="status">Edit Price</th>
                     <th scope="col" class="sort" data-sort="status">Edit Quantity</th>
                     <th scope="col">Stock</th>
                     <th scope="col"></th>
                     <th scope="col"></th>
                 </tr>
             </thead>
             <tbody class="list">
              @foreach($vegetables as $vegetable)
                 <tr>
                     <th scope="row">
                         <div class="media align-items-center">
                            
                             <div class="media-body">
                                 <span class="name mb-0 text-sm text-uppercase">{{$vegetable->vegetable}}</span>
                             </div>
                         </div>
                     </th>
                  
                     <td>
                         <span class="badge badge-dot mr-4">
                          
                           <span class="status">{{$vegetable->price}}</span>
                         </span>
                     </td>

                     <td>
                      <span class="badge badge-dot mr-4">
                       
                        <span class="status">{{$vegetable->quatity}}</span>
                      </span>
                  </td>
                     <td>
                     <button type="button"  onclick="showModal({{$vegetable->price}},{{$vegetable->id}})" value="{{$vegetable->id}}" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                           Edit Price
                        </button>
                     </td>
                

                     <td>
                      <button type="button"  onclick="showModal({{$vegetable->price}},{{$vegetable->id}})" value="{{$vegetable->id}}" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                            Edit Quantity
                         </button>
                      </td>
                 
                     <td>
                        @if($vegetable->quatity > 0)
                         <span class="badge badge-success">In Stock </span>
                        @elseif($vegetable->quatity < 10 )
                        <span class="badge badge-warning">Warning </span>
                        @else
                        <span class="badge badge-danger">Out of Stock </span>
                        @endif
                     </td>
              
                 </tr>
             
                 @endforeach
             </tbody>
         </table>
     </div>
     
     </div>
 
 

     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Change Price</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               
                <div class="p-4 bg-secondary">
                    <form action="{{url('/update/Vegetable')}}" method="post">
                      <input type="hidden" value="{{csrf_token()}}" name="_token" />
                      <label>Old price</label>
                      <input type="text" name="id" id="data" hidden>
                <input type="text" class="form-control form-control-alternative" id="oldprice">
                    
                <label>New price</label>
       <input type="text" name="oldprice" class="form-control form-control-alternative" placeholder="New Price">

              
       
       <button class="btn btn-success mt-3" type="submit">Update</button>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          
            </div>
          </div>
        </div>
      </div>


      <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
                <div class="container">
                <form action="{{url('/create/Vegetable')}}" method="post">
                    <div class="p-4 bg-secondary">
                        <form action="" method="post">
                          <input type="hidden" value="{{csrf_token()}}" name="_token" />
                        <label>Vegetable name</label>
                        <input type="text" name="vegetable" class="form-control form-control-alternative" placeholder="Vegetable name">
                        
                        <label>Vegetable Price</label>
                        <input type="text" name="price" class="form-control form-control-alternative" placeholder="Vegetable price">
                        
                        <label>Vegetable Quantity</label>
                        <input type="text" name="quantity" class="form-control form-control-alternative" placeholder="Vegetable price">
                       
                        
                        <button class="btn btn-success mt-3" type="submit">Add</button>
                        </form>
                    </div>

                </div>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             
            </div>
          </div>
        </div>
      </div>


      <script>
        function showModal(price, data){
        var p = document.getElementById('oldprice');
        p.value = price;
        console.log(price);
            var s = document.getElementById('data');
            s.value= data;
        }

      </script>

@stop