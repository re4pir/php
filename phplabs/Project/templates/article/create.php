<?php include __DIR__ . "/../header.php"; ?>
<form action="../article/store" method="post">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Заголовок статьи</label>
        <input tupe="text" name="title" id="" placeholder="title">
    </div>
    <div class="mb-3">
        <textarea type="text" name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <select name="author" id="">
            <option selected>Выберите автора</option>
            <?php foreach ($users as $user): ?>
                <option value="<?= $user->getId(); ?>"><?= $user->getNickname(); ?></option>
                <?= $user->getNickName() . '<br>'; ?>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit">Сохранить</button>
</form>
<?php include __DIR__ . "/../footer.html"; ?>