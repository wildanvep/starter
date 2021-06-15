<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">

            <?= form_error('title', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('menu_id', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('url', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('icon', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('is_active', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <form action="<?= base_url('menu/updateSubMenu/' . $subMenu['id']); ?>" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Sub Menu Title" value="<?= $subMenu['title'] ?>">
                </div>
                <div class="form-group">
                    <select name="menu_id" id="menu_id" class="form-control">
                        <option value="">Select Menu</option>
                        <?php foreach ($menu as $m) : ?>
                            <?php if ($m['id'] == $subMenu['menu_id']) : ?>
                                <option value=" <?= $m['id'] ?>" selected><?= $m['menu'] ?></option>
                            <?php else : ?>
                                <option value=" <?= $m['id'] ?>"><?= $m['menu'] ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="url" name="url" placeholder="Sub Menu URL" value="<?= $subMenu['url'] ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="icon" name="icon" placeholder="Sub Menu Icon" value="<?= $subMenu['icon'] ?>">
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_active" id="is_active" value="1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Active
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_active" id="is_active" value="0">
                        <label class="form-check-label" for="exampleRadios1">
                            Not Active
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->