<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerO7VMxHq\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerO7VMxHq/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerO7VMxHq.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerO7VMxHq\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerO7VMxHq\App_KernelDevDebugContainer([
    'container.build_hash' => 'O7VMxHq',
    'container.build_id' => '897b49ea',
    'container.build_time' => 1605260485,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerO7VMxHq');
