<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZwf7nfN\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZwf7nfN/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZwf7nfN.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZwf7nfN\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZwf7nfN\App_KernelDevDebugContainer([
    'container.build_hash' => 'Zwf7nfN',
    'container.build_id' => 'b488a7bb',
    'container.build_time' => 1605773571,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZwf7nfN');
