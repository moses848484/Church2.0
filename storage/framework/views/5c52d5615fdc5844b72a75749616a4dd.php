<?php if(session()->get('notify.model') === 'connect'): ?>
    <div class="notify fixed inset-0 flex items-end justify-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start sm:justify-end">
        <div
            x-data="{ show: <?php if(session()->get('notify.model') === 'connect'): ?> true <?php else: ?> false <?php endif; ?> }"
            x-init="setTimeout(() => { show = true }, 750)"
            x-show="show"
            x-transition:enter="transform ease-out duration-300 transition"
            x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
            x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'pointer-events-auto max-w-sm w-full shadow-lg rounded-lg border-t-4',
                'bg-white' => config('notify.theme') === 'light',
                'bg-slate-800' => config('notify.theme') !== 'light',
                'border-green-600' => session()->get('notify.type') === 'success',
                'border-red-600' => session()->get('notify.type') === 'error',
            ]); ?>"
        >
            <div class="relative rounded-lg shadow-xs overflow-hidden">
                <div class="p-4">
                    <div class="flex items-start">
                        <?php if(session()->get('notify.type') === 'success'): ?>
                            <div class="inline-flex items-center bg-gradient-to-r from-green-600 to-green-800 p-2 text-white text-sm rounded-full shrink-0">
                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.288 15.038a5.25 5.25 0 017.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 011.06 0z" />
                                </svg>
                            </div>
                        <?php endif; ?>
                        <?php if(session()->get('notify.type') === 'error'): ?>
                            <div class="inline-flex items-center bg-gradient-to-r from-red-600 to-red-800 p-2 text-white text-sm rounded-full shrink-0">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </div>
                        <?php endif; ?>
                        <div class="ml-6 w-0 flex-1">
                            <?php if (isset($component)) { $__componentOriginal807b034d38f19046567a91589c667b6a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal807b034d38f19046567a91589c667b6a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'notify::components.notify-title','data' => ['title' => session()->get('notify.title')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('notify::notify-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session()->get('notify.title'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal807b034d38f19046567a91589c667b6a)): ?>
<?php $attributes = $__attributesOriginal807b034d38f19046567a91589c667b6a; ?>
<?php unset($__attributesOriginal807b034d38f19046567a91589c667b6a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal807b034d38f19046567a91589c667b6a)): ?>
<?php $component = $__componentOriginal807b034d38f19046567a91589c667b6a; ?>
<?php unset($__componentOriginal807b034d38f19046567a91589c667b6a); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginale9b581dc05ef4a3314acaf019b8c9b87 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale9b581dc05ef4a3314acaf019b8c9b87 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'notify::components.notify-content','data' => ['content' => session()->get('notify.message')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('notify::notify-content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['content' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session()->get('notify.message'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale9b581dc05ef4a3314acaf019b8c9b87)): ?>
<?php $attributes = $__attributesOriginale9b581dc05ef4a3314acaf019b8c9b87; ?>
<?php unset($__attributesOriginale9b581dc05ef4a3314acaf019b8c9b87); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale9b581dc05ef4a3314acaf019b8c9b87)): ?>
<?php $component = $__componentOriginale9b581dc05ef4a3314acaf019b8c9b87; ?>
<?php unset($__componentOriginale9b581dc05ef4a3314acaf019b8c9b87); ?>
<?php endif; ?>
                        </div>
                        <div class="ml-4 flex-shrink-0 flex">
                            <?php if (isset($component)) { $__componentOriginal5448586831e9ee86f99a37b39f8fb162 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5448586831e9ee86f99a37b39f8fb162 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'notify::components.button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('notify::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5448586831e9ee86f99a37b39f8fb162)): ?>
<?php $attributes = $__attributesOriginal5448586831e9ee86f99a37b39f8fb162; ?>
<?php unset($__attributesOriginal5448586831e9ee86f99a37b39f8fb162); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5448586831e9ee86f99a37b39f8fb162)): ?>
<?php $component = $__componentOriginal5448586831e9ee86f99a37b39f8fb162; ?>
<?php unset($__componentOriginal5448586831e9ee86f99a37b39f8fb162); ?>
<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\church\vendor\mckenziearts\laravel-notify\src/../resources/views/notifications/connectify.blade.php ENDPATH**/ ?>