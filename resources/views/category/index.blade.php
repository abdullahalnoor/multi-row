@extends('welcome')

@section('content')
  <div class="row justify-content-center">
    <div class="col-md-8 mt-5">
      <div class="row mb-2">
        <div class="col-md-12">
          <form method="POST" action="{{route('category-select-delete')}}">
            {{csrf_field()}}
                      <button type="submit" onClick="confirm('Delete entry?')"
                      class="btn btn-danger">
                          <i class="fa fa-trash"></i> Delete All
                        </button>
                      <button type="button" id="addCategory" class="btn btn-info float-right">
                        <i class="fa fa-plus"></i> Add New
                      </button>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col-md-12">
                      <table class="table table-light text-center">
                          <thead>
                            <tr>
                              <th scope="col">#Id</th>
                              <th scope="col">Checked</th>
                              <th scope="col">Name</th>
                              <th scope="col">Status</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          @if($category->count())
                          <tbody>
                            @foreach($category as $item)
                            <tr>
                              <td>{{$item->id}}</td>
                              <td><input name="category_id[]" value="{{$item->id}}" type="checkbox"></td>
                              <td>{{$item->name}}</td>
                              <td>{{$item->status == 1 ? 'Active':'Deactive'}}</td>
                              <td>
                                <a  href="{{route('category-edit',$item->id)}}" class="btn btn-warning">
                                  <i class="fa fa-edit"></i> Edit
                                </a>
                                <a onClick="confirm('Delete entry?')"
                                href="{{route('category-delete',$item->id)}}" class="btn btn-danger">
                                    <i class="fa fa-trash"></i> Delete
                                  </a>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                          @else
                            <tbody class="text-center">
                              <tr>
                                  <td colspan="4">
                                    <h1 class="bg-danger">No Record Found..</h1>
                                  </td>
                              </tr>
                            </tbody>
                          @endif
                        </table>    
            </form>
              <div class="text-center">
                {{ $category->links() }}
              </div>
        </div>
      </div>
    </div>
  </div>
  <div id="modals">

  </div>
@endsection
