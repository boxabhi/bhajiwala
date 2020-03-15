@extends('layout')


@section('content')

<div class="container mt-5">

    <a href="/"> <button class="btn btn-info">Back</button></a>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
        Add Restraunt
      </button>
 <div class="table-responsive">
     <div>
         <table class="table align-items-center mt-5">
             <thead class="thead-light">
                 <tr>
                    <th scope="col" class="sort" data-sort="name">Id</th>
                     <th scope="col" class="sort" data-sort="name">Restraunt name</th>
                     <th scope="col" class="sort" data-sort="budget">Location</th>
                     <th scope="col" class="sort" data-sort="budget">Bill</th>
                    
                     <th scope="col">Actions</th>
                     <th scope="col"></th>
                     <th scope="col"></th>
                 </tr>
             </thead>
             <tbody class="list">
              @foreach($restraunts as $restraunt)
              
                 <tr>
                     <th> {{$loop->iteration}}</th>
                     <th scope="row">
                         <div class="media align-items-center">
                            
                             <div class="media-body">
                                 <span class="name mb-0 text-sm text-uppercase">{{$restraunt->name}}</span>
                             </div>
                         </div>
                     </th>
                  
                     <td>
                         <span class="badge badge-dot mr-4">
                          
                           <span class="status">{{$restraunt->location}}</span>
                         </span>
                     </td>

                     <td>
                      <span class="badge badge-dot mr-4">
                       
                        <span class="status badge badge-success">Download</span>
                      </span>
                  </td>
                     <td>
 
                     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                           Delete
                        
</button>
 
                     </td>
                
             
              
                 </tr>
             
                 @endforeach
             </tbody>
         </table>
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
                <form action="{{url('/create/Restraunt')}}" method="post">
                    <div class="p-4 bg-secondary">
                        <form action="" method="post">
                          <input type="hidden" value="{{csrf_token()}}" name="_token" />
                        <label>Restraunt name</label>
                        <input type="text" name="name"
                         class="form-control form-control-alternative" placeholder="Restraunt name">
                        
                        <label>Restraunt Location</label>
                        <input type="text" name="location" 
                        class="form-control form-control-alternative" placeholder="Restraunt price">
                        
                        
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

   


@stop