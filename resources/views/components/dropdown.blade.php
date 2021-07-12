@props(['trigger'])

<div x-data="{ show: false }" @click.away="show = false">
  {{-- Trigger --}}
  <div @click="show = ! show">
    {{ $trigger }}
  </div>

  {{-- Links --}}
  <div x-show="show" class="py-2 w-full mt-2 rounded-xl absolute z-50 bg-gray-100 overflow-auto max-h-52" style="display">
    {{ $slot }}
  </div>

</div>
