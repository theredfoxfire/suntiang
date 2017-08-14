<div class="modal fade" id="modal-delete" tabIndex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          ×
        </button>
        <h4 class="modal-title">Please Confirm</h4>
      </div>
      <div class="modal-body">
        <p class="lead">
          <i class="fa fa-question-circle fa-lg"></i>
          Are you sure you want to delete this item?
        </p>
      </div>
      <div class="modal-footer">
        <form method="POST" id="deleteForm">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="_method" value="DELETE">
          <button type="button" class="btn btn-default"
                  data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-danger">
            <i class="fa fa-times-circle"></i> Yes
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
