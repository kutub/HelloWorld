<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-4xl text-gray-800 leading-tight">
            {{ __('Tenants') }}
            <x-btn-link href="{{route('tenants.create')}}" class="float-right">Add Tenant</x-btn-link>
        </h2>

    </x-slot>
    <div class="w-full h-full " style="background-image: url('../images/1.png'); background-repeat: no-repeat;background-position: center; background-size: 800px 1080px">
        <div class="flex flex-row justify-center">
            <div class="basis-2/3 bg-white py-16 px-4">
                <table class="border-collapse border border-slate-400 ">
                    <thead>
                      <tr>
                        <th class="border border-slate-300 text-lg py-2">Name</th>
                        <th class="border border-slate-300 text-lg py-2">Email</th>
                        <th class="border border-slate-300 text-lg py-2">Domain</th>
                        <th class="border border-slate-300 text-lg py-2">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($tenants as $tenant)
                        <tr>
                            <td class="border border-slate-300 py-1 px-8 text-[1.2rem]">{{$tenant->name}}</td>
                            <td class="border border-slate-300 py-1 px-8 text-[1.2rem]">{{$tenant->email}}</td>
                            @foreach ($tenant['domains'] as $domain)
                               <td class="border border-slate-300 py-1 px-8 text-[1.2rem]"> {{$domain->domain}} {{$loop->last ? '' : ','}} </td>
                            @endforeach

                        </tr>
                    @endforeach


                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</x-app-layout>
