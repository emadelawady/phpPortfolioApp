
<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-slate-200 border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
   <div class="h-full pb-4 overflow-y-auto bg-slate-200 dark:bg-gray-800">
      <ul 
         x-data="{
            dropdown:false,
            portfolioDropdown:{{ is_current_route(['admin.portfolio.index', 'admin.portfolio.create'], if_true:'true', if_false:'false') }},
            settingsDropdown:{{ is_current_route(['admin.settings.homepage', 'admin.settings.about', 'admin.settings.portfolio'], if_true:'true', if_false:'false') }}
            }"
         class="py-2 font-medium"
         >
         <li>
            <a href="{{ route('admin.index') }}" class="flex items-center p-2 text-gray-900 dark:text-white hover:bg-slate-300 dark:hover:bg-gray-700 group {{ is_current_route('admin.index', if_true:'text-primary') }}">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
               <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
               <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
               </svg>


               <span class="ml-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="{{ route('admin.profile') }}" class="flex items-center p-2 text-gray-900 dark:text-white hover:bg-slate-300 dark:hover:bg-gray-700 group {{ is_current_route('admin.profile', if_true:'text-primary') }}">

               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
               <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
               </svg>


               <span class="ml-3">Profile</span>
            </a>
         </li>

         <li x-data="{
            open:{{ is_current_route(
               ['admin.portfolio.index', 'admin.portfolio.create'],
               [
                  'admin.portfolio.show' => ['id' => $current_id],
                  'admin.portfolio.edit' => ['id' => $current_id]
               ],
               if_true:'true',
               if_false:'false'
               ) }},
            }">
            <button @click="open =! open"
               :class="{'bg-gray-300': open!=false}"
               class="w-full flex items-center justify-between p-2 border-b border-y-slate-200 text-gray-900 hover:bg-slate-300 dark:bg-gray-700 group {{ is_current_route(['admin.portfolio.index', 'admin.portfolio.create'], if_true:'!text-gray-500') }}"
               type="button">

               <div class="flex flex-wrap items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                     </svg>

                  <span class="ml-3 dark:text-white">Portfolio</span>
               </div>

               <svg class="w-5 h-5 mx-4 fill-current transition ease-in-out" :class="{ 'rotate-180': open!=false}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                  style="margin-top:3px">
                  <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
               </svg>

            </button>
            <ul 
               x-show="open"
               x-transition:enter="transition ease-out duration-300"
               x-transition:enter-start="opacity-0 scale-90"
               x-transition:enter-end="opacity-100 scale-100"
               x-transition:leave="transition ease-in duration-300"
               x-transition:leave-start="opacity-100 scale-100"
               x-transition:leave-end="opacity-0 scale-90"
               class="w-full font-medium bg-slate-200 border border-b-blue-300 rounded dark:text-gray-400 dark:bg-gray-700 {{ route_css('admin.portfolio.index', '', 'hover:bg-slate-200 ') }}">
               <li>
                  <a href="{{ route('admin.portfolio.index') }}" class="flex flex-wrap items-center px-4 py-2 whitespace-no-wrap border-b border-y-slate-200 dark:hover:bg-gray-600 hover:text-blue-500 {{ route_css('admin.portfolio.index', 'text-primary') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>

                        <span class="ml-3">All Portfolios</span>
                  </a>
               </li>
               <li>
                  <a href="{{ route('admin.portfolio.create') }}" class="flex flex-wrap items-center px-4 py-2 whitespace-no-wrap border-b border-y-slate-200 dark:hover:bg-gray-600 hover:text-blue-500 {{ route_css('admin.portfolio.create', 'text-primary') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>


                        <span class="ml-3">Add New</span>
                  </a>
               </li>
            </ul>
         </li>
         <li>
            <a href="{{ route('admin.services.index') }}" class="flex items-center p-2 text-gray-900 dark:text-white hover:bg-slate-300 dark:hover:bg-gray-700 group {{ route_css('admin.services.index', 'bg-slate-300 text-primary') }} 
            
            {{
                is_current_route(route_args:[
                  'admin.service.show' => ['id' => $current_id],
                  'admin.service.edit' => ['id' => $current_id]
                  ],
                  if_true:'bg-slate-300 text-primary') 
            }}
                 
                 {{ in_route('admin.service.edit', ['id' => 1]) ? 'bg-slate-300 text-primary' :'' }}">

               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
               <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
               </svg>


               <span class="ml-3">Services</span>
            </a>
         </li>
         <li>
            <a href="{{ route('admin.testimonials.index') }}" class="flex items-center p-2 text-gray-900 dark:text-white hover:bg-slate-300 dark:hover:bg-gray-700 group {{ is_current_route(['admin.testimonials.index'], if_true:'bg-slate-300 text-primary') }} 
            
            {{
                is_current_route(route_args:[
                  'admin.testimonial.show' => ['id' => $current_id],
                  'admin.testimonial.edit' => ['id' => $current_id]
                  ],
                  if_true:'bg-slate-300 text-primary') 
            }}">

               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
               <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
               </svg>


               <span class="ml-3">Testimonials</span>
            </a>
         </li>
         <li>
            <a href="{{ route('admin.users.index') }}" class="flex items-center p-2 text-gray-900 dark:text-white hover:bg-slate-300 dark:hover:bg-gray-700 group {{ is_current_route(['admin.users.index'], if_true:'bg-slate-300 text-primary') }}
            {{
                is_current_route(route_args:[
                  'admin.user.show' => ['id' => $current_id],
                  'admin.user.edit' => ['id' => $current_id]
                  ],
                  if_true:'bg-slate-300 text-primary') 
            }}
            ">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
               <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
               </svg>


               <span class="ml-3">Users</span>
            </a>
         </li>
         <li>
            <a href="{{ route('admin.blog.index') }}" class="flex items-center p-2 text-gray-900 dark:text-white hover:bg-slate-300 dark:hover:bg-gray-700 group {{ route_css('admin.blog.index', 'bg-slate-300 text-primary') }} {{ in_route('admin.blog.show', ['id' => 1]) ? 'bg-slate-300 text-primary' :'' }} {{ in_route('admin.blog.edit', ['id' => 1]) ? 'bg-slate-300 text-primary' :'' }}">

               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
               <path stroke-linecap="round" d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
               </svg>


               <span class="ml-3">Blog</span>
            </a>
         </li>

         <li>
            <div x-ref="settingsbtn" @click="settingsDropdown =! settingsDropdown" class="flex items-center justify-between hover:text-primary hover:bg-slate-300 dark:hover:bg-gray-700 group  {{ is_current_route(['admin.settings.homepage','admin.settings.about', 'admin.settings.portfolio']) ? 'bg-slate-300 text-primary' : '' }} {{ in_route('admin.portfolio.show', ['id' => 1]) ? 'bg-slate-300 text-primary' :'' }}">

               <a  href="javascript:void(0)" class="w-full flex items-center p-2 text-gray-900 hover:text-primary dark:text-white {{ is_current_route(['admin.settings.homepage', 'admin.settings.about', 'admin.settings.portfolio']) ? 'bg-slate-300 text-primary' : '' }}">


                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>

                  <span class="ml-3">Settings</span>
               </a>
              
                  <svg  class="w-6 h-6 mx-4 cursor-pointer" viewBox="0 0 24 24" :class="{ 'rotate-180': settingsDropdown!=false }" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
               <ul class="mt-0 bg-slate-100 text-slate-500" x-anchor.bottom-start.offset.15="$refs.settingsbtn" x-show="settingsDropdown" x-transition>
                  <li class="w-full px-4 p-2 border-b border-y-slate-200 {{ route_css('admin.settings.homepage', '', 'hover:bg-slate-200 ') }}">
                  
                     <a href="{{ route('admin.settings.homepage') }}" class="w-full flex items-center text-gray-900 dark:text-white dark:hover:bg-gray-700 group {{ route_css('admin.settings.homepage', 'text-primary') }}">


                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>


                        <span class="ml-3">Home Page</span>
                     </a>


                  </li>
                  <li class="w-full px-4 p-2 border-b border-y-slate-200 {{ route_css('admin.settings.about', '', 'hover:bg-slate-200 ') }}">
                  
                     <a href="{{ route('admin.settings.about') }}" class="w-full flex items-center text-gray-900 dark:text-white dark:hover:bg-gray-700 group {{ route_css('admin.settings.about', 'text-primary') }}">


                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>


                        <span class="ml-3">About Page</span>
                     </a>
                  </li>
                  <li class="w-full px-4 p-2 border-b border-y-slate-200 {{ route_css('admin.settings.portfolio', '', 'hover:bg-slate-200 ') }}">
                  
                     <a href="{{ route('admin.settings.portfolio') }}" class="w-full flex items-center text-gray-900 dark:text-white dark:hover:bg-gray-700 group {{ route_css('admin.settings.portfolio', 'text-primary') }}">


                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                        </svg>



                        <span class="ml-3">Portfolio Page</span>
                     </a>
                  </li>
               </ul>
         </li>

      </ul>
   </div>
</aside>