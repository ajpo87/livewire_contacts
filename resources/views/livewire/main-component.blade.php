<div>
   <div class="text-center my-5">
    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="img-fluid" width="128">

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-4">
              @livewire('form-contact')
            </div>
            <div class="col-md-8">
                @livewire('contacts')
            </div>
        </div>
    </div>
</div>
