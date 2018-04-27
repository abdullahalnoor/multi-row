
  <div class="modal fade" id="categoryForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header bg-info">
          <h5 class="modal-title" id="exampleModalLabel">Category Form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" id="categoryFrmData" action="{{route('category-store')}}">
          {{csrf_field()}}
          <div class="modal-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" id="name"  placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="status"> select</label>
                    <select class="form-control" name="status" id="status">
                      <option value="1">Active</option>
                      <option value="0">Deactive</option>
                    </select>
                </div>
        </div>
        <div class="modal-footer bg-info">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save </button>
        </div>
        </form>
      </div>
    </div>
  </div>