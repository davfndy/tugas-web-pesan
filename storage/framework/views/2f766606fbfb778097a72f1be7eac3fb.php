

<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4">

            <h1 class="text-3xl font-bold mb-2">
                Halo, Administrator <?php echo e(Auth::user()->name); ?> 👋
            </h1>

            <p class="text-gray-500 mb-8">
                Selamat datang di Sistem Informasi Persuratan (SIPS)
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="bg-blue-500 text-white rounded-xl p-6 shadow">
                    <h2 class="text-lg font-semibold">Surat Masuk</h2>
                    <p class="text-4xl font-bold mt-4">0</p>
                </div>

                <div class="bg-green-500 text-white rounded-xl p-6 shadow">
                    <h2 class="text-lg font-semibold">Surat Keluar</h2>
                    <p class="text-4xl font-bold mt-4">0</p>
                </div>

                <div class="bg-yellow-500 text-white rounded-xl p-6 shadow">
                    <h2 class="text-lg font-semibold">Disposisi</h2>
                    <p class="text-4xl font-bold mt-4">0</p>
                </div>

                <div class="bg-purple-500 text-white rounded-xl p-6 shadow">
                    <h2 class="text-lg font-semibold">Total User</h2>
                    <p class="text-4xl font-bold mt-4">
                        <?php echo e(\App\Models\User::count()); ?>

                    </p>
                </div>

            </div>

        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\sips\resources\views/dashboard.blade.php ENDPATH**/ ?>