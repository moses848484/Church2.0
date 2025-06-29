<nav x-data="{ open: false }" class="">
    <!-- Primary Navigation Menu -->
    <div class="">
        <div class="relative">
            <div class="flex justify-between items-center px-4 py-2">
                <!-- Hamburger Button -->
                <div class="ms-3 relative d-block d-sm-none" style="right: -170px; top: -95px;">
                    <button class="btn btn-success" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>

                <!-- Navigation Links -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <!-- Teams Dropdown -->
                    <!--[if BLOCK]><![endif]--><?php if(Laravel\Jetstream\Jetstream::hasTeamFeatures()): ?>
                        <div class="ml-3 relative">
                            <?php if (isset($component)) { $__componentOriginaldf8083d4a852c446488d8d384bbc7cbe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown','data' => ['align' => 'right','width' => '48']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['align' => 'right','width' => '48']); ?>
                                 <?php $__env->slot('trigger', null, []); ?> 
                                    <span class="inline-flex rounded-md">
                                        <button type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                            <?php echo e(Auth::user()->currentTeam->name); ?>

                                            <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                            </svg>
                                        </button>
                                    </span>
                                 <?php $__env->endSlot(); ?>
                                 <?php $__env->slot('content', null, []); ?> 
                                    <div class="w-60">
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            <?php echo e(__('Manage Team')); ?>

                                        </div>
                                        <?php if (isset($component)) { $__componentOriginal68cb1971a2b92c9735f83359058f7108 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68cb1971a2b92c9735f83359058f7108 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['href' => ''.e(route('teams.show', Auth::user()->currentTeam->id)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('teams.show', Auth::user()->currentTeam->id)).'']); ?>
                                            <?php echo e(__('Team Settings')); ?>

                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $attributes = $__attributesOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__attributesOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $component = $__componentOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__componentOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', Laravel\Jetstream\Jetstream::newTeamModel())): ?>
                                            <?php if (isset($component)) { $__componentOriginal68cb1971a2b92c9735f83359058f7108 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68cb1971a2b92c9735f83359058f7108 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['href' => ''.e(route('teams.create')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('teams.create')).'']); ?>
                                                <?php echo e(__('Create New Team')); ?>

                                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $attributes = $__attributesOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__attributesOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $component = $__componentOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__componentOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
                                        <?php endif; ?>
                                        <!--[if BLOCK]><![endif]--><?php if(Auth::user()->allTeams()->count() > 1): ?>
                                            <div class="border-t border-gray-200"></div>
                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                <?php echo e(__('Switch Teams')); ?>

                                            </div>
                                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = Auth::user()->allTeams(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if (isset($component)) { $__componentOriginal12b9baaa9d085739b53a541d2c8778fa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal12b9baaa9d085739b53a541d2c8778fa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.switchable-team','data' => ['team' => $team]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('switchable-team'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['team' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($team)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal12b9baaa9d085739b53a541d2c8778fa)): ?>
<?php $attributes = $__attributesOriginal12b9baaa9d085739b53a541d2c8778fa; ?>
<?php unset($__attributesOriginal12b9baaa9d085739b53a541d2c8778fa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal12b9baaa9d085739b53a541d2c8778fa)): ?>
<?php $component = $__componentOriginal12b9baaa9d085739b53a541d2c8778fa; ?>
<?php unset($__componentOriginal12b9baaa9d085739b53a541d2c8778fa); ?>
<?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    </div>
                                 <?php $__env->endSlot(); ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe)): ?>
<?php $attributes = $__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe; ?>
<?php unset($__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf8083d4a852c446488d8d384bbc7cbe)): ?>
<?php $component = $__componentOriginaldf8083d4a852c446488d8d384bbc7cbe; ?>
<?php unset($__componentOriginaldf8083d4a852c446488d8d384bbc7cbe); ?>
<?php endif; ?>
                        </div>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    <!-- Settings Dropdown -->
                    <div class="ms-3 relative" style=" right: 20px; top: -95px;">
                        <?php if (isset($component)) { $__componentOriginaldf8083d4a852c446488d8d384bbc7cbe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown','data' => ['align' => 'right','width' => '48']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['align' => 'right','width' => '48']); ?>
                             <?php $__env->slot('trigger', null, []); ?> 
                                <!--[if BLOCK]><![endif]--><?php if(Laravel\Jetstream\Jetstream::managesProfilePhotos()): ?>
                                    <button
                                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover"
                                            src="<?php echo e(Auth::user()->profile_photo_url); ?>"
                                            alt="<?php echo e(Auth::user()->name); ?>" />
                                    </button>
                                <?php else: ?>
                                    <span class="inline-flex rounded-md">
                                        <button type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                            <?php echo e(Auth::user()->name); ?>

                                            <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                    </span>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                             <?php $__env->endSlot(); ?>
                             <?php $__env->slot('content', null, []); ?> 
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    <?php echo e(__('Manage Account')); ?>

                                </div>
                                <?php if (isset($component)) { $__componentOriginal68cb1971a2b92c9735f83359058f7108 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68cb1971a2b92c9735f83359058f7108 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['href' => ''.e(route('profile.show')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('profile.show')).'']); ?>
                                    <?php echo e(__('Profile')); ?>

                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $attributes = $__attributesOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__attributesOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $component = $__componentOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__componentOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
                                <!--[if BLOCK]><![endif]--><?php if(Laravel\Jetstream\Jetstream::hasApiFeatures()): ?>
                                    <?php if (isset($component)) { $__componentOriginal68cb1971a2b92c9735f83359058f7108 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68cb1971a2b92c9735f83359058f7108 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['href' => ''.e(route('api-tokens.index')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('api-tokens.index')).'']); ?>
                                        <?php echo e(__('API Tokens')); ?>

                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $attributes = $__attributesOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__attributesOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $component = $__componentOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__componentOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                <div class="border-t border-gray-200"></div>
                                <form method="POST" action="<?php echo e(route('logout')); ?>" x-data>
                                    <?php echo csrf_field(); ?>
                                    <?php if (isset($component)) { $__componentOriginal68cb1971a2b92c9735f83359058f7108 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68cb1971a2b92c9735f83359058f7108 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-link','data' => ['href' => ''.e(route('logout')).'','@click.prevent' => '$root.submit();']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('logout')).'','@click.prevent' => '$root.submit();']); ?>
                                        <?php echo e(__('Log Out')); ?>

                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $attributes = $__attributesOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__attributesOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68cb1971a2b92c9735f83359058f7108)): ?>
<?php $component = $__componentOriginal68cb1971a2b92c9735f83359058f7108; ?>
<?php unset($__componentOriginal68cb1971a2b92c9735f83359058f7108); ?>
<?php endif; ?>
                                </form>
                             <?php $__env->endSlot(); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe)): ?>
<?php $attributes = $__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe; ?>
<?php unset($__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf8083d4a852c446488d8d384bbc7cbe)): ?>
<?php $component = $__componentOriginaldf8083d4a852c446488d8d384bbc7cbe; ?>
<?php unset($__componentOriginaldf8083d4a852c446488d8d384bbc7cbe); ?>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Offcanvas element -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasMenuLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">


            <div x-data="{ open: false }" class="relative inline-block text-left">
                <!-- Profile Icon -->
                <div @click="open = !open" class="cursor-pointer flex items-center">
                    <!--[if BLOCK]><![endif]--><?php if(Laravel\Jetstream\Jetstream::managesProfilePhotos()): ?>
                        <img class="h-10 w-10 rounded-full object-cover" src="<?php echo e(Auth::user()->profile_photo_url); ?>"
                            alt="<?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->email); ?>" />
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    <div class="ml-2 text-gray-800 font-medium">
                        <?php echo e(Auth::user()->name); ?>

                        <div class="text-sm text-gray-500"><?php echo e(Auth::user()->email); ?></div>
                    </div>
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>

                <!-- Dropdown Menu -->
                <div x-show="open" @click.away="open = false"
                    class="absolute right-0 z-10 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                    <div class="bg-white p-3 border-t border-gray-200">
                        <div class="mt-3 space-y-1">
                            <?php if (isset($component)) { $__componentOriginald69b52d99510f1e7cd3d80070b28ca18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald69b52d99510f1e7cd3d80070b28ca18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.responsive-nav-link','data' => ['href' => ''.e(route('profile.show')).'','active' => request()->routeIs('profile.show')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('responsive-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('profile.show')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('profile.show'))]); ?>
                                <?php echo e(__('Profile')); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald69b52d99510f1e7cd3d80070b28ca18)): ?>
<?php $attributes = $__attributesOriginald69b52d99510f1e7cd3d80070b28ca18; ?>
<?php unset($__attributesOriginald69b52d99510f1e7cd3d80070b28ca18); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald69b52d99510f1e7cd3d80070b28ca18)): ?>
<?php $component = $__componentOriginald69b52d99510f1e7cd3d80070b28ca18; ?>
<?php unset($__componentOriginald69b52d99510f1e7cd3d80070b28ca18); ?>
<?php endif; ?>
                            <!--[if BLOCK]><![endif]--><?php if(Laravel\Jetstream\Jetstream::hasApiFeatures()): ?>
                                <?php if (isset($component)) { $__componentOriginald69b52d99510f1e7cd3d80070b28ca18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald69b52d99510f1e7cd3d80070b28ca18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.responsive-nav-link','data' => ['href' => ''.e(route('api-tokens.index')).'','active' => request()->routeIs('api-tokens.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('responsive-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('api-tokens.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('api-tokens.index'))]); ?>
                                    <?php echo e(__('API Tokens')); ?>

                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald69b52d99510f1e7cd3d80070b28ca18)): ?>
<?php $attributes = $__attributesOriginald69b52d99510f1e7cd3d80070b28ca18; ?>
<?php unset($__attributesOriginald69b52d99510f1e7cd3d80070b28ca18); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald69b52d99510f1e7cd3d80070b28ca18)): ?>
<?php $component = $__componentOriginald69b52d99510f1e7cd3d80070b28ca18; ?>
<?php unset($__componentOriginald69b52d99510f1e7cd3d80070b28ca18); ?>
<?php endif; ?>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            <form method="POST" action="<?php echo e(route('logout')); ?>" x-data>
                                <?php echo csrf_field(); ?>
                                <?php if (isset($component)) { $__componentOriginald69b52d99510f1e7cd3d80070b28ca18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald69b52d99510f1e7cd3d80070b28ca18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.responsive-nav-link','data' => ['href' => ''.e(route('logout')).'','@click.prevent' => '$root.submit();']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('responsive-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('logout')).'','@click.prevent' => '$root.submit();']); ?>
                                    <?php echo e(__('Log Out')); ?>

                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald69b52d99510f1e7cd3d80070b28ca18)): ?>
<?php $attributes = $__attributesOriginald69b52d99510f1e7cd3d80070b28ca18; ?>
<?php unset($__attributesOriginald69b52d99510f1e7cd3d80070b28ca18); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald69b52d99510f1e7cd3d80070b28ca18)): ?>
<?php $component = $__componentOriginald69b52d99510f1e7cd3d80070b28ca18; ?>
<?php unset($__componentOriginald69b52d99510f1e7cd3d80070b28ca18); ?>
<?php endif; ?>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Dashboard Link outside Dropdown -->
                <div class="pt-2">
                    <li class="nav-item nav-category">
                        <span class="nav-link">Navigation</span>
                    </li>
                    <li class="nav-item menu-items <?php echo e(request()->is('/redirect') ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(url('/redirected')); ?>">
                            <span class="menu-icon mr-2 text-lg text-green-500">
                                <i class="fa-solid fa-gauge-high"></i>
                            </span>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    <!--[if BLOCK]><![endif]--><?php if(auth()->user()->usertype == 1): ?>
                        <!-- Admin-only sections -->

                        <!-- Manage Members Section -->
                        <li
                            class="nav-item menu-items <?php echo e(request()->is('view_members') || request()->is('see_members') || request()->is('update_member/*') ? 'active' : ''); ?>">
                            <a class="nav-link" data-toggle="collapse" href="#ui-basic"
                                aria-expanded="<?php echo e(request()->is('view_members') || request()->is('see_members') ? 'true' : 'false'); ?>"
                                aria-controls="ui-basic">
                                <span class="menu-icon mr-2 text-lg text-green-500">
                                    <i class="fa-solid fa-users fa-3x"></i>
                                </span>
                                <span class="menu-title">Manage Members</span>
                                <i class="fa-solid fa-chevron-down menu-arrow text-gray-500"
                                    style="font-size: 13px; margin-left: 5px;"></i>
                            </a>
                            <div class="collapse <?php echo e(request()->is('view_members') || request()->is('see_members') ? 'show' : ''); ?>"
                                id="ui-basic">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item <?php echo e(request()->is('view_members') ? 'active' : ''); ?>">
                                        <a class="nav-link" href="<?php echo e(url('view_members')); ?>">
                                            <i class="fa-solid fa-user"></i>&nbsp;Register Members
                                        </a>
                                    </li>
                                    <li
                                        class="nav-item <?php echo e(request()->is('see_members') || request()->is('update_member/*') ? 'active' : ''); ?>">
                                        <a class="nav-link" href="<?php echo e(url('see_members')); ?>">
                                            <i class="fa-solid fa-eye"></i>&nbsp;View Members
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Inventory Section -->
                        <li
                            class="nav-item menu-items <?php echo e(request()->is('view_inventory') || request()->is('show_inventory') || request()->is('update_inventory/*') ? 'active' : ''); ?>">
                            <a class="nav-link" data-toggle="collapse" href="#auth"
                                aria-expanded="<?php echo e(request()->is('view_inventory') || request()->is('show_inventory') || request()->is('update_inventory/*') ? 'true' : 'false'); ?>"
                                aria-controls="auth">
                                <span class="menu-icon mr-2 text-lg text-red-500">
                                    <i class="fa-solid fa-warehouse"></i>
                                </span>
                                <span class="menu-title">Inventory</span>
                                <i class="fa-solid fa-chevron-down menu-arrow text-gray-500"
                                    style="font-size: 13px; margin-left: 5px;"></i>
                            </a>
                            <div class="collapse <?php echo e(request()->is('view_inventory') || request()->is('show_inventory') || request()->is('update_inventory/*') ? 'show' : ''); ?>"
                                id="auth">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item <?php echo e(request()->is('view_inventory') ? 'active' : ''); ?>">
                                        <a class="nav-link" href="<?php echo e(url('view_inventory')); ?>">
                                            <i class="fa-solid fa-wrench"></i>&nbsp; Add Inventory
                                        </a>
                                    </li>
                                    <li
                                        class="nav-item <?php echo e(request()->is('show_inventory') || request()->is('update_inventory/*') ? 'active' : ''); ?>">
                                        <a class="nav-link" href="<?php echo e(url('show_inventory')); ?>">
                                            <i class="fa-solid fa-eye"></i>&nbsp;Show Inventory
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Strategic Planning Section -->
                        <li
                            class="nav-item menu-items <?php echo e(request()->is('strategic_plan') || request()->is('strategic_details') ? 'active' : ''); ?>">
                            <a class="nav-link" data-toggle="collapse" href="#strategicPlanning"
                                aria-expanded="<?php echo e(request()->is('strategic_plan') || request()->is('strategic_details') ? 'true' : 'false'); ?>"
                                aria-controls="strategicPlanning">
                                <span class="menu-icon">
                                    <i class="fa-solid fa-briefcase" style="color: orange;"></i>
                                </span>
                                <span class="menu-title">Strategic Planning</span>
                                <i class="fa-solid fa-chevron-down menu-arrow text-gray-500"
                                    style="font-size: 13px; margin-left: 5px;"></i>
                            </a>
                            <div class="collapse <?php echo e(request()->is('strategic_plan') || request()->is('strategic_details') ? 'show' : ''); ?>"
                                id="strategicPlanning">
                                <ul class="nav flex-column sub-menu">
                                    <li
                                        class="nav-item menu-items <?php echo e(request()->is('scorecard') || request()->is('update_scorecard/*') ? 'active' : ''); ?>">
                                        <a class="nav-link" href="<?php echo e(url('scorecard')); ?>">
                                            <i class="fa-solid fa-book"></i>&nbsp;Strategic Plan
                                        </a>
                                    </li>

                                    <li
                                        class="nav-item menu-items <?php echo e(request()->is('strategic_plan') || request()->is('update_scorecard/*') ? 'active' : ''); ?>">
                                        <a class="nav-link" href="<?php echo e(url('strategic_plan')); ?>">
                                            <i class="fa-solid fa-file"></i>&nbsp;Strategic Details
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Users Section -->
                        <li
                            class="nav-item menu-items <?php echo e(request()->is('see_users') || request()->is('update_user/*') ? 'active' : ''); ?>">
                            <a class="nav-link" href="<?php echo e(url('see_users')); ?>">
                                <span class="menu-icon mr-2 text-lg text-green-500">
                                    <i class="fa-solid fa-user"></i>
                                </span>
                                <span class="menu-title">Users</span>
                            </a>
                        </li>

                        <!-- Givings Section -->
                        <li class="nav-item menu-items <?php echo e(request()->is('view_givings') ? 'active' : ''); ?>">
                            <a class="nav-link" href="<?php echo e(url('view_givings')); ?>">
                                <span class="menu-icon mr-2 text-lg text-green-500">
                                    <i class="fa-solid fa-sack-dollar"></i>
                                </span>
                                <span class="menu-title">Givings</span>
                            </a>
                        </li>

                        <!-- Departments Section -->
                        <li class="nav-item menu-items <?php echo e(request()->is('departments') ? 'active' : ''); ?>">
                            <a class="nav-link" href="<?php echo e(url('departments')); ?>">
                                <span class="menu-icon">
                                    <i class="fa-solid fa-book fa-10x"></i>
                                </span>
                                <span class="menu-title">Departments</span>
                            </a>
                        </li>

                        <li class="nav-item menu-items <?php echo e(request()->is('view') ? 'active' : ''); ?>">
                            <a class="nav-link" href="<?php echo e(url('#')); ?>">
                                <span class="menu-icon">
                                    <i class="fa-solid fa-user-tie" style="color: orange;"></i>
                                </span>
                                <span class="menu-title">Human Resource</span>
                            </a>
                        </li>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    <?php if(auth()->user()->usertype == 0): ?>
                        <!-- Normal user-only sections -->

                        <!-- Member Registration -->
                        <li class="nav-item menu-items <?php echo e(request()->is('member_registration') ? 'show' : ''); ?>">
                            <a class="nav-link" href="<?php echo e(url('member_registration')); ?>">
                                <span class="menu-icon">
                                    <i class="fa-solid fa-user fa-3x"></i>
                                </span>
                                <span class="menu-title">Member Registration</span>
                            </a>
                        </li>

                        <!-- Givings Section -->
                        <li class="nav-item menu-items <?php echo e(request()->is('member_givings') ? 'active' : ''); ?>">
                            <a class="nav-link" href="<?php echo e(url('member_givings')); ?>">
                                <span class="menu-icon">
                                    <i class="fa-solid fa-sack-dollar" style="color: #f39c12;"></i>
                                    <!-- Orange color -->
                                </span>
                                <span class="menu-title">Givings</span>
                            </a>
                        </li>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

                    <!--[if BLOCK]><![endif]--><?php if(Laravel\Jetstream\Jetstream::hasTeamFeatures()): ?>
                        <div class="border-t border-gray-200"></div>
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            <?php echo e(__('Manage Team')); ?>

                        </div>
                        <?php if (isset($component)) { $__componentOriginald69b52d99510f1e7cd3d80070b28ca18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald69b52d99510f1e7cd3d80070b28ca18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.responsive-nav-link','data' => ['href' => ''.e(route('teams.show', Auth::user()->currentTeam->id)).'','active' => request()->routeIs('teams.show')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('responsive-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('teams.show', Auth::user()->currentTeam->id)).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('teams.show'))]); ?>
                            <?php echo e(__('Team Settings')); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald69b52d99510f1e7cd3d80070b28ca18)): ?>
<?php $attributes = $__attributesOriginald69b52d99510f1e7cd3d80070b28ca18; ?>
<?php unset($__attributesOriginald69b52d99510f1e7cd3d80070b28ca18); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald69b52d99510f1e7cd3d80070b28ca18)): ?>
<?php $component = $__componentOriginald69b52d99510f1e7cd3d80070b28ca18; ?>
<?php unset($__componentOriginald69b52d99510f1e7cd3d80070b28ca18); ?>
<?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', Laravel\Jetstream\Jetstream::newTeamModel())): ?>
                            <?php if (isset($component)) { $__componentOriginald69b52d99510f1e7cd3d80070b28ca18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald69b52d99510f1e7cd3d80070b28ca18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.responsive-nav-link','data' => ['href' => ''.e(route('teams.create')).'','active' => request()->routeIs('teams.create')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('responsive-nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('teams.create')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('teams.create'))]); ?>
                                <?php echo e(__('Create New Team')); ?>

                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald69b52d99510f1e7cd3d80070b28ca18)): ?>
<?php $attributes = $__attributesOriginald69b52d99510f1e7cd3d80070b28ca18; ?>
<?php unset($__attributesOriginald69b52d99510f1e7cd3d80070b28ca18); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald69b52d99510f1e7cd3d80070b28ca18)): ?>
<?php $component = $__componentOriginald69b52d99510f1e7cd3d80070b28ca18; ?>
<?php unset($__componentOriginald69b52d99510f1e7cd3d80070b28ca18); ?>
<?php endif; ?>
                        <?php endif; ?>
                        <!--[if BLOCK]><![endif]--><?php if(Auth::user()->allTeams()->count() > 1): ?>
                            <div class="border-t border-gray-200"></div>
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                <?php echo e(__('Switch Teams')); ?>

                            </div>
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = Auth::user()->allTeams(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if (isset($component)) { $__componentOriginal12b9baaa9d085739b53a541d2c8778fa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal12b9baaa9d085739b53a541d2c8778fa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.switchable-team','data' => ['team' => $team]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('switchable-team'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['team' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($team)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal12b9baaa9d085739b53a541d2c8778fa)): ?>
<?php $attributes = $__attributesOriginal12b9baaa9d085739b53a541d2c8778fa; ?>
<?php unset($__attributesOriginal12b9baaa9d085739b53a541d2c8778fa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal12b9baaa9d085739b53a541d2c8778fa)): ?>
<?php $component = $__componentOriginal12b9baaa9d085739b53a541d2c8778fa; ?>
<?php unset($__componentOriginal12b9baaa9d085739b53a541d2c8778fa); ?>
<?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- Alpine.js for dropdown functionality -->
<script src="//unpkg.com/alpinejs" defer></script>
<?php /**PATH C:\Users\Moses Blake Simataa\Videos\Moses Simataa Project Review\Application\church\church\resources\views/navigation-menu.blade.php ENDPATH**/ ?>