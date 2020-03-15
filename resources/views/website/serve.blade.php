@extends('layout')


@section('content')

<div class="container mt-5">

    <a href="/"> <button class="btn btn-info">Back</button></a>
 <div class="table-responsive">
     <div>
         <table class="table align-items-center">
             <thead class="thead-light">
                 <tr>
                     <th scope="col">Id</th>
                     <th scope="col" class="sort" data-sort="name">Restraunt name</th>
                    
                     <th scope="col">Actions</th>
                     <th scope="col" class="sort" data-sort="completion">Completion</th>
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
 
                        <button type="button" onclick="showModal({{$restraunt->id}})" value="{{$restraunt->id}}" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                           Manage
                         </button>
 
                     </td>
                
                     <td>
                         <span class="badge badge-success">In Stock </span>
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
              <h5 class="modal-title" id="exampleModalLabel">Manage Restraunt</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
             <div class="container">
                 <form method="post" action="{{route('transaction.store')}}">
                    <input type="hidden"  value="{{csrf_token()}}" name="_token" />
                    <input name="res_id" hidden id="data">
                @foreach($vegetables as $vegetable)
                <div class="row p-2">
                    <div class="col-lg-4 col-sm-3 col-xs-3">
                       
                    <p class="text-uppercase">{{$vegetable->vegetable}}</p>
                    </div>
                    <div class="col-lg-6 col-sm-3 col-xs-3">
                        <input type="text" value="0" class="form-control" name="data[]">
                    </div>
                </div>
                
                @endforeach
                <div class="text-center mt-2">
                    <button class="btn btn-success" type="submit">
                        Submit 
                    </button>
                </div>
            </form>
             </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             
            </div>
          </div>
        </div>
      </div>



      <script>
        function showModal(data){
            console.log(`${data} this is data hurray!`)
            var s = document.getElementById('data');
            s.value= data;
            console.log(data);
        }

      </script>


@stop