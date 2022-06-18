<x-app-layout>

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('user.liste_users')}}
        </h2>
    </x-slot>
<div class="py-12">
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <table>
        <tr><th>Id du user</th><th>Nom</th><th>Email</th><th>Rôle</th><th>Adresse</th></tr>
        @forelse($users as $user)
        <tr>
            <td> {{ $user['id'] }}</td>
            <td> {{ $user['name'] }}</td>
            <td> {{ $user['email'] }}</td>
            <td> {{ $user['role'] }}</td>
            <td> {{ $user['adresse'] }}</td>
        </tr>
    @empty
        Pas encore de jeux, voulez vous en ajouter ?
    @endforelse
    </table>
    </div>
</div>
</div>

</x-app-layout>
