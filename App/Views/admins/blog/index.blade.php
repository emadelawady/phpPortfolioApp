<x-layouts.admins.adminLayout>




<section class="mt-10 mb-20">
    <div class="bg-white py-3 sm:py-4 lg:py-6">
    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
        <p class="mb-2 font-semibold text-indigo-500 md:mb-3 lg:text-lg">Introducing</p>

        <h2 class="mb-4 text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Blog</h2>

        {{-- <p class="max-w-screen-md text-gray-500 md:text-lg">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated.</p> --}}
    </div>
    </div>

    <div class="flex flex-wrap justify-end p-3 mb-6">
    <!-- Border -->

        <a
        class="inline-block rounded border border-indigo-600 px-12 py-3 text-sm font-medium text-indigo-600 hover:bg-indigo-600 hover:text-white focus:outline-none focus:ring active:bg-indigo-500"
        href="{{ route('admin.blog.create') }}"
        >
        Create
        </a>
    </div>



    <div class="overflow-x-auto">
    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
        <thead class="text-left">
        <tr>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
            Name
            </th>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
            Description
            </th>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
            link
            </th>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
            built with
            </th>
            <th class="px-4 py-2"></th>
            <th class="px-4 py-2"></th>
            <th class="px-4 py-2"></th>
        </tr>
        </thead>

        <tbody class="divide-y divide-gray-200">
        @foreach($blogs as $blog)
        <tr>
            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                {{ $blog->title }}
            </td>
            <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $blog->content }}</td>
            <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $blog->rate }}</td>
            <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $blog->tags }}</td>
            <td class="whitespace-nowrap px-4 py-2">
                <a
                    href="{{ route('admin.blog.show', ['id' => $blog->id]) }}"
                    class="inline-block rounded bg-indigo-500 px-4 py-2 text-xs font-medium text-white hover:bg-indigo-700"
                >
                    View
                </a>
            </td>
            <td class="whitespace-nowrap px-4 py-2">
                <a
                    href="{{ route('admin.blog.edit', ['id' => $blog->id]) }}"
                    class="inline-block rounded bg-green-500 px-4 py-2 text-xs font-medium text-white hover:bg-green-700"
                >
                    Edit
                </a>
            </td>
            <td class="whitespace-nowrap px-4 py-2">
                <form
                    action="{{ route('admin.blog.delete', ['id' => $blog->id]) }}"
                    method="POST"
                    class="inline-block rounded bg-red-500 px-4 py-2 text-xs font-medium text-white hover:bg-red-700"
                >
                <input type="hidden" name="_method" value="DELETE">
                    <button>Delete</button>
                </form>
            </td>
        </tr>
        @endforeach


   
        </tbody>
    </table>
    </div>


		<x-globals.sessions.success-id />



</section>




</section>

</x-layouts.admins.adminLayout>