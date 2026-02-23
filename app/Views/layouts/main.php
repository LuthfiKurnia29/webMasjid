<?= view('layouts/header', ['title' => $title ?? 'Masjid An Namiroh Firdaus']) ?>

<?= $this->renderSection('content') ?>

<?= view('layouts/footer') ?>

