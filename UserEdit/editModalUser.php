<!-- Modal -->

<div class="modal fade" id="editModalUser" tabindex="-1" aria-labelledby="editModalUserLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editModalUserLabel">Edit User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="./UserEdit/updateUser.php" enctype="multipart/form-data">
        <input type="hidden" id="id" name="id">

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="adress" class="form-label">Adress</label>
                <input type="text" name="adress" id="adress" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="text" name="age" id="age" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select name="role" id="role" class="form-control">
                  <option value="">Select Role</option>
                  <?php while ($row_role = $role->fetch_assoc()) { ?>
                    <option value="<?php echo $row_role["id"]; ?>"><?= $row_role["role"] ?></option>
                  <?php } ?>
                </select>
            </div>
            <div>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i>  Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>