<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUgiJQpr\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUgiJQpr/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUgiJQpr.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUgiJQpr\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUgiJQpr\App_KernelDevDebugContainer([
    'container.build_hash' => 'UgiJQpr',
    'container.build_id' => '00d69ef8',
    'container.build_time' => 1618523333,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUgiJQpr');
