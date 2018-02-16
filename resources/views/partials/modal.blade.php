<div class="modal fade" id="edittodoItemForm" aria-hidden="true" aria-labelledby="edittodoItemForm" role="dialog" tabindex="-1" data-show="false">
    <div class="modal-dialog modal-simple">
      <form class="modal-content form-horizontal" action="#" method="post" role="form">
        <div class="modal-header">
          <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
          <h4 class="modal-title">Edit To Do Item</h4>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <label class="col-sm-2 form-control-label" for="editTitle">Title:
            </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="editTitle" name="editTitle">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 form-control-label" for="editStarts">Due Date:
            </label>
            <div class="col-sm-10">
              <div class="input-group">
                <input type="text" class="form-control" id="editDueDate" name="editDueDate" data-container="#edittodoItemForm" data-plugin="datepicker">
                <span class="input-group-addon">
                  <i class="icon wb-calendar" aria-hidden="true"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 form-control-label" for="editPeople">People:
            </label>
            <div class="col-sm-10">
              <select id="editPeople" multiple="multiple" class="plugin-selective"></select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="form-actions">
            <button class="btn btn-primary" data-dismiss="modal" type="button">Save</button>
            <button class="btn btn-danger" data-dismiss="modal" type="button">Delete</button>
            <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
          </div>
        </div>
      </form>
    </div>
  </div>