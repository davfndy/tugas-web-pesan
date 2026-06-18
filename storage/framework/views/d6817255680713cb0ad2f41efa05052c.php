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
    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4">

            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">
                    📥 Data Surat Masuk
                </h2>

                <a href="<?php echo e(route('surat-masuk.create')); ?>"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow inline-block">
                    + Tambah Surat
                </a>
            </div>

            <?php if(session('success')): ?>
                <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            <div class="bg-white shadow rounded overflow-x-auto">
                <table class="w-full text-left">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="p-3">No</th>
                            <th class="p-3">Nomor Surat</th>
                            <th class="p-3">Asal Surat</th>
                            <th class="p-3">Tanggal Surat</th>
                            <th class="p-3">Tanggal Diterima</th>
                            <th class="p-3">Perihal</th>
                            <th class="p-3">File</th>
                            <th class="p-3">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $suratMasuks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $surat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr class="border-t">
                                <td class="p-3">
                                    <?php echo e($loop->iteration); ?>

                                </td>

                                <td class="p-3">
                                    <?php echo e($surat->nomor_surat); ?>

                                </td>

                                <td class="p-3">
                                    <?php echo e($surat->asal_surat); ?>

                                </td>

                                <td class="p-3">
                                    <?php echo e($surat->tanggal_surat); ?>

                                </td>

                                <td class="p-3">
                                    <?php echo e($surat->tanggal_diterima); ?>

                                </td>

                                <td class="p-3">
                                    <?php echo e($surat->perihal); ?>

                                </td>

                                <td class="p-3">
                                    <?php if($surat->file_surat): ?>
                                        <a href="<?php echo e(asset('storage/'.$surat->file_surat)); ?>"
                                           target="_blank"
                                           class="text-blue-600">
                                            Lihat PDF
                                        </a>
                                    <?php else: ?>
                                        -
                                    <?php endif; ?>
                                </td>

                                <td class="p-3 flex gap-2">

    <a href="<?php echo e(route('surat-masuk.edit', $surat->id)); ?>"
       class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded">
        Edit
    </a>

    <form action="<?php echo e(route('surat-masuk.destroy', $surat->id)); ?>"
          method="POST"
          onsubmit="return confirm('Yakin ingin menghapus?')">

        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>

        <button type="submit"
                class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded">
            Hapus
        </button>
    </form>

</td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="8" class="text-center p-6 text-gray-500">
                                    Belum ada data surat masuk.
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
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
<?php endif; ?><?php /**PATH C:\laragon\www\sips\resources\views/surat_masuk/index.blade.php ENDPATH**/ ?>