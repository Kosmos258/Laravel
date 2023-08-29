<?php foreach ($news as $n) : ?>

  <div style="border: 1px solid green">
    <h2><?= $n['tittle'] ?></h2>
    <p><?= $n['decscription'] ?></p>
    <div>
      <strong><?= $n['author'] ?> (<?= $n['created_at'] ?>)</strong>
      <a href="<?= route('news.show', ['id' => $n['id']]) ?>">Далее</a>
    </div>
  </div>

<?php endforeach; ?>