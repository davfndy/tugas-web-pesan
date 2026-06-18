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
        <div class="max-w-4xl mx-auto px-4">

            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">
                    ➕ Tambah Surat Masuk
                </h2>

                <a href="<?php echo e(route('surat-masuk.index')); ?>"
                   class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                    ← Kembali
                </a>
            </div>

            <?php if($errors->any()): ?>
                <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                    <ul class="list-disc ml-5">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <div class="bg-white shadow rounded p-6">

                <form action="<?php echo e(route('surat-masuk.store')); ?>"
                      method="POST"
                      enctype="multipart/form-data">

                    <?php echo csrf_field(); ?>

                    <div class="mb-4">
                        <label class="block font-semibold mb-2">
                            Nomor Surat
                        </label>

                        <input type="text"
                               name="nomor_surat"
                               value="<?php echo e(old('nomor_surat')); ?>"
                               class="w-full border rounded px-3 py-2"
                               required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-semibold mb-2">
                            Asal Surat
                        </label>

                        <input type="text"
                               name="asal_surat"
                               value="<?php echo e(old('asal_surat')); ?>"
                               class="w-full border rounded px-3 py-2"
                               required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-semibold mb-2">
                            Tanggal Surat
                        </label>

                        <input type="date"
                               name="tanggal_surat"
                               value="<?php echo e(old('tanggal_surat')); ?>"
                               class="w-full border rounded px-3 py-2"
                               required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-semibold mb-2">
                            Tanggal Diterima
                        </label>

                        <input type="date"
                               name="tanggal_diterima"
                               value="<?php echo e(old('tanggal_diterima')); ?>"
                               class="w-full border rounded px-3 py-2"
                               required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-semibold mb-2">
                            Perihal
                        </label>

                        <textarea name="perihal"
                                  rows="4"
                                  class="w-full border rounded px-3 py-2"
                                  required><?php echo e(old('perihal')); ?></textarea>
                    </div>

                    <div class="mb-6">
                        <label class="block font-semibold mb-2">
                            Upload File Surat (PDF)
                        </label>

                        <input type="file"
                               name="file_surat"
                               accept=".pdf"
                               class="w-full border rounded px-3 py-2">
                    </div>

                    <button type="submit"
                            class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                        💾 Simpan Surat
                    </button>

                </form>

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
<?php endif; ?><?php /**PATH C:\laragon\www\sips\resources\views/surat_masuk/create.blade.php ENDPATH**/ ?>