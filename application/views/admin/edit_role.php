<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= form_error('role', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <form action="<?= base_url('admin/updateRole/' . $role['id']); ?>" method="POST">
                <div class="form-group">
                    <label for="formGroupExampleInput">Role Name</label>
                    <input type="text" class="form-control" id="role" name="role" value="<?= $role['role'] ?>">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->