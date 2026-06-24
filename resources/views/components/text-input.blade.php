@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-gray-900 border-gray-700 text-white focus:border-blue-500 focus:ring-blue-500 rounded-xl shadow-xl']) !!}>
