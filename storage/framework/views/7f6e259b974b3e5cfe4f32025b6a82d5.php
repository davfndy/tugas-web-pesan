<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'SIPS PRO')); ?></title>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="bg-gray-100">

    <div class="flex min-h-screen">

        
        <aside class="w-64 bg-slate-900 text-white fixed h-screen">

            <div class="p-6 border-b border-slate-700">
                <h1 class="text-2xl font-bold">
                    📨 SIPS PRO
                </h1>

                <p class="text-sm text-slate-400 mt-1">
                    Sistem Informasi Persuratan
                </p>
            </div>

            <nav class="p-4 space-y-2">

                <a href="<?php echo e(route('dashboard')); ?>"
                   class="block px-4 py-3 rounded-lg hover:bg-slate-700">
                    🏠 Dashboard
                </a>

                <a href="<?php echo e(route('surat-masuk.index')); ?>"
                    class="block px-4 py-2 hover:bg-blue-800 rounded">
                     📥 Surat Masuk
                </a>

                <a href="#"
                   class="block px-4 py-3 rounded-lg hover:bg-slate-700">
                    📤 Surat Keluar
                </a>

                <a href="#"
                   class="block px-4 py-3 rounded-lg hover:bg-slate-700">
                    📌 Disposisi
                </a>

                <a href="#"
                   class="block px-4 py-3 rounded-lg hover:bg-slate-700">
                    👥 Kelola User
                </a>

            </nav>

            <div class="absolute bottom-0 w-full p-4 border-t border-slate-700">

                <div class="text-sm text-slate-400 mb-3">
                    Login sebagai:
                    <br>
                    <strong><?php echo e(Auth::user()->name); ?></strong>
                </div>

                <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>

                    <button
                        class="w-full bg-red-600 hover:bg-red-700 py-2 rounded-lg">
                        Logout
                    </button>
                </form>

            </div>

        </aside>

        
        <main class="flex-1 ml-64">

            <?php if(isset($header)): ?>
                <header class="bg-white shadow">
                    <div class="px-8 py-6">
                        <?php echo e($header); ?>

                    </div>
                </header>
            <?php endif; ?>

            <?php echo e($slot); ?>


        </main>

    </div>

</body>
</html><?php /**PATH C:\laragon\www\sips\resources\views/layouts/app.blade.php ENDPATH**/ ?>