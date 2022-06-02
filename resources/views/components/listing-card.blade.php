@props(['listing'])
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{ asset('images/acme.png') }}"
            alt=""
        />
        <div>
            <h3 class="text-2xl">
                <a href="/find/{{ $listing->id }}">{{ $listing->title }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
            <ul class="flex">
              <x-listing-tags :tagsCsv="$listing->tags"/>
            </ul>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"> {{ $listing->location}} </i> 
            </div>
        </div>
    </div>
