@extends('admin.layouts')

@push('styles')
@endpush

@push('scripts')


@endpush

@push('page_scripts')

@endpush

@section('content')

<div class="page">
  <div class="page-header">
    <h1 class="page-title"> Unit List</h1>
    <div class="page-header-actions">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Unit</a></li>
      </ol>
    </div>
  </div>
  <div class="page-content">

    <div class="site-action">
          <a class="site-action-toggle btn-raised btn btn-success btn-floating waves-effect waves-classic"
		  href="{{ url('admin/unit/create')}}"> 
            <i class="front-icon md-plus animation-scale-up" aria-hidden="true"></i>
          </a> 
   </div>



    <!-- Panel -->
    <div class="panel">
      <div class="panel-body container-fluid">

        <table class="table table-bordered ">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
			  <th class="text-nowrap">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($unit as $rsunit)
            <tr>
              <td scope="row">{{ $rsunit->id }}</td>
              <td> {{ $rsunit->name }} </td> 
               <td class="text-nowrap">
                   <a href="{{ url('admin/unit') }}/{{$rsunit->id}}/edit" > Edit<i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                    <a href="javascript:void(0);" onclick="$(this).find('form').submit();" >Delete <i class="fa fa-close text-danger"></i>
                     <form action="{{ url('admin/unit') }}/{{$rsunit->id}}" method="post">
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      </form>
                                                    </a>
               </td>
            </tr>
            @endforeach

          </tbody>
        </table>
 {{ $unit->links() }}
      </div>
    </div>
    <!-- End Panel -->

  </div>
</div>

@endsection