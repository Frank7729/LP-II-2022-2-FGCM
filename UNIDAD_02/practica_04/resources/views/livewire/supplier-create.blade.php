<div>
    <x-jet-dialog-modal wire:model="isOpen">
        <x-slot name="title">
            <h3>Registrar nuevo proveedor</h3>
        </x-slot>
        <x-slot name="content">
            <form>
                <input type="text" wire:model="supplier.id">
                <div class="flex justify-between mx-2 mb-6">
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-jet-label value="Nombre del proveedor" class="font-bold" />
                        <x-jet-input type="text" wire:model="supplier.name" class="w-full" />
                        <x-jet-input-error for="supplier.name" />
                    </div>
                </div>
                <div class="flex justify-between mx-2 mb-6">
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-jet-label value="Slug del proveedor" class="font-bold" />
                        <x-jet-input type="text" wire:model="supplier.slug" class="w-full" />
                        <x-jet-input-error for="supplier.slug" />
                    </div>
                </div>
                <div class="flex justify-between mx-2 mb-6">
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-jet-label value="Nombre de la dirección" class="font-bold" />
                        <x-jet-input type="text" wire:model="supplier.direction" class="w-full" />
                        <x-jet-input-error for="supplier.direction" />
                    </div>
                </div>
                <div class="flex justify-between mx-2 mb-6">
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-jet-label value="Númwero del proveedor" class="font-bold" />
                        <x-jet-input type="text" wire:model="supplier.phone" class="w-full" />
                        <x-jet-input-error for="supplier.phone" />
                    </div>
                </div>
                <div class="flex justify-between mx-2 mb-6">
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-jet-label value="Email del proveedor" class="font-bold" />
                        <x-jet-input type="text" wire:model="supplier.email" class="w-full" />
                        <x-jet-input-error for="supplier.email" />
                    </div>
                </div>
                <div class="flex justify-between mx-2 mb-6">
                    <div class="mb-2 md:mr-2 md:mb-0 w-full">
                        <x-jet-label value="Web del proveedor" class="font-bold" />
                        <x-jet-input type="text" wire:model="supplier.web" class="w-full" />
                        <x-jet-input-error for="supplier.web" />
                    </div>
                </div>
            </form>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('isOpen',false)" class="mx-2">Cancelar</x-jet-secondary-button>
            <x-jet-button wire:click.prevent="store()" wire:loading.attr="disabled" wire:target="store"
                class="disabled:opacity-25">
                Registrar
            </x-jet-button>
        </x-slot>

    </x-jet-dialog-modal>
</div>
