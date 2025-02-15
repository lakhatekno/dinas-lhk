<aside class="flex flex-col gap-0 w-96 pt-2 bg-[#34495e]">
    <div class="px-6 py-3">
        <form action="{{ route('search.submenu') }}" method="POST" id="query" class="relative">
            @csrf
            <input name="keyword" id="keyword" class="w-full bg-white rounded-lg appearance-none py-3 pl-4 pr-12 text-base text-slate-900 placeholder:text-slate-600 focus:outline-none sm:text-sm sm:leading-6" placeholder="Masukkan kata kunci" aria-label="Search components" type="text" value="" style="caret-color: rgb(107, 114, 128);">
            <button type="submit" class="hover:cursor-pointer absolute right-4 top-3">
                <svg class="stroke-slate-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
            </button>
        </form>
    </div>
    @foreach ($parents as $parent)
    <div class="text-white" x-data="{ 
        open: '{{ $parent->name }}' === '{{ $subtitle }}',
        toggle() { 
            this.open = !this.open;
        }
     }">
        <div @click="toggle" class="flex justify-between items-center hover:bg-[#283749] px-6 py-4 cursor-pointer">
            <p>{{ $parent->name }}</p>
            <svg :class="{'rotate-180': open}" class="fill-white stroke-white transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/>
            </svg>
        </div>
        <!-- Child elements -->
        @if($parent->children->isNotEmpty())
            <div x-show="open" class="transition-all duration-200 ease-in-out overflow-hidden">
                @foreach($parent->children as $child)
                    <a href="/dataku/{{ $child->slug }}" class="block bg-[#283749] hover:bg-[#212d3b] text-sm">
                        <p class="pl-12 pr-6 py-2">{{ $child->name }}</p>
                    </a>
                @endforeach
            </div>
        @endif
    </div>
    @endforeach
</aside>
