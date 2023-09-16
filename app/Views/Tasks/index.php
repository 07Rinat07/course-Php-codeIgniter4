    <?= $this->extend("layouts/default") ?>

    <?= $this->section("title") ?>List of tasks<?= $this->endSection() ?>

    <?= $this->section("content") ?>

        <h1>List of tasks</h1>

   <ul>
       <?php foreach ($tasks as $task): ?>
       <li>
           <?=$task['title'] ?> |
           <?=$task['description'] ?> |
           <?=$task['created_at'] ?>
       </li>
       <?php endforeach ?>
   </ul>

    <?= $this->endSection() ?>







