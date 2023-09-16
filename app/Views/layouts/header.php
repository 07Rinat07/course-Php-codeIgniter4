<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Menu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8080/">Homepage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8080/tasks">Tasks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url("/tasks/new") ?>">Add task</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
