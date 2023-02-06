<!-- Modal -->


<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editModalLabel">Edit Post</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="./posts/savepost.php" enctype="multipart/form-data">

        <input type="hidden" id="id" name="id">

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" id="content" class="form-control" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label for="route" class="form-label">Content</label>
                <select name="route" id="route" class="form-control">
                  <option value="">Select...</option>
                  <?php while ($row_route = $route->fetch_assoc()) { ?>
                    <option value="<?php echo $row_route["ID"]; ?>"><?= $row_route["Route"] ?></option>
                  <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="images" class="form-label">Images</label>
                <input type="file" name="images" id="images" class="form-control" accept="images/png">
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