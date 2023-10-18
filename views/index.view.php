<?php require "components/header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto mt-5">
            <div class="card card-body">
                <h1 class="h3 mb-3">Add Username</h1>
                <form action="/names" method="POST">
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text bg-secondary text-light"><label for="name">Username</label></span>
                            <input type="text" name="name" id="name" class="form-control border-primary" required>
                            <button class="btn btn-primary">Add</button>
                        </div>

                        <div class="card card-body bg-secondary p-1 mt-3">
                            <div class="fs-5 p-3 text-light">Usernames</div>

                            <ul class="list-group">
                                <?php foreach ($users as $user) : ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div>
                                            <?= $user->id . ". " . $user->name; ?>
                                        </div>
                                        <div>
                                            <a onclick="return confirm('Are your sure to delete it?')" class="btn btn-sm btn-danger" href="/delete?id=<?= $user->id; ?>">Delete</a>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require "components/footer.php"; ?>