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
                    
                   
                 </tr>
             </thead>
             <tbody class="list">
              @foreach($restraunts as $restraunt)
              
                 <tr>
                     <th> {{$loop->iteration}}</th>
                     <th scope="row">
                         <div class="media align-items-center">
                            
                             <div class="media-body">
                                <a href="bill-by-date/{{$restraunt->id}}" ><span class="name mb-0 text-sm text-uppercase">{{$restraunt->name}}</span></a>
                             </div>
                         </div>
                     </th>
                  
                  
              
                 </tr>
             
                 @endforeach
             </tbody>
         </table>
     </div>
     
     </div>
 
 




@stop