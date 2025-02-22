<?php require "views/partials/head.php"; ?>
<?php require "views/partials/nav.php"; ?>
<?php require "views/partials/banner.php"; ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <?php foreach ($notes as $note): ?>
            <a href="/note?id=<?= "{$note['id']}"; ?>" class="text-blue-500 hover:text-red-500">
                <p><?= htmlspecialchars($note['body']) ?></p>
            </a>
        <?php endforeach ?>
    </div>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <p class="bg-red-500 text-white w-fit p-2 rounded-lg hover:bg-red-700 hover:scale-[1.05] transition-transform duration-200">
            <a href="/notes/create">Create Note</a>
        </p>
    </div>
</main>

<?php require "views/partials/foot.php"; ?>