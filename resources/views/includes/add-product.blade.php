<div class="modal fade" id="add-product" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="async" action="/add-product" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input type="text" placeholder="Product Name" name="name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input type="number" placeholder="Price" name="price" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <input type="number" placeholder="Downloads" name="downloads" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
