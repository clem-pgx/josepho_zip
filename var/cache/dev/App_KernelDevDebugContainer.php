<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRF5iKxQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRF5iKxQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRF5iKxQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRF5iKxQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRF5iKxQ\App_KernelDevDebugContainer([
    'container.build_hash' => 'RF5iKxQ',
    'container.build_id' => 'b6f18bb6',
    'container.build_time' => 1634116815,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRF5iKxQ');