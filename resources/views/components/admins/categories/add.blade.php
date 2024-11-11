<!-- Modal -->
<div class="modal fade" id="addModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5">Add Category</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="save_form">

            <div class="modal-body">
                <div class="form-group mb-3">
                    <label>Category Name</label>
                    <input type="text" id="name" class="form-control" placeholder="Category Name">
                </div>
                <div class="form-group mb-3">
                    <label>Description</label>
                    <input type="text" id="description" class="form-control" placeholder="Description">
                </div>

                <div class="form-group mb-3">
                    <label>Status</label>
                    <select id="status" class="form-select">
                        <option value="">--- Select Status ---</option>
                        <option value="active">Active</option>
                        <option value="inactive">In Active</option>
                    </select>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" id="modal_close" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" onclick="Save()" id="save_btn" class="btn btn-sm btn-primary">Save changes</button>
              </div>
        </form>
      </div>
    </div>
  </div>

  @push('scripts')
  <script>
    async function Save() {

        let name = $("#name").val();
        let description = $('#description').val();
        let status = $('#status').val();


        $("#modal_close").click();
        let formData = new FormData();
        formData.append('name',name);
        formData.append('description', description);
        formData.append('status', status);

        let res = await axios.post('/category-store', formData)
        await getList();



    }
</script>
  @endpush
