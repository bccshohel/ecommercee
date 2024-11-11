<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">All Categories</h5>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#addModal" class="btn btn-sm btn-primary">+ Add New</button>
                    </div>
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="tableList">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    getList();
    async function getList() {
        let res = await axios.get("/category-list");
        let myTable = $('#myTable');
        let tableList = $('#tableList');

        // myTable.DataTable().destroy();
        tableList.empty();

        res.data['rows'].forEach(function(item,index){
            let row = `<tr>
                <td>${++index}</td>
                <td>${item['name']}</td>
                <td>${item['description']}</td>
                <td>${item['status']}</td>
                <td>
                    <button id="${item['id']}" class="btn btn-sm btn-success editBtn">Edit</button>
                    <button id="${item['id']}" class="btn btn-sm btn-danger deleteBtn">Delete</button>
                </td>
                </tr>`

                tableList.append(row);
        });

        // new DataTable('$myTable', {
        //     order:[[0,'desc']]
        //     lengthMenu:[5,10,15,20,30]
        // });

    }
</script>
@endpush
