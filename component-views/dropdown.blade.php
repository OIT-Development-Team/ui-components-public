<div {{ $attributes }}>
    {{-- <div class="flex justify-center"> --}}
    @if ($type == 'default')
        <div class="group relative"
             x-data="{
                 open: false,
                 toggle() {
                     if (this.open) {
                         return this.close()
                     }
             
                     this.$refs.button.focus()
             
                     this.open = true
                 },
                 close(focusAfter) {
                     if (!this.open) return
             
                     this.open = false
             
                     focusAfter && focusAfter.focus()
                 }
             }"
             x-id="['dropdown-button']"
             x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
             x-on:keydown.escape.prevent.stop="close($refs.button)">
            <!-- Button -->
            <button :aria-controls="$id('dropdown-button')"
                    :aria-expanded="open"
                    {{ $trigger->attributes->class(['relative flex items-center justify-center gap-2']) }}
                    type="button"
                    x-on:click="toggle()"
                    x-ref="button">

                {{ $trigger }}
            </button>

            <!-- Panel -->
            <div :id="$id('dropdown-button')"
                 {{ $container->attributes->class([$alignment . '-0 absolute z-10 mt-1 min-w-48 origin-top-left rounded-lg border border-gray-200 dark:border-gray-600 bg-white p-1.5 shadow-sm outline-none']) }}
                 x-cloak
                 x-on:click.outside="close($refs.button)"
                 x-ref="panel"
                 x-show="open"
                 x-transition.origin.top.left>
                {{ $container }}
            </div>
        </div>
    @endif
    @if ($type == 'simple')
        <div x-data="{ open: false }">

            <button {{ $trigger->attributes }}
                    x-on:click="open = !open">
                {{ $trigger }}
            </button>

            <div x-show="open">

                {{ $container }}
            </div>
        </div>
    @endif
</div>
