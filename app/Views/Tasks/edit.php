<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?><?= $task['title'] ?><?= $this->endSection() ?>

<?= $this->section("content") ?>

    <h1>Task Edit</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach (session('errors') as $item): ?>
            <li><?= $item ?></li>
        <?php endforeach; ?>
    </ul>

<?php endif ?>

<?= form_open('tasks/update/' . $task['id']) ?>

<div>
    <label for="title">Title</label>
    <input type="text" name="title" id="title" required value="<?=old('title', isset($task['title']) ? $task['title'] : '') ?>">
</div>
<div>
    <label for="description">Description</label>
    <textarea name="description" id="description" required><?=old('description', isset($task['description']) ? $task['description'] : '') ?></textarea>
</div>
<div>
    <label for="created_at">Created At</label>
    <input type="datetime-local" name="created_at" id="created_at" required value="<?= $task['created_at'] ?>">
</div>

<button type="submit">Save</button>

<?= form_close() ?>

<?= $this->endSection() ?>








