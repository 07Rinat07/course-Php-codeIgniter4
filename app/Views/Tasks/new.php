<?= $this->extend("layouts/default") ?>
<?= $this->section("title") ?>Add task<?= $this->endSection() ?>
<?= $this->section("content") ?>

<h1>Add task</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach (session('errors') as $item): ?>
            <li><?= $item ?></li>
        <?php endforeach; ?>
    </ul>

<?php endif ?>

<?= form_open('tasks/store') ?>

<div>
    <label for="title">Title</label>
    <input type="text" name="title" id="title" required value="<?=old('title', isset($data['title']) ? $data['title'] : '') ?>">
</div>
<div>
    <label for="description">Description</label>
    <textarea name="description" id="description" required><?=old('description', isset($data['description']) ? $data['description'] : '') ?></textarea>
</div>
<div>
    <label for="created_at">Created At</label>
    <input type="datetime-local" name="created_at" id="created_at" required value="<?=old('created_at', isset($data['created_at']) ? $data['created_at'] : '') ?>">
</div>

<button type="submit">Add</button>

<?= form_close() ?>

<?= $this->endSection() ?>

