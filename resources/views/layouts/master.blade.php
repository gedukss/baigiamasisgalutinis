<!DOCTYPE html>
<html lang="en">

<head>
    <title>Best Real Estate</title>
    <meta charset="UTF-8">

    @vite(['resources/sass/app.scss'])

</head>

<body>
<header>
    <nav>
        <h1>
            <a href="/">Best Real Estate</a>
        </h1>

        <ul>
            <li>
                <a href="<?= url('/properties'); ?>">Properties</a>
            </li>
            <li>
                <a href="<?= url('/agents'); ?>">Agents</a>
            </li>
        </ul>
    </nav>
</header>
<main>
    @yield('content')
</main>
</body>
