@props(['type', 'message'])

<div {{ $attributes->class([
    'p-3 text-sm rounded animate-bounce',
    'bg-green-300 text-green-900' => $type === 'success',
    'bg-red-300 text-red-900' => $type === 'error',
    'bg-yellow-300 text-yellow-900' => $type === 'warning',
    'bg-blue-300 text-blue-900' => $type === 'info',
    ]) }}>
    {{ $message }}
</div>
