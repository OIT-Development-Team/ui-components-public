 <!-- Active: "bg-gray-200 text-gray-900 group-hover:bg-gray-300", Not Active: "invisible text-gray-400 group-hover:visible group-focus:visible" -->
 <span {{ $attributes }}>
     <span @class([
         'bg-gray-200 text-gray-900 group-hover:bg-gray-300' => $active,
         'invisible text-gray-400 group-hover:visible group-focus:visible' => !$active,
     ])>
         @if ($sortAsc)
             <svg aria-hidden="true"
                  class="size-5"
                  data-slot="icon"
                  fill="currentColor"
                  viewBox="0 0 20 20">
                 <path clip-rule="evenodd"
                       d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                       fill-rule="evenodd" />
             </svg>
         @else
             <svg class="size-5"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                 <path clip-rule="evenodd"
                       d="M9.47 6.47a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 1 1-1.06 1.06L10 8.06l-3.72 3.72a.75.75 0 0 1-1.06-1.06l4.25-4.25Z"
                       fill-rule="evenodd" />
             </svg>
         @endif
     </span>
 </span>
