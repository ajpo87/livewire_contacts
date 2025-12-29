<div class="card p-5">
  <p class="mb-3">Contacts</p>

    @if($contacts->count() === 0)
      <div class= opacity-50"> No contacts found</div>
    @else
   
      @foreach($contacts as $contact)
        <div class="card p-3 m-2">
          <div class="row">
            <h5 class="col">{{ $contact->name }}</h5>
            <p class="col">{{ $contact->email }}</p>
            <p class="col">{{ $contact->phone }}</p>
          </div>
        </div>
      @endforeach
    @endif

</div>
