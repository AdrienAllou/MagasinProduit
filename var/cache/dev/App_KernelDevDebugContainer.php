<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7wxIS54\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7wxIS54/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container7wxIS54.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container7wxIS54\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container7wxIS54\App_KernelDevDebugContainer([
    'container.build_hash' => '7wxIS54',
    'container.build_id' => '020c10c3',
    'container.build_time' => 1605470552,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7wxIS54');
