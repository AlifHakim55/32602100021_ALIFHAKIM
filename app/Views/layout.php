<!DOCTYPE html>
<html>
    <head>
        <title>My website</title>
    </head>
    <body>
    <header>
        <!-- Header content goes here -->
        <h1>Welcome to My website</h1>
    </header>
    <nav>
        <!-- Navigation content goes here -->
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/profile">profile</a></li>
            <li><a href="/experience">experience</a></li>
        </ul>
    </nav>
    <main>
        <!-- Main content goes here -->
        <?= $this->renderSection('content') ?>
    </main>
    <footer>
        <!-- Footer content goes here -->
        <p>@ 2023 My website. All right reserved.</p>
    </footer>
</body>
</html>