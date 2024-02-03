<div class="modal" tabindex="-1" role="dialog" id="addaccA">
  <div class="modal-dialog modal-lg " role="document">
    <div class="modal-content" style="width:100%;">
      <div class="modal-header">
        <h5 class="modal-title"> Add Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-content">
<div class="modal-body">

<div class="row">
          <div class="col-3">
            <label>Fullname:</label>
            <input type="text" id="fname" class="form-control" autocomplete="off">
          </div>
          <div class="col-3">
            <label>Username:</label>
            <input type="text" id="username" class="form-control" autocomplete="off">
          </div>
           <div class="col-3">
            <label>Role:</label>
             <input type="text" id="role" class="form-control" autocomplete="off" disabled value="<?= htmlspecialchars($_SESSION['role']); ?> ">
            </div>
          <div class="col-3">
            <label>Password:</label>
            <input type="password" id="password" class="form-control" autocomplete="off">
          </div>

</div>
<div class="modal-footer justify-content-between">
<button type="button" class="btn btn-primary" onclick="save_data()">Save changes</button>
</div>
</div>


    </div>
  </div>
</div>
</div>