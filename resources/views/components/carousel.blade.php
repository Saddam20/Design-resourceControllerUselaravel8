<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->

           
  <x-carousel id="carousel-2" :indicators="true" :control="true" class="mb-3">
    <x-slot name="slot_1">
      <x-card :overlay="true">
        <x-slot name="image">
          <x-image :lazyload="false" src=""/>
        </x-slot>
        <x-slot name="body">
          <div class="d-flex mt-4 justify-content-center">
            <h2 class="text-white display-1">Slot 1</h2>
          </div>
        </x-slot>
      </x-card>
    </x-slot>

    <x-slot name="slot_2">
      <x-card :overlay="true">
        <x-slot name="image">
          <x-image :lazyload="false" src=""/>
        </x-slot>
        <x-slot name="body">
          <div class="d-flex mt-4 justify-content-center">
            <h2 class="text-white display-1">Slot 2</h2>
          </div>
        </x-slot>
      </x-card>
    </x-slot>

    <x-slot name="slot_3">
      <x-card :overlay="true">
        <x-slot name="image">
          <x-image :lazyload="false" src=""/>
        </x-slot>
        <x-slot name="body">
          <div class="d-flex mt-4 justify-content-center">
            <h2 class="text-white display-1">Slot 3</h2>
          </div>
        </x-slot>
      </x-card>
    </x-slot>
  </x-carousel>

</div>
