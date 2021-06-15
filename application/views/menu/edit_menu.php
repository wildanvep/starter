<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <form action="<?= base_url('menu/updateMenu/' . $menu['id']); ?>" method="POST">
                <div class="form-group">
                    <label for="formGroupExampleInput">Menu Name</label>
                    <input type="text" class="form-control" id="menu" name="menu" value="<?= $menu['menu'] ?>">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->