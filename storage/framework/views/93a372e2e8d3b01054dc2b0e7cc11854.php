<?php if(session()->get('notify.model') === 'toast'): ?>
    <div class="notify fixed inset-0 flex items-end justify-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start sm:justify-end">
        <div
            x-data="{ show: <?php if(session()->get('notify.model') === 'toast'): ?> true <?php else: ?> false <?php endif; ?> }"
            x-init="setTimeout(() => { show = true }, 500)"
            x-show="show"
            x-transition:enter="transform ease-out duration-300 transition"
            x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
            x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
            x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'pointer-events-auto w-full max-w-sm overflow-hidden shadow-lg rounded-lg border-l-4',
                'bg-white' => config('notify.theme') === 'light',
                'bg-slate-800' => config('notify.theme') !== 'light',
                'border-green-500' => session()->get('notify.type') === 'success',
                'border-yellow-500' => session()->get('notify.type') === 'warning',
                'border-blue-500' => session()->get('notify.type') === 'info',
                'border-red-500' => session()->get('notify.type') === 'error',
            ]); ?>"
        >
            <div class="relative rounded-lg shadow-xs overflow-hidden">
                <div class="p-4">
                    <div class="flex items-start">
                        <?php if(session()->get('notify.type') === 'success'): ?>
                            <svg class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        <?php endif; ?>
                        <?php if(session()->get('notify.type') === 'warning'): ?>
                            <svg class="w-6 h-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                            </svg>
                            <?php endif; ?>
                        <?php if(session()->get('notify.type') === 'info'): ?>
                            <svg class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                            </svg>
                        <?php endif; ?>
                        <?php if(session()->get('notify.type') === 'error'): ?>
                            <svg class="w-6 h-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        <?php endif; ?>
                        <div class="ml-4 w-0 flex-1">
                            <?php if (isset($component)) { $__componentOriginal807b034d38f19046567a91589c667b6a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal807b034d38f19046567a91589c667b6a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'notify::components.notify-title','data' => ['title' => session()->get('notify.title') ?? session()->get('notify.type')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('notify::notify-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session()->get('notify.title') ?? session()->get('notify.type'))]); ?>
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
                        <div class="ml-4 flex shrink-0">
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
<?php /**PATH C:\xampp\htdocs\church\vendor\mckenziearts\laravel-notify\src/../resources/views/notifications/toast.blade.php ENDPATH**/ ?>