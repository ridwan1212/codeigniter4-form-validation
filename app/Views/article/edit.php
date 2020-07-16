<?= $this->extend('templates/template'); ?>

<?= $this->section('main-content'); ?>
<div class="container">

  <!-- page heading -->
  <div class="d-sm-flex align-item-center justify-content-between mt-3 mb-4">
    <h1 class="h3 mb-4"><?= $pageTitle; ?></h1>
  </div>

  <div class="row">
    <div class="col-xl-12 mb-3">

      <!-- form -->
      <form action="/article/update" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="form-group my-3">
          <label for="id"></label>
          <input type="hidden" class="form-control " name="id" value="<?= $forEdit['id']; ?>">
        </div>

        <div class="form-group my-3">
          <label for="oldImage"></label>
          <input type="hidden" class="form-control" name="oldImage" value="<?= $forEdit['preview_image']; ?>">
        </div>

        <div class="form-group my-3">
          <label for="author">Author</label>
          <input type="text" class="form-control <?= ($validation->hasError('author')) ? 'is-invalid' : ''; ?>" name="author" value="<?= $forEdit['author']; ?>">
          <div class="invalid-feedback">
            <?= $validation->getError('author'); ?>
          </div>
        </div>

        <div class="form-group my-3">
          <label for="title">Title</label>
          <input type="text" class="form-control <?= ($validation->hasError('title')) ? 'is-invalid' : ''; ?>" name="title" value="<?= $forEdit['title']; ?>">
          <div class="invalid-feedback">
            <?= $validation->getError('title'); ?>
          </div>
        </div>
        <div class="form-group my-3">
          <label for="description">Description</label>
          <input type="text" class="form-control <?= ($validation->hasError('description')) ? 'is-invalid' : ''; ?>" name="description" value="<?= $forEdit['description']; ?>">
          <div class="invalid-feedback">
            <?= $validation->getError('description'); ?>
          </div>
        </div>
        <div class="form-group my-3">
          <label for="last_update"></label>
          <input type="hidden" class="form-control" name="last_update" value="<?= date('D, d M Y H:i:s'); ?>">
        </div>

        <div class="form-group my-3">
          <label for="content">Content</label>
          <textarea type="text" class="form-control <?= ($validation->hasError('content')) ? 'is-invalid' : ''; ?>" name="content" rows="7"><?= $forEdit['content']; ?></textarea>
          <div class="invalid-feedback">
            <?= $validation->getError('content'); ?>
          </div>
        </div>
        <button type="button" class="btn btn-secondary" onclick="window.location.href='<?= base_url('article'); ?>'">Back</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>

    </div>
  </div>
</div>

<?= $this->endSection(); ?>