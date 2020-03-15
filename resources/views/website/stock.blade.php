@extends('layout')


@section('content')
<div class="container mt-5">

   <a href="/"> <button class="btn btn-info">Back</button></a>
<div class="table-responsive">
    <div>
        <table class="table align-items-center">
            <thead class="thead-light">
                <tr>
                    <th scope="col" class="sort" data-sort="name">Product</th>
                    <th scope="col" class="sort" data-sort="budget">Remaining</th>
                    <th scope="col" class="sort" data-sort="status">Date</th>
                    <th scope="col">Actions</th>
                    <th scope="col" class="sort" data-sort="completion">Completion</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="list">
                
                <tr>
                    <th scope="row">
                        <div class="media align-items-center">
                           
                            <div class="media-body">
                                <span class="name mb-0 text-sm">Tomato</span>
                            </div>
                        </div>
                    </th>
                    <td class="budget">
                       10Kg
                    </td>
                    <td>
                        <span class="badge badge-dot mr-4">
                         
                          <span class="status">11-03-2020</span>
                        </span>
                    </td>
                    <td>

                        <button class="btn btn-primary">
                            Update
                        </button>

                    </td>
               
                    <td>
                        <span class="badge badge-success">In Stock </span>
                    </td>
             
                </tr>
            
            </tbody>
        </table>
    </div>
    
    </div>







@stop