<nav x-data="{ open: false }" class="bg-amber-300 border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link href="{{ route('dashboard') }}" wire:navigate :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>

                    <x-nav-link href="{{ route('waitlist') }}" wire:navigate :active="request()->routeIs('waitlist')">
                        {{ __('Waitlist') }}
                    </x-nav-link>

                    <x-nav-link href="{{ route('tdc-accepted-list') }}" wire:navigate :active="request()->routeIs('tdc-accepted-list')">
                        {{ __('TDC Accepted List') }}
                    </x-nav-link>

                    <x-nav-link href="{{ route('pdc-accepted-list') }}" wire:navigate :active="request()->routeIs('pdc-accepted-list')">
                        {{ __('PDC Accepted List') }}
                    </x-nav-link>

                    <x-nav-link href="{{ route('denied-history') }}" wire:navigate :active="request()->routeIs('denied-history')">
                        {{ __('Denied History') }}
                    </x-nav-link>

                    <x-nav-link href="{{ route('instructor') }}" wire:navigate :active="request()->routeIs('instructor')">
                        {{ __('Instructor') }}
                    </x-nav-link>

                    <x-nav-link href="{{ route('calendar') }}" wire:navigate :active="request()->routeIs('calendar')">
                        {{ __('Calendar') }}
                    </x-nav-link>

                    {{-- <x-nav-link href="{{ route('schedule-list') }}" wire:navigate :active="request()->routeIs('schedule-list')">
                        {{ __('Schedule List') }}
                    </x-nav-link> --}}
                </div>
            </div>

            

            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ms-3 relative">
                        <x-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-700 hover:text-gray-900 bg-emerald-300 focus:outline-none active:bg-emerald-300 transition ease-in-out duration-150">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-dropdown-link>
                                    @endcan

                                    <!-- Team Switcher -->
                                    @if (Auth::user()->allTeams()->count() > 1)
                                        <div class="border-t border-gray-200"></div>

                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Switch Teams') }}
                                        </div>

                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-switchable-team :team="$team" />
                                        @endforeach
                                    @endif
                                </div>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ms-3 relative flex gap-x-4">

                    {{-- Navbar right design --}}
                    <div class="relative flex items-center space-x-3">
  
                        <div class="items-center hidden space-x-3 md:flex">
                            
                          <!-- Notification Button -->
                          <div class="relative" x-data="{ isOpen: false }">

                            <!-- red dot -->
                            <div class="absolute right-0 p-1 bg-red-400 rounded-full animate-ping"></div>

                            <div class="absolute right-0 p-1 bg-red-400 border rounded-full"></div>

                            <button
                              @click="isOpen = !isOpen"
                              class="p-2 rounded-full focus:outline-none focus:ring"
                            >
                              <svg
                                class="w-5 h-5 text-gray-500"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                              >
                                <path
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                                />
                              </svg>
                            </button>
          
                            <!-- Dropdown card -->
                            <div
                              @click.away="isOpen = false"
                              x-show.transition.opacity="isOpen"
                              class="absolute w-48 max-w-md mt-3 transform bg-white rounded-md shadow-lg -translate-x-3/4 min-w-max"
                            >
                              <div class="p-4 font-medium border-b">
                                <span class="text-gray-800">Notification</span>
                              </div>
                              <ul class="flex flex-col p-2 my-2 space-y-1">
                                <li>
                                  <a href="#" class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Link</a>
                                </li>
                                <li>
                                  <a href="#" class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Another Link</a>
                                </li>
                              </ul>
                              <div class="flex items-center justify-center p-4 text-blue-700 underline border-t">
                                <a href="#">See All</a>
                              </div>
                            </div>
                          </div>
          
                          <!-- Services Button -->
                          <div x-data="{ isOpen: false }">
                            <button
                              @click="isOpen = !isOpen"
                              class="p-2 rounded-full focus:outline-none focus:ring"
                            >
                              <svg
                                class="w-5 h-5 text-gray-500"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                              >
                                <path
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
                                />
                              </svg>
                            </button>
          
                            <!-- Dropdown -->
                            <div
                              @click.away="isOpen = false"
                              @keydown.escape="isOpen = false"
                              x-show.transition.opacity="isOpen"
                              class="absolute mt-3 transform bg-white rounded-md shadow-lg -translate-x-3/4 min-w-max"
                            >
                              <div class="p-4 text-lg font-medium border-b">Web apps & services</div>
                              <ul class="flex flex-col p-2 my-3 space-y-3">
                                <li>
                                  <a href="#" class="flex items-start px-2 py-1 space-x-2 rounded-md hover:bg-gray-100">
                                    <span class="block mt-1">
                                      <svg
                                        class="w-6 h-6 text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                      >
                                        <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                        <path
                                          fill="#fff"
                                          d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
                                        />
                                        <path
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
                                        />
                                      </svg>
                                    </span>
                                    <span class="flex flex-col">
                                      <span class="text-lg">Atlassian</span>
                                      <span class="text-sm text-gray-400">Lorem ipsum dolor sit.</span>
                                    </span>
                                  </a>
                                </li>
                                <li>
                                  <a href="#" class="flex items-start px-2 py-1 space-x-2 rounded-md hover:bg-gray-100">
                                    <span class="block mt-1">
                                      <svg
                                        class="w-6 h-6 text-gray-500"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                      >
                                        <path
                                          stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                                        />
                                      </svg>
                                    </span>
                                    <span class="flex flex-col">
                                      <span class="text-lg">Slack</span>
                                      <span class="text-sm text-gray-400"
                                        >Lorem ipsum, dolor sit amet consectetur adipisicing elit.</span
                                      >
                                    </span>
                                  </a>
                                </li>
                              </ul>
                              <div class="flex items-center justify-center p-4 text-blue-700 underline border-t">
                                <a href="#">Show all apps</a>
                              </div>
                            </div>
                          </div>
          
                          <!-- Options Button -->
                          <div class="relative" x-data="{ isOpen: false }">
                            <button
                              @click="isOpen = !isOpen"
                              class="p-2 rounded-full focus:outline-none focus:ring"
                            >
                              <svg
                                class="w-5 h-5 text-gray-500"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                              >
                                <path
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"
                                />
                              </svg>
                            </button>
          
                            <!-- Dropdown card -->
                            <div
                              @click.away="isOpen = false"
                              x-show.transition.opacity="isOpen"
                              class="absolute w-40 max-w-sm mt-3 transform bg-white rounded-md shadow-lg -translate-x-3/4 min-w-max"
                            >
                              <div class="p-4 font-medium border-b">
                                <span class="text-gray-800">Options</span>
                              </div>
                              <ul class="flex flex-col p-2 my-2 space-y-1">
                                <li>
                                  <a href="#" class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Link</a>
                                </li>
                                <li>
                                  <a href="#" class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Another Link</a>
                                </li>
                              </ul>
                              <div class="flex items-center justify-center p-4 text-blue-700 underline border-t">
                                <a href="#">See All</a>
                              </div>
                            </div>
                          </div>
                        </div>
        
                    </div>

                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('dashboard') }}" wire:navigate :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link href="{{ route('waitlist') }}" wire:navigate :active="request()->routeIs('waitlist')">
                {{ __('Waitlist') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link href="{{ route('tdc-accepted-list') }}" wire:navigate :active="request()->routeIs('tdc-accepted-list')">
                {{ __('TDC Accepted List') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link href="{{ route('pdc-accepted-list') }}" wire:navigate :active="request()->routeIs('pdc-accepted-list')">
                {{ __('PDC Accepted List') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link href="{{ route('denied-history') }}" wire:navigate :active="request()->routeIs('denied-history')">
                {{ __('Denied History') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link href="{{ route('instructor') }}" wire:navigate :active="request()->routeIs('instructor')">
                {{ __('Instructor') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link href="{{ route('calendar') }}" wire:navigate :active="request()->routeIs('calendar')">
                {{ __('Calendar') }}
            </x-responsive-nav-link>

            {{-- <x-responsive-nav-link href="{{ route('schedule-list') }}" wire:navigate :active="request()->routeIs('schedule-list')">
                {{ __('Schedule List') }}
            </x-responsive-nav-link> --}}

        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 me-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-responsive-nav-link href="{{ route('profile.show') }}" wire:navigate :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-responsive-nav-link href="{{ route('logout') }}" wire:navigate
                                   @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" wire:navigate :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-responsive-nav-link>

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-responsive-nav-link href="{{ route('teams.create') }}" wire:navigate :active="request()->routeIs('teams.create')">
                            {{ __('Create New Team') }}
                        </x-responsive-nav-link>
                    @endcan

                    <!-- Team Switcher -->
                    @if (Auth::user()->allTeams()->count() > 1)
                        <div class="border-t border-gray-200"></div>

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Switch Teams') }}
                        </div>

                        @foreach (Auth::user()->allTeams() as $team)
                            <x-switchable-team :team="$team" component="responsive-nav-link" />
                        @endforeach
                    @endif
                @endif
            </div>
        </div>
    </div>
</nav>
