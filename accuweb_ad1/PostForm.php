<form method="POST" enctype="multipart/form-data" action="save_post.php" id="postForm">
    <?php if ($isEdit): ?>
        <input type="hidden" name="id" value="<?= htmlspecialchars($post['id']) ?>">
    <?php endif; ?>

    <div class="form-group">
        <label>Post Title</label>
        <input type="text" name="title" class="form-control" required 
               value="<?= $isEdit ? htmlspecialchars($post['title']) : '' ?>">
    </div>

    <div class="form-group">
        <label>Slug (Unique)</label>
        <input type="text" name="slug" class="form-control" required 
               value="<?= $isEdit ? htmlspecialchars($post['slug']) : '' ?>">
    </div>

    <div class="form-group">
        <label>Description</label>
        <textarea name="description" id="description" class="form-control"><?= $isEdit ? htmlspecialchars($post['description']) : '' ?></textarea>
    </div>

    <div class="form-group">
        <label>Meta Description</label>
        <textarea name="meta_description" class="form-control"><?= $isEdit ? htmlspecialchars($post['meta_description']) : '' ?></textarea>
    </div>

    <div class="form-group">
        <label>Meta Keywords</label>
        <input type="text" name="meta_keywords" class="form-control" placeholder="keyword1, keyword2, keyword3" 
               value="<?= $isEdit ? htmlspecialchars($post['meta_keywords']) : '' ?>">
    </div>

    <div class="form-group">
        <label>Post Image</label>
        <input type="file" name="image" class="form-control">
        <?php if ($isEdit && !empty($post['image'])): ?>
            <p>Current Image: <img src="../uploads/<?= htmlspecialchars($post['image']) ?>" width="100"></p>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="draft" <?= $isEdit && $post['status'] == 'draft' ? 'selected' : '' ?>>Draft</option>
            <option value="published" <?= $isEdit && $post['status'] == 'published' ? 'selected' : '' ?>>Published</option>
        </select>
    </div>

    <div class="form-group">
        <label>Category</label>
        <input type="text" name="category" class="form-control" required 
               value="<?= $isEdit ? htmlspecialchars($post['category']) : '' ?>">
    </div>

    <button type="submit" class="btn btn-success"><?= $isEdit ? 'Update Post' : 'Add Post' ?></button>
</form>