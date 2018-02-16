<div id="addtodoItemForm" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="addtodoItemForm" aria-hidden="true">
    <div class="modal-dialog modal-simple">
      <form class="modal-content form-horizontal" role="form" action="#" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="moadl-title">Create New To Do Item</h4>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <label class="col-sm-2 form-control-label" for="title">Title:</label>
            <div class="col-sm-10">
              <input id="title" class="form-control" type="text" name="title">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 form-control-label" for="dueDate">Due Date</label>
            <div class="col-sm-10">
              <div class="input-group">
                <input id="dueDate" class="form-control" type="text" data-plugin="datepicker" data-container="#addtodoItemForm">
                <span class="input-group-addon">
                  <i class="icon wb-calendar" aria-hidden="true"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 form-control-label" for="people">People:</label>
            <div class="col-sm-10">
              <select id="people" multiple="multiple" class="plugin-selective">
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="form-actions">
            <button class="btn btn-primary" data-dismiss="modal" type="button">
              Add This Item
            </button>
            <a class="btn btn-sm btn-white" data-dismiss="modal" href="javascript:void(0)">
            Cancel
          </a>
          </div>
        </div>
      </form>
    </div>
  </div>