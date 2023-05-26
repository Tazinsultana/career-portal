@extends('backend.layouts.app')
@section('content')
    <div class="d-flex justify-content-end pt-3 pb-1 p-3 ">
        <a class="btn btn-primary px-3" href="{{ route('admin.cvs.create') }}">Create</a>

    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">CV List</h3>

                    
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-2">
                    <table class="table table-hover text-nowrap" id="datatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Version</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cvs as $cv)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $cv->title }}</td>
                                    <td>{{ $cv->version }}</td>
                                    <td>
                                        @if ($cv->is_active)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                         
                                            <a href="{{ route('admin.cvs.show',  $cv->id) }}" class="btn btn-sm btn-success px-3">Show</a>
                                           
                                            <a href="{{ route('admin.cvs.edit', $cv->id) }}" class="btn btn-sm btn-warning px-3 mx-1">Edit</a>
                                            <form action="{{ route('admin.cvs.destroy', $cv->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger px-3">Delete</button>
                                            </form>
                                        </div>


                                    </td>
                                </tr>
                            @endforeach



                        </tbody>
                    </table>
                </div>
               
            </div>
      
        </div>
    </div>
@endsection
